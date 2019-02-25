@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="app-footer">
    <ul class="list-inline">
        <li class="list-inline-item">
            <a class="text-muted" href="#">Support</a>
        </li>
        <li class="list-inline-item">
            <a class="text-muted" href="#">Help Center</a>
        </li>
        <li class="list-inline-item">
            <a class="text-muted" href="#">Privacy</a>
        </li>
        <li class="list-inline-item">
            <a class="text-muted" href="#">Terms of Service</a>
        </li>
    </ul>
    <div class="copyright"> Copyright © 2018. All right reserved. </div>
</footer><!-- /.app-footer -->
@endsection
