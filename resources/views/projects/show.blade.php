@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="twelve columns">
                <h2 class="projects-title">{{ $project->title }}</h2>
                <div class="default-box">
                    <div class="project-type-color">
                        <div>{{ $project->type }}</div>
                    <?php $colors = explode(",", $project->color)?>
                    @foreach($colors as $color)
                        <div class="project-color" style="background-color: {{$color}};"></div>
                    @endforeach
                    </div>
                    <p style="font-weight: bold">@lang('project.description')</p>
                    <div>{{ $project->description }}</div>

                    <a style="margin-top: 20px" class="button button-primary" href="/projects/{{$project->id}}/edit">@lang('project.edit_button')</a>
                </div>
            </div>
        </div>
    </div>
@endsection