<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Begin SEO tag - Favicons -->
    @include('layouts.includs.seo')
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('png/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <meta name="theme-color" content="#3063A0">
    <!-- End SEO tag - Favicons-->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->


    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ asset('vendor/open-iconic/font/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/flatpickr/flatpickr.min.css') }}">
    <!-- END PLUGINS STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{ mix('css/theme-dark.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    <!-- END BEGIN THEME STYLES -->

</head>
<body>
    @guest
    <main class="auth">
        @yield('content')
        <!-- copyright -->
        <footer class="auth-footer text-center"> © 2018 {{ __('All Rights Reserved.') }}
            <br>
            <a href="#">{{ __('Terms') }}</a> {{ __('and') }} <a href="#">{{ __('Conditions') }}</a>
        </footer>
    </main>
    @else
    <div class="app">
        <!--[if lt IE 10]>
        <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
        <![endif]-->
        
        @include('layouts.includs.header')
        @include('layouts.includs.aside')
        <main class="app-main">
            <div class="wrapper">
                <div class="page">
                    <div class="page-inner">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
    @endguest

    <!-- BEGIN BASE JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- BEGIN PLUGINS JS -->

    @yield('scripts')

    <!-- Scripts -->
    <script src="{{ mix('js/theme.min.js') }}"></script>
    
    @auth
    @include('layouts.includs.scriptsthemas')
    @endauth
    
    <!-- END BASE JS -->
</body>
</html>
