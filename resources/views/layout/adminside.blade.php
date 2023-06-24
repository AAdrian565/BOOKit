@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="sidenav">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </div>
        </div>
        <div class="col-9">
            @yield('admincontent')
        </div>
    </div>
</div>


@endsection
