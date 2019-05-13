@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="default-box">
                <div class="row justify-content-center">@lang('auth.verify_email')</div>

                <div>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('auth.re_verify_notice')
                        </div>
                    @endif

                    {{ __('auth.check_email') }}
                    {{ __('auth.no_link') }}, <a href="{{ route('verification.resend') }}">{{ __('auth.resend_link') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
