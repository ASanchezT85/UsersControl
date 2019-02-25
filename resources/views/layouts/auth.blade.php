<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End Required meta tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- End CSRF Token -->

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Begin SEO tag - Favicons -->
    @include('layouts.includs.seo')
    @include('layouts.includs.favicon')
    <!-- End SEO tag - Favicons-->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->

    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- END PLUGINS STYLES -->

    <!-- BEGIN THEME STYLES -->
    @include('layouts.includs.styles')
    <!-- END BEGIN THEME STYLES -->
</head>
<body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth">
        

        @yield('content')
        
        <!-- copyright -->
        <footer class="auth-footer text-center"> © 2018 {{ __('All Rights Reserved.') }}
            <br>
            <a href="#">{{ __('Terms') }}</a> {{ __('and') }} <a href="#">{{ __('Conditions') }}</a>
        </footer>

    </main>
    <!-- /.auth -->

    <!-- BEGIN BASE JS -->
    @include('layouts.includs.scripts')
    <!-- END BASE JS -->
    
</body>
</html>