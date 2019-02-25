@extends('layouts.app')

@section('content')
<header id="auth-header" class="auth-header">
    <h1>
        <img src="{{ asset('png/brand-inverse.png') }}" alt="" height="72"> 
        <span class="sr-only">{{ __('Sign In') }}</span>
    </h1>
</header>
<form method="POST" action="{{ route('password.update') }}" class="auth-form">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
        <div class="form-label-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
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
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ __('Reset Password') }}
        </button>
    </div>
</form>
@endsection

@section('scripts')
@include('auth.includs.particles')
@endsection
