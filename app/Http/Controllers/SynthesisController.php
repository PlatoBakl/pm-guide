<?php

namespace App\Http\Controllers;

use App\Combination;
use App\Comparison;
use App\Methodology;
use App\Process;
use App\Project;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SynthesisController extends Controller
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

    public function index()
    {
        $user = Auth::user()->load('projects', 'projects.comparison');

        return view('synthesis.create-project', ['user' => $user]);
    }

    /**
     * Store a new project.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $input = $request->only(['project_id', 'title', 'type', 'objective', 'limit']);

        if(isset($input['project_id']) && !empty($input['project_id'])){
            $project = Project::find($input['project_id']);
            $project->cost_limit = $input['limit'];
            $project->save();
        }else{
            $user = Auth::user();

            $project = new Project([
                'title' => $input['title'],
                'type' => $input['type'],
                'objective' => $input['objective'],
                'cost_limit' => $input['limit'],
            ]);

            $user->projects()->save($project);
        }

        return redirect()->route('combination.list', ['project' => $project->id]);
    }

    public function processOfProject(Project $project){

        $combinations = $project->combinations;

        return view('synthesis.process_list ', compact('combinations','project'));

    }


    public function createCombination(Project $project){

        $combinations = $project->combinations;

        $methodologies = Methodology::all();

        $mark_comparisons = $project->comparisons->sortBy('euclid')->first();

        return view('synthesis.create-combination ', compact('project','combinations', 'methodologies', 'mark_comparisons'));

    }

    public function addCombination(Request $request){

        $team = $request->team;
        $processes = $request->processes;
        $risks = $request->risks;
        $project_id = $request->project_id;
        $title = $request->title;

        $person = [];
        $total_team  = $total_process = $total_risk  = [
            'min' => 0,
            'current' => 0,
            'max' => 0
        ];

        foreach ($team as $rPerson){
            $person[$rPerson['id']] = [
                'min' => $rPerson['min'],
                'current' => $rPerson['current'],
                'max' => $rPerson['max'],
            ];
        }

        foreach ($processes as $process){
            foreach ($process['team'] as $process_team){
                $total_process['min'] += $process_team['min'] * $person[$process_team['id']]['min'];
                $total_process['current'] += $process_team['current'] * $person[$process_team['id']]['current'];
                $total_process['max'] += $process_team['max'] * $person[$process_team['id']]['max'];

                $total_team['min'] += $process_team['min'];
                $total_team['current'] += $process_team['current'];
                $total_team['max'] += $process_team['max'];
            }
        }

        foreach ($risks as $risk){

            //po - is probability_occurrence
            //cm - is consequences_manifestation
            $po = $risk['type'][0]['value'][0];
            $cm = $risk['type'][1]['value'][0];

            $total_risk['min'] += $po['min'] * $cm['min'];
            $total_risk['current'] += $po['current'] * $cm['current'];
            $total_risk['max'] += $po['max'] * $cm['max'];
        }

        $data = [
            'project_id' => $project_id,
            'name' => $title,
            'value' => json_encode($request->all()),
            'total_process_min' => $total_process['min'],
            'total_process_current' => $total_process['current'],
            'total_process_max' => $total_process['max'],
            'total_risk_min' => $total_risk['min'],
            'total_risk_current' => $total_risk['current'],
            'total_risk_max' => $total_risk['max'],
            'total_team_min' => $total_team['min'],
            'total_team_current' => $total_team['current'],
            'total_team_max' => $total_team['max'],
        ];

        $combination = Combination::create($data);

        return response()->json(['combination' => $combination]);
    }

    public function calculateCombination(Project $project){
        $processes = $project->combinations()->where('total_process_max','<', $project->cost_limit )->get();

        $result = $result_sub = $pMin = $max = [];

        foreach ($processes as $process){

            $td = ($process->total_team_min + $process->total_team_current + $process->total_team_max)/3;
            $cd = ($process->total_process_min + $process->total_process_current + $process->total_process_max)/3;
            $rd = ($process->total_risk_min + $process->total_risk_current + $process->total_risk_max)/3;

            $result_sub[$process->id] = [
                'td' => $td,
                'cd' => $cd,
                'rd' => $rd,
            ];

            if(!count($pMin)){
                $pMin = $result_sub[$process->id];
            }else{
                if($pMin['td'] > $td) $pMin['td'] = $td;
                if($pMin['cd'] > $cd) $pMin['cd'] = $cd;
                if($pMin['rd'] > $rd) $pMin['rd'] = $rd;
            }
        }

        foreach ($result_sub as $key => $item){

            $result[$key] = [
                'td' => ($item['td'] - $pMin['td']) / $pMin['td'],
                'cd' => ($item['cd'] - $pMin['cd']) / $pMin['cd'],
                'rd' => ($item['rd'] - $pMin['rd']) / $pMin['rd'],
            ];

            if(count(array_diff($result[$key], array(0)))){
                $max[$key] = max(array_diff($result[$key], array(0)));
            }
        }

        $key = array_search(min($max), $max);

        $combination = Combination::find($key);

        return $combination->name;
//        dd($result_sub,$result,$max);
    }

    /**
     * @param Request $request
     */
    public function getProcess(Request $request){

        $process = Process::where('source_id',$request->methodology_id)->get(['name'])->map(function ($post) {
            $post['team'] = [];
            return $post;
        });

        return response()->json(['process' => $process]);
    }
}