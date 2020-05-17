@extends('frontend.layouts.auth-base')

@section('content')
    <div id="main-wrapper" class="h-100">
        <div class="container-fluid px-0 h-100">
            <div class="row no-gutters h-100">
                <div class="col-md-6">
                    <!-- Get Verified! Text
                    ============================================= -->
                    <div class="hero-wrap d-flex align-items-center h-100">
                        <div class="hero-mask opacity-8 bg-primary"></div>
                        <div class="hero-bg hero-bg-scroll" style="background-image:url({{asset('images/bg/image-3.jpg')}});"></div>
                        <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
                            <div class="row  no-gutters">
                                <div class="col-10 col-lg-9 mx-auto">
                                    <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="{{route('home')}}" title="Siya Money Transfer"><img src="{{asset('images/logo-light.png')}}" alt="Siya Money Transfer"></a> </div>
                                </div>
                            </div>
                            <div class="row my-auto">
                                <div class="col-10 col-lg-9 mx-auto">
                                    <h1 class="text-11 text-white mb-4">Get Verified!</h1>
                                    <p class="text-4 text-white line-height-4 mb-5">Every day, Siya Money Transfer makes thousands of customers happy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Get Verified! Text End -->
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <!-- SignUp Form
                    ============================================= -->
                    <div class="container my-4">
                        <div class="row">
                            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
                                <h3 class="font-weight-400 mb-4">Sign Up</h3>
                                <form id="loginForm" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="fullName">First Name</label>
                                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="Enter Your First Name" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                     <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Enter Your Last Name" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                     <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter Your Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="emailAddress">Email Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="emailAddress" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="loginPassword">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="loginPassword" placeholder="Enter Password" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="loginPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="loginPasswordConfirm" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <button class="btn btn-primary btn-block my-4" type="submit">Sign Up</button>
                                </form>
                                <p class="text-3 text-center text-muted">Already have an account? <a class="btn-link" href="{{route('login')}}">Log In</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- SignUp Form End -->
                </div>
            </div>
        </div>
    </div>
@endsection
