@extends('auth.layout')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url({{ url('/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
    <div class="auth-box row text-center">
        <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{ url('/assets/images/bg-auth.jpg') }});">
        </div>
        <div class="col-lg-5 col-md-7 bg-white">
            <div class="p-3">
                <img src="{{ url('/assets/images/big/icon.png') }}" alt="wrapkit">
                <h2 class="mt-3 text-center">Sign Up for Free</h2>
                <form method="POST" action="{{ route('register') }}" class="mt-4">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-block btn-dark">Sign Up</button>
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            Already have an account? <a href="{{ url('/login') }}" class="text-danger">Sign In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
