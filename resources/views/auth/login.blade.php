@extends('layouts.auth')
@section('title', 'Login')
@section('content')

<body class="signwrapper">
  <div class="sign-overlay"></div>
  <div class="signpanel"></div>
  <div class="panel signin">
    <div class="panel-heading text-center">
      <img src="{{ asset('images/logo.png') }}" class="img-fluid paddingbottom10" width="200px">
    </div>
    <div class="panel-body">
      <form method="POST" action="{{ route('login') }}" id="loginForm">
        @csrf
        <div class="form-group mb10">
          <div class="input-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span> 
            @enderror
          </div>
        </div>
        <div class="form-group nomargin">
          <div class="input-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div>
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forgot">Forgot password?</a>
          @endif
        </div>
        <div class="form-group">
          <button class="btn btn-success btn-quirk btn-block" type=>{{ __('Login') }}</button>
        </div>
      </form>
      <hr class="invisible">
    </div>
  </div>
  <!-- panel -->
</body>

@endsection
