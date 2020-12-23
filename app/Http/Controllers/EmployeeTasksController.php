<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use DB;

class EmployeeTasksController extends Controller
{
    public function index()
    {
        $request = request();
        if ($request->query('user')) {
            $user = User::where('name', '=', $request->query('user'))->get();
            $projects = Task::get_user_projects();
            return view('pages.employee-tasks')
                        ->with('user', $user)
                        ->with('projects', $projects);
        } else {
            return view('index');
        }

    }
}
