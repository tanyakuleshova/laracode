@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="default-box">
                <div class="row justify-content-center">@lang('auth.Login')</div>
                <div>
                    <form method="POST" action="{{ route('login') }}" style="margin: 0px">
                        @csrf
                        <div class="row">
                            <label for="email" >@lang('auth.email')</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="row">
                            <label for="password">@lang('auth.password')</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

{{--                        <div class="row vertical-centered">--}}
{{--                            <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                            <label style="margin: 0px" for="remember">--}}
{{--                                @lang('auth.remember_me')--}}
{{--                            </label>--}}
{{--                        </div>--}}
                        <div class="row">
                            @if (Route::has('password.request'))
                                <a style="font-size: 14px" href="{{ route('password.request') }}">
                                    @lang('auth.forgot_password')
                                </a>
                            @endif
                        </div>

                        <div class="row justify-content-center">
                            <input type="submit" class="button-primary margin-top" value="@lang('auth.Login')">
                        </div>
                    </form>
                    <div class="row justify-content-center">
                        <a href="/register">@lang('auth.Register')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
