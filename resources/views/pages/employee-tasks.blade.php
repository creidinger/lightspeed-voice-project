@extends('layouts.master')
{{-- META --}}
@section('title', 'Tasks | ')
@section('description','')
{{-- END META --}}

@php
    use App\Models\Task;
@endphp
@section('content')

<section>
    <div class="container">

        <div class="header">
            <div class="wrapper">
                <h1>{{$user[0]->name}}'s Project List</h1>
            </div>
        </div>
        <div class="proj-tbl">
            <div class="wrapper">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Porject</th>
                            <th scope="col">Members</th>
                            <th scope="col">Estimated Hours</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{$project->project_name}}</th>
                            <td>{{Task::get_project_members($project->project_id)}}</td>
                            <td>{{Task::get_project_hours_sum($project->project_id)}}</td>
                            <td><a href="/project/{{$project->project_id}}">View</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- .container -->
</section>


@endsection
