<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Register') }} | {{ env('APP_NAME') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/admin/assets/css/all.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend/admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/admin/assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
              <div class="card card-primary">
                <div class="card-header"><h4>{{ __('Register') }}</h4></div>
                <div class="card-body">
                  @if (Session::has('message'))
                  <div class="alert alert-danger">
                     {{ Session::get('message') }}
                  </div>
                  @endif
                  <form method="POST" action="{{ route('register') }}" class="needs-validation" id="register" novalidate="">
                    @csrf
                    <div class="form-group">
                      <label for="name">{{ __('Name') }}</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" tabindex="1" required autofocus value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">{{ __('Email') }}</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" required autofocus value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">{{ __('Password') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required autocomplete="current-password">
                      <div class="invalid-feedback">
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cpassword">{{ __('Confirm password') }}</label>
                      <input id="cpassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" tabindex="2" required autocomplete="confirm-password">
                      <div class="invalid-feedback">
                        @error('password_confirmation')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        {{ __('Register') }}
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
</div>

  <!-- General JS Scripts -->
  <script src="{{ asset('backend/admin/assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('backend/admin/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('backend/admin/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/admin/assets/js/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('backend/admin/assets/js/moment.min.js') }}"></script>
  <script src="{{ asset('backend/admin/assets/js/stisla.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('backend/admin/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('backend/admin/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('backend/admin/assets/js/page/index-0.js') }}"></script>

</body>
</html>
