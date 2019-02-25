@extends('layouts.auth')

@section('content')
<header id="auth-header" class="auth-header">
    <h1>
        <img src="{{ asset('png/brand-inverse.png') }}" alt="" height="72"> 
        <span class="sr-only">{{ __('Sign In') }}</span>
    </h1>
    <p>
        <a href="{{ route('login') }}">{{ __('Enter here') }} </a>
        ó
        <a href=" {{ route('register') }}">{{ __('Create One') }}</a>
    </p>
</header>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="{{ route('password.email') }}" class="auth-form">
    @csrf

    <div class="form-group">
        <div class="form-label-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            <label for="email">{{ __('E-Mail Address') }}</label>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ __('Send Password Reset Link') }}
        </button>
    </div>
</form>
@endsection

@section('scripts')
@include('auth.includs.particles')
@endsection
