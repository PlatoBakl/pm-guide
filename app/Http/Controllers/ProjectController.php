<?php

namespace App\Http\Controllers;

use App\Comparison;
use App\Methodology;
use App\Project;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user()->load('projects', 'projects.comparison');

        return view('projects', ['user' => $user]);
    }

    /**
     * Store a new project.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $input = $request->only(['title', 'type', 'objective']);

        $user = Auth::user();

        $project = new Project([
            'title' => $input['title'],
            'type' => $input['type'],
            'objective' => $input['objective'],
        ]);

        $user->projects()->save($project);

        $questions = Question::all()->load('answers');

        return view('choice.questions', ['questions' => $questions, 'project' => $project->id]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Throwable
     */
    public function calculateDistance(Request $request)
    {
        $userAnswers = json_decode($request->get('answers'));
        $project = $request->get('project');

        $methodologies = Methodology::all()->load('answers');
        $questions = Question::all()->keyBy('id');

        $distances = [];

        foreach ($methodologies as $methodology) {

            $points = [
                'hamming' => [],
                'euclid' => [],
            ];

            $template = [];

            foreach ($methodology->answers as $answer) {

                if (!isset($template[$answer->question_id - 1])) {
                    $template[$answer->question_id - 1] = [0, 0, 0, 0];
                }

                $template[$answer->question_id - 1][$answer->answer_id - 1] = $answer->points;
            }

            foreach ($template as $id => $question) {

                $distHamming = [];
                $distEuclid = [];

                foreach ($userAnswers[$id] as $answerId => $userPoint) {

                    $methodPoint = $question[$answerId];

                    if ($methodPoint < $userPoint) {

                        $dif = $userPoint - $methodPoint;

                        $distHamming[] = abs($dif);
                        $distEuclid[] = pow($dif, 2);
                    }
                }

                $weight = $questions[$id + 1]->weight;

                $points['hamming'][$id] = $weight * array_sum($distHamming);
                $points['euclid'][$id] = $weight * sqrt(array_sum($distEuclid));
            }

            $distances[$methodology->name]['hamming'] = array_sum($points['hamming']);
            $distances[$methodology->name]['euclid'] = array_sum($points['euclid']);

            $result = new Comparison([
                'methodology_id' => $methodology->id,
                'project_id' => $project,
                'hamming' => $distances[$methodology->name]['hamming'],
                'euclid' => $distances[$methodology->name]['euclid'],
            ]);
            $result->save();
        }

        $html = view('choice.result')->with('results', $distances)->render();

        return response()->json(array('success' => true, 'html'=>$html));
    }

}
