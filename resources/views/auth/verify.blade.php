@extends('layouts.appv')

@section('content')
<header id="auth-header" class="auth-header">
    <h1>
        <img src="{{ asset('png/brand-inverse.png') }}" alt="" height="72"> 
        <span class="sr-only">{{ __('Sign In') }}</span>
    </h1>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('auth.includs.particles')
@endsection
