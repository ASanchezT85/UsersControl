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
    @include('layouts.includs.favicon')
    <!-- End SEO tag - Favicons-->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->


    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ asset('vendor/open-iconic/font/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/flatpickr/flatpickr.min.css') }}">
    <!-- END PLUGINS STYLES -->

    <!-- BEGIN THEME STYLES -->
    @include('layouts.includs.styles')
    <!-- END BEGIN THEME STYLES -->

</head>
<body>
    <div class="app">
        <!--[if lt IE 10]>
        <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
        <![endif]-->
        @include('layouts.includs.header')
    </div>

    <!-- BEGIN BASE JS -->
    @include('layouts.includs.scripts')
    @include('layouts.includs.scriptsthemas')
    <!-- END BASE JS -->
</body>
</html>
