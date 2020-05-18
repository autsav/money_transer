@extends('frontend.layouts.auth-base')

@section('content')
    <h3 class="font-weight-400 mb-4">Sign Up</h3>
    <form class="validate" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="fullName">First Name</label>
            <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                   name="firstname" placeholder="Enter Your First Name" name="firstname" value="{{ old('firstname') }}"
                   required autocomplete="firstname" autofocus>
            @error('firstname')
            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                   name="lastname" placeholder="Enter Your Last Name" name="lastname" value="{{ old('lastname') }}"
                   required autocomplete="lastname" autofocus>
            @error('lastname')
            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                   name="username" placeholder="Enter Your Username" name="username" value="{{ old('username') }}"
                   required autocomplete="username" autofocus>
            @error('username')
            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="emailAddress">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="emailAddress"
                   placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="loginPassword"
                   placeholder="Enter Password" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="loginPassword">Confirm Password</label>
            <input type="password" class="form-control" id="loginPasswordConfirm" placeholder="Confirm Password"
                   name="password_confirmation" required autocomplete="new-password">
        </div>
        <button class="btn btn-primary btn-block my-4" type="submit">Sign Up</button>
    </form>
    <p class="text-3 text-center text-muted">Already have an account? <a class="btn-link" href="{{route('login')}}">Log
            In</a></p>
@endsection
