<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Examples &rsaquo; Login &mdash; Stisla</title>

  <link rel="stylesheet" href="{{ ('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ ('assets/modules/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ ('assets/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">

  {{-- <link rel="stylesheet" href="{{ ('assets/css/demo.css') }}"> --}}
  <link rel="stylesheet" href="{{ ('assets/css/style.css') }}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              BOOKit Admin
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    {{-- <input type="text"  id="username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter username" required autocomplete="email" autofocus> --}}
                    <input type="text" id="username"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="1"required autocomplete="email" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- <div class="invalid-feedback">
                      Please fill in your email
                    </div> --}}
                  </div>

                  <div class="form-group">
                    <label for="password" class="d-block">{{ __('Password') }}
                      <div class="float-right">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                      </div>
                    </label>
                    {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password"> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- <div class="invalid-feedback">
                      please fill in your password
                    </div> --}}
                  </div>

                  {{-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> --}}

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="{{ route('register') }}">Create One</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; BOOKit 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <script src="{{ ('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ ('assets/modules/popper.js') }}"></script>
    <script src="{{ ('assets/modules/tooltip.js') }}"></script>
    <script src="{{ ('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ ('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ ('assets/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ ('assets/js/sa-functions.js') }}"></script>

    <script src="{{ ('assets/modules/chart.min.js') }}"></script>
    <script src="{{ ('assets/modules/summernote/summernote-lite.js') }}"></script>
  
    <script src="{{ ('assets/js/scripts.js') }}"></script>
    <script src="{{ ('assets/js/custom.js') }}"></script>
    {{-- <script src="{{ ('assets/js/demo.js') }}"></script> --}}
</body>
</html>