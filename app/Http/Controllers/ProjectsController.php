<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use DB;

class ProjectsController extends Controller
{
    public function index($id)
    {
        $request = request();
        $user = User::where('name', '=', $request->query('user'))->get();
        $project = Project::find($id);
        $tasks = Task::get_project_data($id);
        $hours = Task::get_project_hours_sum($id);
        return view('pages.project-tasks')
                    ->with('hours', $hours)
                    ->with('project', $project)
                    ->with('tasks', $tasks)
                    ->with('user', $user);
    }
}
