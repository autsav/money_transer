@extends('frontend.layouts.base')

@section('content')
    <!-- Page Header
  ============================================= -->
    <section class="page-header page-header-text-light py-0 mb-0">
        <section class="hero-wrap section">
            <div class="hero-mask opacity-7 bg-dark"></div>
            <div class="hero-bg hero-bg-scroll" style="background-image:url({{asset('images/bg/image-2.jpg')}});"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="text-11 font-weight-500 text-white mb-4">About Siya Money Transfer</h1>
                            <p class="text-5 text-white line-height-4 mb-4">Our mission is to help you save on transfer fees and exchange rates!</p>
                            <a href="{{route('register')}}" class="btn btn-primary m-2">Open a Free Account</a> <a class="btn btn-outline-light video-btn m-2" href="#" data-src="https://www.youtube.com/embed/OCHG1MmpxbE" data-toggle="modal" data-target="#videoModal"><span class="mr-2"><i class="fas fa-play-circle"></i></span>See How it Works</a> </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Page Header end -->

    <!-- Content
    ============================================= -->
    <div id="content">

        <!-- Who we are
        ============================================= -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="my-auto px-0 px-lg-5 mx-2">
                            <h2 class="text-9">Who we are</h2>
                            <p class="text-4">Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam mea essent possim iriure.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 my-auto text-center"> <img class="img-fluid shadow-lg rounded-lg" src="{{asset('images/who-we-are.jpg')}}" alt=""> </div>
                </div>
            </div>
        </section>
        <!-- Who we are end -->

        <!-- Our Values
        ============================================= -->
        <section class="section bg-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="row">
                            <div class="col-6 col-lg-7 ml-auto mb-lg-n5"> <img class="img-fluid rounded-lg shadow-lg" src="{{asset('images/our-values-vision.jpg')}}" alt="banner"> </div>
                            <div class="col-6 col-lg-8 mt-lg-n5"> <img class="img-fluid rounded-lg shadow-lg" src="{{asset('images/our-values-mission.jpg')}}" alt="banner"> </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex order-1 order-lg-2">
                        <div class="my-auto px-0 px-lg-5">
                            <h2 class="text-9 mb-4">Our Values</h2>
                            <h4 class="text-4 font-weight-500">Our Mission</h4>
                            <p class="tex-3" >Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam mea essent possim iriure.</p>
                            <h4 class="text-4 font-weight-500 mb-2">Our Vision</h4>
                            <p class="tex-3" >Persequeris quidam lisque persius interesset his et, in quot quidam vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam.</p>
                            <h4 class="text-4 font-weight-500 mb-2">Our Goal</h4>
                            <p class="tex-3" >Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam mea essent possim iriure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Values end -->

        <!-- Team
        ============================================= -->
        <section class="section">
            <div class="container">
                <h2 class="text-9 text-center">Our Team</h2>
                <p class="text-4 text-center mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="row">
                    <div class="col-sm-6 col-md-3 text-center mb-4 mb-md-0">
                        <div class="team rounded d-inline-block"> <img class="img-fluid rounded" alt="" src="{{asset('images/team/leader.jpg')}}">
                            <h3>Neil Patel</h3>
                            <p class="text-muted">CEO &amp; Founder</p>
                            <ul class="social-icons social-icons-sm d-inline-flex">
                                <li class="social-icons-facebook"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-google"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center mb-4 mb-md-0">
                        <div class="team rounded d-inline-block"> <img class="img-fluid rounded" alt="" src="{{asset('images/team/leader-2.jpg')}}">
                            <h3>James Maxwell</h3>
                            <p class="text-muted">Co-Founder</p>
                            <ul class="social-icons social-icons-sm d-inline-flex">
                                <li class="social-icons-facebook"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-google"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center mb-4 mb-md-0">
                        <div class="team rounded d-inline-block"> <img class="img-fluid rounded" alt="" src="{{asset('images/team/leader-3.jpg')}}">
                            <h3>Ruby Clinton</h3>
                            <p class="text-muted">Chief Marketing Officer</p>
                            <ul class="social-icons social-icons-sm d-inline-flex">
                                <li class="social-icons-facebook"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-google"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center mb-4 mb-md-0">
                        <div class="team rounded d-inline-block"> <img class="img-fluid rounded" alt="" src="{{asset('images/team/leader-4.jpg')}}">
                            <h3>Miky Sheth</h3>
                            <p class="text-muted">General Manager</p>
                            <ul class="social-icons social-icons-sm d-inline-flex">
                                <li class="social-icons-facebook"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-google"><a data-toggle="tooltip" href="#" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team end -->

        <!-- Our Partners
        ============================================= -->
        <section class="section bg-white">
            <div class="container">
                <h2 class="text-9 text-center mb-5">Our Partners</h2>
                <div class="brands-grid separator-border">
                    <div class="row align-items-center">
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-4.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-5.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-4.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-5.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-4.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-5.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-4.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-5.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-4.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-5.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-4.png')}}" alt="Brands"></a></div>
                        <div class="col-6 col-sm-4 col-lg-2 text-center"><a href="#"><img class="img-fluid" src="{{asset('images/partner/partner-5.png')}}" alt="Brands"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Partners end -->

        <!-- Testimonial
        ============================================= -->
        <section class="section">
            <div class="container">
                <h2 class="text-9 text-center">What people are saying about Siya Money Transfer</h2>
                <p class="text-4 text-center mb-4">A payments experience people love to talk about</p>
                <div class="owl-carousel owl-theme" data-autoplay="true" data-nav="true" data-loop="true" data-margin="30" data-slideby="2" data-stagepadding="5" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="2">
                    <div class="item">
                        <div class="testimonial rounded text-center p-4">
                            <p class="text-4">“Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure.”</p>
                            <strong class="d-block font-weight-500">Jay Shah</strong> <span class="text-muted">Founder at Icomatic Pvt Ltd</span> </div>
                    </div>
                    <div class="item">
                        <div class="testimonial rounded text-center p-4">
                            <p class="text-4">“I am happy Working with printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure.”</p>
                            <strong class="d-block font-weight-500">Patrick Cary</strong> <span class="text-muted">Freelancer from USA</span> </div>
                    </div>
                    <div class="item mh-100">
                        <div class="testimonial rounded text-center p-4">
                            <p class="text-4">“Fast easy to use transfers to a different currency. Much better value that the banks.”</p>
                            <strong class="d-block font-weight-500">De Mortel</strong> <span class="text-muted">Online Retail</span> </div>
                    </div>
                    <div class="item">
                        <div class="testimonial rounded text-center p-4">
                            <p class="text-4">“I have used them twice now. Good rates, very efficient service and it denies high street banks an undeserved windfall. Excellent.”</p>
                            <strong class="d-block font-weight-500">Chris Tom</strong> <span class="text-muted">User from UK</span> </div>
                    </div>
                    <div class="item">
                        <div class="testimonial rounded text-center p-4">
                            <p class="text-4">“It's a real good idea to manage your money by payyed. The rates are fair and you can carry out the transactions without worrying!”</p>
                            <strong class="d-block font-weight-500">Mauri Lindberg</strong> <span class="text-muted">Freelancer from Australia</span> </div>
                    </div>
                    <div class="item">
                        <div class="testimonial rounded text-center p-4">
                            <p class="text-4">“Only trying it out since a few days. But up to now excellent. Seems to work flawlessly. I'm only using it for sending money to friends at the moment.”</p>
                            <strong class="d-block font-weight-500">Dennis Jacques</strong> <span class="text-muted">User from USA</span> </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!-- JOIN US
        ============================================= -->
        <section class="section bg-primary py-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-light mb-2"> <i class="fas fa-globe"></i> </div>
                            <h4 class="text-12 text-white mb-0">180+</h4>
                            <p class="text-4 text-white mb-0">Countries</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-light mb-2"> <i class="fas fa-dollar-sign"></i> </div>
                            <h4 class="text-12 text-white mb-0">120</h4>
                            <p class="text-4 text-white mb-0">Currencies</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mt-4 mt-md-0">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-light mb-2"> <i class="fas fa-users"></i> </div>
                            <h4 class="text-12 text-white mb-0">2.5M</h4>
                            <p class="text-4 text-white mb-0">Users</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mt-4 mt-md-0">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-light mb-2"> <i class="far fa-life-ring"></i> </div>
                            <h4 class="text-12 text-white mb-0">24X7</h4>
                            <p class="text-4 text-white mb-0">Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- JOIN US end -->

    </div>
    <!-- Content end -->
@endsection