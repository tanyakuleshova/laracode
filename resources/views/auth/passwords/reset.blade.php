@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="default-box">
                <div class="row justify-content-center">@lang('auth.reset')</div>

                <div>
                    <form method="POST" action="{{ route('password.update') }}" style="margin: 0px">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row">
                            <label for="email" >@lang('auth.email')</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="row">
                            <label for="password">@lang('auth.password')</label>

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="row">
                            <label for="password-confirm">@lang('auth.confirm_password')</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <div class="row justify-content-center">
                                <input type="submit" class="button-primary margin-top" value="@lang('auth.reset_button')">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
