@extends('layouts.app')

@section('content')
<header id="auth-header" class="auth-header">
    <h1>
        <img src="{{ asset('png/brand-inverse.png') }}" alt="" height="72"> 
        <span class="sr-only">{{ __('Sign In') }}</span>
    </h1>
    <p> {{ __('Already have an account? please') }} 
        <a href="{{ route('login') }}">{{ __('Enter here') }}</a>
    </p>
</header>
<form method="POST" action="{{ route('register') }}" class="auth-form">
    @csrf
    <div class="form-group">
        <div class="form-label-group">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            <label for="name">{{ __('Name') }}</label>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            <label for="email">{{ __('E-Mail Address') }}</label>
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
            <label for="password">{{ __('Password') }}</label>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ __('Register') }}
        </button>
    </div>

    <p class="text-center text-muted mb-0"> {{ __('By creating an account you agree to the') }} <a href="#">{{ __('Terms of Use') }}</a> {{ __('and') }} <a href="#">{{ __('Privacy Policy') }}</a>. </p>
</form>
@endsection

@section('scripts')
@include('auth.includs.particles')
@endsection
