@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="ten column">
            <form method="POST" action="/projects">
                @csrf
                <div class="row">
                    <div class="twelve columns">
                        <label for="title">@lang('project.title')</label>
                        <input class="u-full-width" type="text" placeholder="@lang('project.name')" name="title" value = {{ old('title') }}>
                    </div>
                </div>

                <div class="row">
                    <div class="six columns">
                        <label for="type">@lang('project.type')</label>
                        <select name = "type" class="u-full-width" >
                            <option value="Landing page">@lang('project.landing')</option>
                            <option value="blog">@lang('project.blog')</option>
                            <option value="online store">@lang('project.store')</option>
                        </select>
                    </div>
                    <div class="six columns">
                        <label for="colors">@lang('project.color')</label>
                        <br>
                        <input class="color-input" type="color" name="color[]" value="{{ (old('color[]')) ? old('color[]') : 'FFFF00' }}" >
                        <input class="color-input" type="color" name="color[]" value="#FFFFFF">
                        <input class="color-input" type="color" name="color[]" value="#B5B5B5">
                        <input class="color-input" type="color" name="color[]" value="#33C3F0">
                    </div>
                </div>
                <label for="description">@lang('project.description')</label>
                <textarea class="u-full-width" placeholder="@lang('project.desc_placeholder')" name="description" value = {{ old('description') }}></textarea>


                    @include('layouts.error')


                <input class="button-primary" type="submit" value="@lang('project.submit_button')">

            </form>
            </div>
        </div>
    </div>
@endsection