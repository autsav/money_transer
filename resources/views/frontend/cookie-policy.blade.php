

@extends('frontend.layouts.base')

@section('content')
    <!-- Page Header
============================================= -->
    <section class="page-header page-header-text-light bg-dark-3 py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <ul class="breadcrumb mb-0">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Cookie Policy</li>
                    </ul>
                </div>
                <div class="col-12">
                    <h1>Cookie Policy</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Content
    ============================================= -->
    <div id="content">

        <section class="section bg-white">
            <div class="container">
                <p>Siya Exchange uses small files (known as cookies) to see how you use our site and products. We put them on your computer when you visit our site, and use them to recognise you and store information in between visits.</p>
                <p>With cookies we can give you a better browsing experience, improve the quality of our products, and keep our marketing costs down. They let us make it easier to log in, and they show us where you might be having trouble with our products. Without them, we’d have no way to remember anything about you, such as whether you’re logged in.</p>
            </div>
        </section>

    </div>
    <!-- Content end -->
@endsection