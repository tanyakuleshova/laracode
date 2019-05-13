@component('mail::message')
@lang('project.message')


@component('mail::button', ['url' => url('/projects/' . $project->id)])
@lang('project.project_button')
@endcomponent

@lang('project.thanks'),<br>
{{ config('app.name') }}
@endcomponent
