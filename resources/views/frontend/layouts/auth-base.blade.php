<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
      <meta name="csrf_token" content="{{csrf_token()}}">

    <link href="{{asset('images/favicon.png')}}" rel="icon" />
    <title>{{@$title ? $title.' - Siya Money Transfer' : 'Siya Money Transfer - Easiest and Fastest way to transfer Money'}}</title>
    <meta name="description" content="Money transfer is now easy and fast with very low fee. Transfer money easily almost anywhere in the world.">

    <!-- Web Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/font-awesome/css/all.min.css')}}" />
    @yield('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}" />
    <style>
        body, #main-wrapper{
            background-color: #fff;
        }

        @media(min-width:992px){
            .hero-wrap {
                position: fixed;
                top: 0;
                left: 0;
                width: 50%;
            }
        }
    </style>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
============================================= -->

<div id="main-wrapper" class="h-100">
    <div class="container-fluid px-0 h-100">
        <div class="row no-gutters h-100">
            <!-- Welcome Text
            ============================================= -->
            <div class="col-md-6">
                <div class="hero-wrap d-flex align-items-center h-100">
                    <div class="hero-mask opacity-8 bg-primary"></div>
                    <div class="hero-bg hero-bg-scroll" style="background-image:url({{asset('images/bg/image-3.jpg')}});"></div>
                    <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
                        <div class="row no-gutters">
                            <div class="col-10 col-lg-9 mx-auto">
                                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="{{route('home')}}" title="Siya Money Transfer"><img src="{{asset('images/logo-light.png')}}" alt="{{config('app.name')}}"></a> </div>
                            </div>
                        </div>
                        <div class="row no-gutters my-auto">
                            <div class="col-10 col-lg-9 mx-auto">
                                <h1 class="text-11 text-white mb-4">Welcome!</h1>
                                <p class="text-4 text-white line-height-4 mb-5">We are glad to see you! Instant deposits, withdrawals & payouts trusted by millions worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Welcome Text End -->

            <!-- Login Form
            ============================================= -->
            <div class="col-md-6 d-flex align-items-center">
                <div class="container my-4">
                    <div class="row">
                        <div class="col-11 col-lg-9 col-xl-8 mx-auto">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Form End -->
        </div>
    </div>
</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Script -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
<script>
    $(".validate").validate();
</script>
@yield('scripts')
</body>

</html>