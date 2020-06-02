@php($title = "Login")

@extends('frontend.layouts.auth-base')

@section('content')
    <h3 class="mb-4">Log In</h3>
    <form class="validate" action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="emailAddress">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="emailAddress"
                   required value="{{ old('email') }}" autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                   id="loginPassword" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-check custom-control custom-checkbox">
                    <input id="remember-me" name="remember" class="custom-control-input"
                           type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
            </div>
            @if (Route::has('password.request'))
                <div class="col-sm text-right"><a class="btn-link" href="{{ route('password.request') }}">Forgot
                        Password ?</a></div>
            @endif
        </div>
        <button class="btn btn-primary btn-block my-4" type="submit">Login</button>
    </form>
    <p class="text-3 text-center text-muted">Don't have an account? <a class="btn-link" href="{{route('register')}}">Sign
            Up</a></p>
@endsection
