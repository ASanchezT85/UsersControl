@extends('layouts.auth')

@section('content')
<header id="auth-header" class="auth-header">
    <h1>
        <img src="{{ asset('png/brand-inverse.png') }}" alt="" height="72"> 
        <span class="sr-only">{{ __('Sign In') }}</span>
    </h1>
    <p> {{ __('You do not have an account?') }} 
        <a href="{{ route('register') }}">{{ __('Create One') }}</a>
    </p>
</header>
<form method="POST" action="{{ route('login') }}" class="auth-form">
    @csrf
    <div class="form-group">
        <div class="form-label-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            <label for="email" class="">{{ __('E-Mail Address') }}</label>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            <label for="password" class="">{{ __('Password') }}</label>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group text-center">
        <div class="custom-control custom-control-inline custom-checkbox">
            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ __('Login') }}
        </button>
    </div>
    <div class="text-center pt-3">
        @if (Route::has('password.request'))
            <a class="link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
</form>
@endsection

@section('scripts')
@include('auth.includs.particles')
@endsection
