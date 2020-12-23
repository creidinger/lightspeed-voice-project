@extends('layouts.master')
{{-- META --}}
@section('title', 'Project | ')
@section('description','')
{{-- END META --}}

@php
    use App\Models\Task;
@endphp
@section('content')

<section>
    <div class="container">

        <div class="header">
            <div class="row">
                <div class="col-6">
                    <h1>{{$project->project_name}}</h1>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    <div>
                        {{$hours}} hours
                    </div>
                </div>
            </div>
        </div>
        <div class="proj-tbl">
            <div class="wrapper">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Task</th>
                            <th scope="col">Assigned To</th>
                            <th scope="col">Estimated Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <th scope="row">{{$task->task_name}}</th>
                            <td>{{$task->assigned_to}}</td>
                            <td>{{$task->hours}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <a href="{{url()->previous()}}">Back</a>

    </div><!-- .container -->
</section>


@endsection
