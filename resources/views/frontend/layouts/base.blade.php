<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{asset('images/favicon.png')}}" rel="icon" />
    <title>Siya Money Transfer - Easiest and Fastest way to transfer Money</title>
    <meta name="description" content="Money transfer is now easy and fast with very low fee. Transfer money easily almost anywhere in the world.">

    <!-- Web Fonts
    ============================================= -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap-select/css/bootstrap-select.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/currency-flags/css/currency-flags.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    @yield('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}" />
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
============================================= -->
<div id="main-wrapper">

    <!-- Header
    ============================================= -->
    <header id="header">
        <div class="container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <!-- Logo
                    ============================= -->
                    <div class="logo"> <a class="d-flex" href="{{route('home')}}" title="Siya Money Transfer"><img src="{{asset('images/logo.png')}}" alt="Siya Money Transfer" /></a> </div>
                    <!-- Logo end -->
                    <!-- Collapse Button
                    ============================== -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
                    <!-- Collapse Button end -->

                    <!-- Primary Navigation
                    ============================== -->
                    @include('frontend.layouts.includes.navigation')
                    <!-- Primary Navigation end -->
                </div>
                <div class="header-column justify-content-end login-buttons-right">
                    @guest
                    <!-- Login & Signup Link
                    ============================== -->
                    <nav class="login-signup navbar navbar-expand">
                        <ul class="navbar-nav">
                            <li><a href="{{route('login')}}">Login</a> </li>
                            <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary d-none d-sm-block" href="{{route('register')}}">Sign Up</a></li>
                        </ul>
                    </nav>
                    <!-- Login & Signup Link end -->
                    @else
                    <nav class="login-signup navbar navbar-expand">
                        <ul class="navbar-nav">
                            <li><a href="{{route('dashboard')}}">My Account</a></li>
                            <li class="align-items-center h-auto ml-sm-3">
                                <a class="btn btn-outline-primary shadow-none d-none d-sm-block" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign out</a>
                                <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none">@csrf</form>
                            </li>
                        </ul>
                    </nav>
                    @endguest
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Content
    ============================================= -->
    @yield('content')
    <!-- Content end -->

    <!-- Footer
    ============================================= -->
    @include('frontend.layouts.includes.footer')
    <!-- Footer end -->

</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Video Modal
============================================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal end -->

<!-- Script -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
@yield('scripts')
</body>

</html>