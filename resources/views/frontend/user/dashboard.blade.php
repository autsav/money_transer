@extends('frontend.layouts.base')

@section('content')
    <!-- Content
  ============================================= -->
    <div id="content" class="py-4">
        <div class="container">
            <div class="row">
                @include("frontend.user.common.aside")

                <!-- Middle Panel
                ============================================= -->
                <div class="col-lg-9">

                    <!-- Profile Completeness
                    =============================== -->
                    <div class="bg-light shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 font-weight-400 d-flex align-items-center mb-3">Profile Completeness <span class="bg-light-4 text-success rounded px-2 py-1 font-weight-400 text-2 ml-2">50%</span></h3>
                        <div class="row profile-completeness">
                            <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                                <div class="border rounded p-3 text-center"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-mobile-alt"></i></span> <span class="text-5 d-block text-success mt-4 mb-3"><i class="fas fa-check-circle"></i></span>
                                    <p class="mb-0">Mobile Added</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                                <div class="border rounded p-3 text-center"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-envelope"></i></span> <span class="text-5 d-block text-success mt-4 mb-3"><i class="fas fa-check-circle"></i></span>
                                    <p class="mb-0">Email Added</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="border rounded p-3 text-center"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-credit-card"></i></span> <span class="text-5 d-block text-light mt-4 mb-3"><i class="far fa-circle "></i></span>
                                    <p class="mb-0"><a class="btn-link stretched-link" href="#">Add Card</a></p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="border rounded p-3 text-center"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-university"></i></span> <span class="text-5 d-block text-light mt-4 mb-3"><i class="far fa-circle "></i></span>
                                    <p class="mb-0"><a class="btn-link stretched-link" href="#">Add Bank Account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Completeness End -->

                    <!-- Recent Activity
                    =============================== -->
                    <div class="bg-light shadow-sm rounded py-4 mb-4">
                        <h3 class="text-5 font-weight-400 d-flex align-items-center px-4 mb-3">Recent Transactions</h3>

                        @include("frontend.user.common.transaction-list")

                        <!-- View all Link
                        =============================== -->
                        <div class="text-center mt-4"><a href="{{route('transactions')}}" class="btn-link text-3">View all<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
                        <!-- View all Link End -->

                    </div>
                    <!-- Recent Activity End -->
                </div>
                <!-- Middle Panel End -->
            </div>
        </div>
    </div>
    <!-- Content end -->
@endsection