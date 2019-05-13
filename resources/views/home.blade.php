@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="twelve columns">
                <h2 class="projects-title">@lang('home.my_projects')</h2>
            </div>
            <div class="twelve columns">
                @if (session('message'))
                    <div class="info-box">{{ session('message') }}</div>
                @endif
            </div>
            <div class="twelve columns wow fadeIn">
            @foreach ($projects as $project)
                <div class="default-box">
                    <h3><a href="/projects/{{ $project->id }}"> {{ $project->title }}</a></h3>
                <div>{{ $project->description }}</div>
                </div>
            @endforeach
            </div>
        </div>

        <div class="row">
            <div class="center-block">
            <div><a class="button button-primary" href="/projects/create">@lang('home.create_project_button')</a></div>
            </div>
        </div>
    </div>

@endsection
