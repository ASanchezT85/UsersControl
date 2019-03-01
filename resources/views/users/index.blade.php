@extends('layouts.app')

@section('content')
<header class="page-cover">
    <!-- .cover-controls -->
    <div class="cover-controls cover-controls">
        @isset(Auth::user()->profile)
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
                <i class="far fa-edit text-yellow"></i>
                {{ __('Edit Profile') }}
            </a>
        @else
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#createProfileModal">
                <i class="far fa-edit text-yellow"></i>
                {{ __('Edit Profile') }}
            </a>
        @endisset
    </div>
    <!-- /.cover-controls -->
    <div class="text-center">
        <div class="ch-grid user-avatar user-avatar-xl">
            <div class="ch-item">
                @isset(Auth::user()->profile)
                    <img src="{{ Auth::user()->profile->avatar }}" alt="">
                    <div class="ch-info">
                        <a href="#" class="btn btn-light" data-toggle="modal" data-target="#editAvatarModal">
                            <i class="far fa-edit text-yellow"></i>
                        </a>
                    </div>
                @else
                    <img src="{{ asset('avatars/default.png') }}" alt="">
                    <div class="ch-info">
                        <a href="#" class="btn btn-light btn-block" data-toggle="modal" data-target="#addAvatarModal" style="margin-top: 45px;">
                            <i class="fas fa-plus text-yellow"></i>
                        </a>
                    </div>
                @endisset
            </div>
        </div>
        
        <h2 class="h4 mt-2 mb-0"> {{ Auth::user()->name }} </h2>
        @isset(Auth::user()->profile)
        <p class="text-muted"> {{ Auth::user()->profile->studies }} </p>
        <p> {{ Auth::user()->profile->description }}. </p>
        @endisset
    </div>
    <!-- .cover-controls -->
    <div class="cover-controls cover-controls-bottom">
        <a href="" class="btn btn-light">
            <i class="fab fa-twitter-square text-yellow"></i>
            @sira8s
        </a>
        <a href="" class="btn btn-light">
            <i class="fab fa-facebook-square text-yellow"></i>
            ajstalito
        </a>
        <a href="" class="btn btn-light">
            <i class="fab fa-facebook-square text-yellow"></i>
            ajstalito
        </a>
    </div>
    <!-- /.cover-controls -->
</header>
@include('users.includs.modals')
@endsection

@section('scripts')
<script src="{{ asset('vendor/SmartWizard/dist/js/jquery.smartWizard.js') }}"></script>
<script src="{{ mix('js/smartwizard.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
@endsection

@section('css')
<link href="{{ asset('css/avatars.css') }}" rel="stylesheet">

<link href="{{ mix('css/smartwizard.css') }}" rel="stylesheet">
@endsection