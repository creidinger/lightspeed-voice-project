@extends('layouts.master')
{{-- META --}}
@section('title', 'To-do | ')
@section('description','')
{{-- END META --}}

@section('content')

<!-- .hero
========================================== -->
<section id="hero-main" class="hero bg-grey">
    <div class="hero-content-wrapper container">

        <div class="bd-content">
            <div class="brand-wrapper">
                <h1 class="text-content txt-white">To Do</h1>
                <div class="highlight">
                    <p>Enter an employee name as a query string to view their tasks</p>
                    <p>
                        <code>
                            ?user=adam<br>
                            ?user=lan<br>
                            ?user=stuart<br>
                            ?user=tyler
                        </code>
                    </p>
                </div>
            </div>
        </div><!-- .hero-brand -->

    </div><!-- .hero-content-wrapper -->
</section><!-- .hero -->

@endsection
