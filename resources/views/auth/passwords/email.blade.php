@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="default-box">
                <div class="row justify-content-center">@lang('auth.reset')</div>

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" style="margin: 0px">
                        @csrf

                        <div class="row">
                            <label for="email">@lang('auth.email')</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="row justify-content-center">
                                <input type="submit" class="button-primary margin-top" value="@lang('auth.send_reset_link')">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
