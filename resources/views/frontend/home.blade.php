@extends('frontend.layouts.base')

@section('content')
    <div id="content">

        <!-- Send Money
        ============================================= -->
        <section class="hero-wrap section shadow-md py-4">
            <div class="hero-mask opacity-7 bg-theme"></div>
            <div class="hero-bg" style="background-image:url({{asset('images/bg/image-6.jpg')}});"></div>
            <div class="hero-content py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-7 my-auto text-center text-lg-left pb-4 pb-lg-0">
                            <h2 class="text-17 text-white"><span class="font-weight-400 text-15">A better way to</span> <br>
                                Send Money</h2>
                            <p class="text-4 text-white mb-4"> Send money with a better exchange rate and avoid excessive bank fees.</p>
                            <a class="btn btn-outline-light video-btn" href="#" data-src="https://www.youtube.com/embed/OCHG1MmpxbE" data-toggle="modal" data-target="#videoModal"><span class="text-2 mr-3"><i class="fas fa-play"></i></span>See How it Works</a> </div>
                        <div class="col-lg-6 col-xl-5 my-auto">
                            <div class="bg-white rounded shadow-md p-4">
                                <h3 class="text-5 text-center">Send Money</h3>
                                <hr class="mb-4">
                                <form id="form-send-money" method="post">
                                    <div class="form-group from">
                                        <label for="youSend">You Send</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                                            <input type="number" class="form-control" data-bv-field="youSend" id="youSend" step="0.001">
                                            <div class="input-group-append"> <span class="input-group-text p-0">
                        <select id="youSendCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                          <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected">USD</option>
                          <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar">AUD</option>
                          <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee">INR</option>
                          </optgroup>
                          <option data-divider="true"></option>
                          <optgroup label="Other Currency">
                          <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham">AED</option>
                          <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso">ARS</option>
                          <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar">AUD</option>
                          <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka">BDT</option>
                          <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev">BGN</option>
                          <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real">BRL</option>
                          <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar">CAD</option>
                          <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc">CHF</option>
                          <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso">CLP</option>
                          <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan">CNY</option>
                          <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna">CZK</option>
                          <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone">DKK</option>
                          <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound">EGP</option>
                          <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro">EUR</option>
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound">GBP</option>
                          <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari">GEL</option>
                          <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi">GHS</option>
                          <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar">HKD</option>
                          <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna">HRK</option>
                          <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint">HUF</option>
                          <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah">IDR</option>
                          <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel">ILS</option>
                          <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee">INR</option>
                          <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen">JPY</option>
                          <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling">KES</option>
                          <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won">KRW</option>
                          <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee">LKR</option>
                          <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham">MAD</option>
                          <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso">MXN</option>
                          <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit">MYR</option>
                          <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira">NGN</option>
                          <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone">NOK</option>
                          <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee">NPR</option>
                          <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar">NZD</option>
                          <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol">PEN</option>
                          <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso">PHP</option>
                          <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee">PKR</option>
                          <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty">PLN</option>
                          <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu">RON</option>
                          <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble">RUB</option>
                          <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona">SEK</option>
                          <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar">SGD</option>
                          <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht">THB</option>
                          <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira">TRY</option>
                          <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia">UAH</option>
                          <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling">UGX</option>
                          <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong">VND</option>
                          <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand">ZAR</option>
                          </optgroup>
                        </select>
                        </span> </div>
                                        </div>
                                    </div>
                                    <div class="form-group to">
                                        <label for="recipientGets">Recipient Gets</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                                            <input type="number" class="form-control" data-bv-field="recipientGets" id="recipientGets" step="0.001">
                                            <div class="input-group-append"> <span class="input-group-text p-0">
                        <select id="recipientCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                          <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar">USD</option>
                          <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" selected="selected" >AUD</option>
                          <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee">INR</option>
                          </optgroup>
                          <option data-divider="true"></option>
                          <optgroup label="Other Currency">
                          <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham">AED</option>
                          <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso">ARS</option>
                          <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar">AUD</option>
                          <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka">BDT</option>
                          <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev">BGN</option>
                          <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real">BRL</option>
                          <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar">CAD</option>
                          <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc">CHF</option>
                          <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso">CLP</option>
                          <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan">CNY</option>
                          <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna">CZK</option>
                          <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone">DKK</option>
                          <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound">EGP</option>
                          <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro">EUR</option>
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound">GBP</option>
                          <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari">GEL</option>
                          <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi">GHS</option>
                          <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar">HKD</option>
                          <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna">HRK</option>
                          <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint">HUF</option>
                          <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah">IDR</option>
                          <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel">ILS</option>
                          <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee">INR</option>
                          <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen">JPY</option>
                          <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling">KES</option>
                          <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won">KRW</option>
                          <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee">LKR</option>
                          <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham">MAD</option>
                          <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso">MXN</option>
                          <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit">MYR</option>
                          <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira">NGN</option>
                          <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone">NOK</option>
                          <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee">NPR</option>
                          <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar">NZD</option>
                          <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol">PEN</option>
                          <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso">PHP</option>
                          <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee">PKR</option>
                          <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty">PLN</option>
                          <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu">RON</option>
                          <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble">RUB</option>
                          <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona">SEK</option>
                          <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar">SGD</option>
                          <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht">THB</option>
                          <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira">TRY</option>
                          <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia">UAH</option>
                          <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling">UGX</option>
                          <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong">VND</option>
                          <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand">ZAR</option>
                          </optgroup>
                        </select>
                        </span> </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-1">Total fees  - <span class="font-weight-500">7.21 USD</span></p>
                                    <p class="text-muted">The current exchange rate is <span class="font-weight-500">1 <span id="sendCurr"></span> = <span id="receiveRate"></span> <span id="receiveCurr"></span></span></p>
                                    <button class="btn btn-primary btn-block">Continue</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Send Money End -->

        <!-- How it works
        ============================================= -->
        <section class="section bg-white">
            <div class="container">
                <h2 class="text-9 text-center"> The simple way to send money</h2>
                <p class="text-4 text-center mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="featured-box style-3">
                            <div class="featured-box-icon text-light"><span class="w-100 text-20 font-weight-500">1</span></div>
                            <h3>Sign Up Your Account</h3>
                            <p class="text-3">Become a register user first, then log in to your account and enter your card or bank details that is required for you.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="featured-box style-3">
                            <div class="featured-box-icon text-light"><span class="w-100 text-20 font-weight-500">2</span></div>
                            <h3>Select Your Recipient</h3>
                            <p class="text-3">Enter your recipient's email address then add an amount with currency to send securely.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-sm-0">
                        <div class="featured-box style-3">
                            <div class="featured-box-icon text-light"><span class="w-100 text-20 font-weight-500">3</span></div>
                            <h3>Send Money</h3>
                            <p class="text-3">After sending money, the recipient will be notified via an email when money has been transferred to their account.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2"><a href="{{route('register')}}" class="btn btn-outline-primary shadow-none text-uppercase">Sign up Now</a></div>
            </div>
        </section>
        <!-- How it works End -->

        <!-- Why choose us
        ============================================= -->
        <section class="section">
            <div class="container">
                <h2 class="text-9 text-center">Why choose Siya Money Transfer?</h2>
                <p class="text-4 text-center mb-5">Here’s Top 4 reasons why using a Siya Money Transfer account for manage your money.</p>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="hero-wrap section h-100 p-5 rounded">
                            <div class="hero-mask rounded opacity-6 bg-theme"></div>
                            <div class="hero-bg rounded" style="background-image:url({{asset('images/bg/image-6.jpg')}});"></div>
                            <div class="hero-content">
                                <h2 class="text-6 text-white mb-3">Why Siya Money Transfer?</h2>
                                <p class="text-light mb-5">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                                <h2 class="text-6 text-white mb-3">Send Money with Siya Money Transfer</h2>
                                <p class="text-light">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                                <p class="text-light mb-0">Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>Over 180 countries</h3>
                            <p>Essent lisque persius interesset his et, in quot quidam.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>Lower Fees</h3>
                            <p>Lisque persius interesset his et, in quot quidam persequeris.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>Easy to Use</h3>
                            <p>Essent lisque persius interesset his et, in quot quidam.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>Faster Payments</h3>
                            <p>Quidam lisque persius interesset his et, in quot quidam.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>100% secure</h3>
                            <p>Essent lisque persius interesset his et, in quot quidam.</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                            <h3>24/7 customer service</h3>
                            <p>Quidam lisque persius interesset his et, in quot quidam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why choose us End -->

        <!-- How work
        ============================================= -->
        <section class="hero-wrap section shadow-md">
            <div class="hero-mask opacity-9 bg-primary"></div>
            <div class="hero-bg" style="background-image:url({{asset('images/bg/image-1.jpg')}});"></div>
            <div class="hero-content py-3 py-lg-4 my-3 my-lg-4">
                <div class="container text-center">
                    <h2 class="text-9 text-white mb-4 mb-lg-5">How does send money work?</h2>
                    <a class="video-btn d-inline-flex" href="#" data-src="https://www.youtube.com/embed/OCHG1MmpxbE" data-toggle="modal" data-target="#videoModal"> <span class="btn-video-play bg-white shadow-md rounded-circle m-auto"><i class="fas fa-play"></i></span> </a> </div>
            </div>
        </section>
        <!-- How work End -->

        <!-- Testimonial
        ============================================= -->
        <section class="section">
            <div class="container">
                <h2 class="text-9 text-center">What people say about Siya Money Transfer</h2>
                <p class="text-4 text-center mb-4">A payments experience people love to talk about</p>
                <div class="row">
                    <div class="col-lg-10 col-xl-8 mx-auto">
                        <div class="owl-carousel owl-theme" data-autoplay="true" data-nav="true" data-loop="true" data-margin="30" data-stagepadding="5" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="1">
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
                            <div class="item">
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
                                    <p class="text-4">“It's a real good idea to manage your money by Siya Money Transfer. The rates are fair and you can carry out the transactions without worrying!”</p>
                                    <strong class="d-block font-weight-500">Mauri Lindberg</strong> <span class="text-muted">Freelancer from Australia</span> </div>
                            </div>
                            <div class="item">
                                <div class="testimonial rounded text-center p-4">
                                    <p class="text-4">“Only trying it out since a few days. But up to now excellent. Seems to work flawlessly. I'm only using it for sending money to friends at the moment.”</p>
                                    <strong class="d-block font-weight-500">Dennis Jacques</strong> <span class="text-muted">User from USA</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!-- Frequently asked questions
        ============================================= -->
        <section class="section bg-white">
            <div class="container">
                <h2 class="text-9 text-center">Frequently Asked Questions</h2>
                <p class="text-4 text-center mb-4 mb-sm-5">Can't find it here? Check out our <a href="{{route('help')}}">Help center</a></p>
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <hr class="mb-0">
                        <div class="accordion accordion-alternate arrow-right" id="popularTopics">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">What is Siya Money Transfer?</a> </h5>
                                </div>
                                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#popularTopics">
                                    <div class="card-body"> Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">How to send money online?</a> </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#popularTopics">
                                    <div class="card-body"> Iisque Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Is my money safe with Siya Money Transfer?</a> </h5>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#popularTopics">
                                    <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">How much fees does Siya Money Transfer charge?</a> </h5>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#popularTopics">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">What is the fastest way to send money abroad?</a> </h5>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#popularTopics">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading6">
                                    <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Can I open an Siya Money Transfer account for business?</a> </h5>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#popularTopics">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0">
                    </div>
                </div>
            </div>
        </section>
        <!-- Frequently asked questions end -->

        <!-- Mobile App
        ============================================= -->
        <section class="section pt-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9 col-xl-8 mx-auto">
                        <div class="row">
                            <div class="col-sm-5 col-md-5 text-center align-bottom order-1 order-sm-0"> <img class="img-fluid" alt="" src="{{asset('images/app-mobile.png')}}"> </div>
                            <div class="col-sm-7 col-md-7 my-auto order-0 order-sm-1 text-center text-sm-left">
                                <h2 class="text-8 font-weight-400 text-uppercase mb-3">Get the app</h2>
                                <p class="text-4">Download our app for the fastest, most convenient way to send & get Payment.</p>
                                <div class="pt-2 mb-4 mb-sm-0"> <a class="mr-3" href="#"><img class="img-fluid" alt="" src="{{asset('images/app-store.png')}}"></a><a href="#"><img class="img-fluid" alt="" src="{{asset('images/google-play-store.png')}}"></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mobile App end -->
    </div>
@endsection

@section('scripts')
    <script>
        let exchangeRatesUrl = "https://api.exchangeratesapi.io/latest";
        const precisionLimit = 3;
        const currency3 = "USD";
        const fee = 7.21;

        $(function(){
            $("#youSend").val(1000).trigger("keyup");
        });

        $(document).on("change","#youSendCurrency, #recipientCurrency",function(){
            convertCurrency(this);
        });

        $(document).on("keyup","#youSend, #recipientGets",function(){
            convertCurrency(this);
        });

        function convertCurrency(instance){
            let currency1 = $("#youSendCurrency").val();
            let currency2 = $("#recipientCurrency").val();
            let youSendInstance = $("#youSend");
            let recipientGetsInstance = $("#recipientGets");

            getExchangeRate(currency1, currency2, currency3).then(function(rateObj){
                const rate = rateObj.rate1;
                const totalFee = rateObj.rate2*fee;

                $("#sendCurr").text(currency1);
                $("#receiveCurr").text(currency2);
                $("#receiveRate").text(rate.toFixed(precisionLimit));

                // console.log(currency1,currency2,rate);
                if($(instance).attr("id") !== "recipientGets"){
                    let youSend = parseFloat(youSendInstance.val());
                    recipientGetsInstance.val((youSend*rate - totalFee).toFixed(precisionLimit));
                }else{
                    let recipientGets = parseFloat(recipientGetsInstance.val());
                    youSendInstance.val((recipientGets*(1/rate) - totalFee).toFixed(precisionLimit));
                }
            }).catch(err=>{
                alert(err);
            });
        }

        function getExchangeRate(currency1, currency2, currency3){
            return new Promise((resolve,reject) => {
                $.get(exchangeRatesUrl, function(response){
                    if(response){
                        let r1 = response.rates[currency1];
                        let r2 = response.rates[currency2];
                        let r3 = response.rates[currency3];
                        resolve({"rate1":r2/r1, "rate2": r2/r3});
                    }else{
                        reject("Something went wrong!");
                    }
                });
            });
        }
    </script>
@endsection