@extends('auth.layout')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url({{ url('/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
    <div class="auth-box row">
        <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{ url('/assets/images/bg-auth.jpg') }});">
        </div>
        <div class="col-lg-5 col-md-7 bg-white">
            <div class="p-3">
                <div class="text-center">
                    <img src="{{ url('/assets/images/big/icon.png') }}" alt="wrapkit">
                </div>
                <h2 class="mt-3 text-center">Sign In</h2>
                <p class="text-center">Enter your email address and password to access admin panel.</p>
                <form class="mt-4" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="email">Username</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            @if (Route::has('password.request'))
                                <a class="text-muted mb-1" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input type="hidden" name="remember" value="on">
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            Don't have an account? <a href="{{ url('/register') }}" class="text-danger">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
