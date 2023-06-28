@extends('layout.app')

@section('content')
<div class="container">
    <div class="card card-login">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form method="POST" action="{{ route('login') }}">
                <div class="form-group mb-3">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input type="text"  id="username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter username" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-secondary btn-block me-2">register</button>
                    <button type="submit" class="btn btn-secondary btn-block">Sign In</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
