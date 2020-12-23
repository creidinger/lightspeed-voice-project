<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    public static function get_user_projects()
    {
        // get unique list of projects for the current user in the query string
        $request = request();
        $data = Task::select('tasks.project_id', 'projects.project_name')
                ->where('users.name', '=',  $request->query('user'))
                ->join('users', 'tasks.assigned_to', '=', 'users.id')
                ->join('projects', 'tasks.project_id', '=', 'projects.id')
                ->groupBy('tasks.project_id')
                ->get();
        return $data;
    }


    public static function get_project_data($project_id)
    {
        // get formatted project data with task list
        $data = Task::select('tasks.task_name', 'tasks.hours', 'users.name AS assigned_to')
                        ->where('tasks.project_id', '=', $project_id)
                        ->join('users', 'tasks.assigned_to', '=', 'users.id')
                        ->get();
        return $data;
    }


    public static function get_project_hours_sum($project_id) {
        // get the sum of the hours for a given project
        $hours = Task::where('project_id', '=', $project_id)->sum('hours');
        return $hours;
    }


    public static function get_project_members($project_id) {
        // get the unique list of project members
        // get ids from tasks
        $members_str = "";
        $members = Task::select('users.name', 'tasks.assigned_to')
                            ->where('tasks.project_id', '=', $project_id)
                            ->join('users', 'tasks.assigned_to', '=', 'users.id')
                            ->groupBy('tasks.assigned_to')
                            ->get();

        // format list as string
        foreach ($members as $m) {
            $members_str = $members_str . " " . $m->name . ",";
        }

        return $members_str;
    }
}
