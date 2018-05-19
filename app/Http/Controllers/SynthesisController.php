<?php

namespace App\Http\Controllers;

use App\Comparison;
use App\Methodology;
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

        return view('synthesis.create-project', ['user' => $user]);
    }
}