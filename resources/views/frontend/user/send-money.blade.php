@extends('frontend.layouts.base')

@section('content')
    <div class="bg-primary">
        <div class="container d-flex justify-content-center">
            <ul class="nav secondary-nav">
                <li class="nav-item"> <a class="nav-link active" href="#amount">1. Amount</a></li>
                <li class="nav-item"> <a class="nav-link" href="#recipient">2. Recipient</a></li>
                <li class="nav-item"> <a class="nav-link" href="#review_pay">3. Review & Pay</a></li>
            </ul>
        </div>
    </div>
    <!-- Content
  ============================================= -->
    <div id="content" class="py-4">
        <div class="container">
          <form id="form-send-money" method="post">
           <div class="step-container">
               <div id="amount" class="step animate__animated">
                   <h2 class="font-weight-400 text-center my-3">How much would you like to Send?</h2>
                   <div class="row">
                       <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                           <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
                               <h3 class="text-5 font-weight-400 mb-3">Amount Detail</h3>
                               @include('frontend.common.exchange-block')
                               <p class="text-muted text-center">The current exchange rate is <span class="font-weight-500">1 <span class="sendCurr"></span> = <span id="receiveRate"></span> <span id="receiveCurr"></span></span></p>
                               {{--                            <div class="alert alert-warning">Due to the Covid-19 lockdown in Nepal, transfers sent to recipients in Nepal SBI Bank Limited and Standard Chartered Bank Limited will be processed only starting from 2nd of June, 2020 or later, in case the lockdown will be prolonged.</div>--}}
                               <button type="button" class="btn btn-primary btn-block btn-continue">Continue</button>
                           </div>
                       </div>
                   </div>
               </div>
               <div id="recipient" class="step animate__animated" style="display: none;">
                   <h2 class="font-weight-400 text-center my-3">Who are you sending money to?</h2>
                   <div class="row">
                       <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                           <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
                               <h3 class="text-5 font-weight-400 mb-3">Recipient Detail</h3>
                               <div class="form-group">
                                   <label for="emailID">Recipient</label>
                                   <input type="text" value="" class="form-control" data-bv-field="emailid" id="emailID" required placeholder="Enter Email Address">
                               </div>
                               <div class="row">
                                   <div class="col-sm-5">
                                       <button type="button" class="btn btn-outline-primary btn-block btn-back">Back</button>
                                   </div>
                                   <div class="col-sm-7">
                                       <button type="button" class="btn btn-primary btn-block btn-continue">Continue</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div id="review_pay" class="step animate__animated" style="display: none;">
                   <h2 class="font-weight-400 text-center my-3">Review & Pay</h2>
                   <div class="row">
                       <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                           <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
                               <h3 class="text-5 font-weight-400 mb-3">Amount Detail</h3>
                                   <div class="form-group">
                                       <label for="description">Description</label>
                                       <textarea class="form-control" rows="4" id="description" required placeholder="Payment Description"></textarea>
                                   </div>
                                   <h3 class="text-5 font-weight-400 mb-3">Details</h3>
                                   <p class="mb-1">Send Amount <span class="text-3 float-right">1,000.00 USD</span></p>
                                   <p class="mb-1">Total fees <span class="text-3 float-right">7.21 USD</span></p>
                                   <hr>
                                   <p class="font-weight-500">Total<span class="text-3 float-right">1,007.21 USD</span></p>
                               <div class="row">
                                   <div class="col-sm-5">
                                       <button type="button" class="btn btn-outline-primary btn-block btn-back">Back</button>
                                   </div>
                                   <div class="col-sm-7">
                                       <button type="submit" class="btn btn-primary btn-block">Send Money</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
          </form>
        </div>
    </div>
    <!-- Content end -->
@endsection

@section('scripts')
    <script src="{{asset('js/exchange-block.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script>
        const exchangeRoute = '{{route('getExchangeResult')}}';
        const csrf_token = "{{csrf_token()}}";

        const curr1 = "{{$_GET['curr1']}}";
        const curr2 = "{{$_GET['curr2']}}";
        const initSendVal = '{{$_GET['amount']}}' || 1000;

        $("#youSendCurrency").val(curr1);
        $("#recipientCurrency").val(curr2);

        $(function(){
            $("#youSend").val(initSendVal).trigger("keyup");
            $("#form-send-money").validate({
                ignore: ':hidden'
            });
        });

        //go prev
        $("#form-send-money .btn-back").click(function () {
            let target = $(this).closest(".step").hide().prev(".step");
            target.show().addClass("animate__fadeIn");
            setStepMenuActive(target);
        });

        //validate and go next
        $("#form-send-money .btn-continue").click(function () {
            if($(this).closest("form").valid() && !$("#youSend").hasClass("err")){
                let target = $(this).closest(".step").hide().next(".step")
                target.show().addClass("animate__fadeIn");
                setStepMenuActive(target);
            }
        });

        function setStepMenuActive(target){
            let id = target.attr("id");
            $(".secondary-nav a").removeClass("active");
            $(".secondary-nav a[href='#"+id+"']").addClass("active");
            $(window).scrollTop(0);
        }
    </script>
@endsection