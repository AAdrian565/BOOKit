@extends('layout.app')

@section('content')
<div class="container">
    <div class="card card-login">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form>
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-secondary btn-block me-2">register</button>
                    <button type="submit" class="btn btn-secondary btn-block">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
