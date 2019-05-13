@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="twelve columns">
                <form method="POST" action="/projects/{{$project->id}}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="row">
                        <label for="title">@lang('project.title')</label>
                        <input class="u-full-width" type="text" name="title" value="{{$project->title}}">
                    </div>
                    <div class="row">
                        <div class="six columns">
                            <label for="type">@lang('project.type')</label>
                            <select name = "type" class="u-full-width" >
                                <option selected value="{{$project->type}}">{{$project->type}}</option>
                                <option value="landing page">@lang('project.landing')</option>
                                <option value="blog">@lang('project.blog')</option>
                                <option value="online store">@lang('project.store')</option>
                            </select>
                        </div>
                        <div class="six columns">
                            <label for="colors">@lang('project.color')</label>
                            <br>
                            <?php $colors = explode(",", $project->color)?>
                            @foreach($colors as $color)
                                <input class="color-input" type="color" name="color[]" value="{{$color}}">
                            @endforeach
                        </div>
                    </div>
                    <label for="description">@lang('project.description')</label>
                    <textarea style="overflow: hidden; height: 200px" class="u-full-width" name="description">{{$project->description}}</textarea>
                    <input class="button-primary" type="submit" value="@lang('project.update_button')">
                    @include('layouts.error')
                </form>
            </div>
        </div>
    </div>
@endsection