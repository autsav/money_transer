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
          <form id="form-send-money" method="post" action="{{route('store-transaction')}}">
            @csrf
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
                       <div class="col-md-15 col-lg-6 col-xl-5 mx-auto">
                           <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
                               <h3 class="text-5 font-weight-400 mb-3">Recipient Bank Detail</h3>
                              
                               <div class="form-group">
                                   <label for="recipient_bank_country">Country</label>
                                    <select id="Recipient_bank_country" name="Recipient_bank_country" class="form-control" placeholder="Select Country">
                                   @foreach ($countries as $country)
                                      <option>{{ $country->name }}</option>
                                      @endforeach
                                     </select>

                                  
                               </div>
                                <div class="form-group">
                                   <label for="bank">Bank</label>
                                   <select name="bank" id="bank" class="form-control" placeholder="Select Bank">
                                   @foreach ($banks as $bank)
                                      <option>{{ $bank->name }}</option>
                                      @endforeach
                                     </select>
                               </div>
                                <div class="form-group">
                                   <label for="branch_name">Branch Name</label>
                                   <input type="text" value="" class="form-control" data-bv-field="branch_name" name="branch_name" id="branch_name" required placeholder="Enter Branch Name">
                               </div>
                                <div class="form-group">
                                   <label for="account_number">Account Number</label>
                                   <input type="number" value="" class="form-control" data-bv-field="account_number" id="account_number" name="account_number" required placeholder="Enter Account Number">
                               </div>
                               <h3 class="text-5 font-weight-400 mb-3">Recipient Detail</h3>
                                <div class="form-group">
                                   <label for="first_name">First Name</label>
                                   <input type="text" value="" class="form-control" data-bv-field="first_name" id="first_name" name="first_name" required placeholder="Enter First Name">
                               </div>
                                <div class="form-group">
                                   <label for="middle_name">Middle Name</label>
                                   <input type="text" value="" class="form-control" data-bv-field="middle_name" id="middle_name" name="middle_name" required placeholder="Enter Middle Name">
                               </div>
                                <div class="form-group">
                                   <label for="last_name">Last Name</label>
                                   <input type="text" value="" class="form-control" data-bv-field="last_name" id="last_name" name="last_name" required placeholder="Enter Last Name">
                               </div>
                                <div class="form-group">
                                   <label for="address_line">Address Line 1</label>
                                   <input type="text" value="" class="form-control" data-bv-field="address_line" id="address_line" name="address_line" required placeholder="Enter Address Line">
                               </div>
                                <div class="form-group">
                                   <label for="cityOrTown">City/Town</label>
                                   <input type="text" value="" class="form-control" data-bv-field="cityOrTown" id="cityOrTown" name="cityOrTown" required placeholder="Enter City or Town">
                               </div>
                                <div class="form-group">
                                   <label for="recipient_country">Country</label>
                                    <select id="recipient_country" name="recipient_country" class="form-control" placeholder="Enter Recipient Country">
                                   @foreach ($countries as $country)
                                      <option>{{ $country->name }}</option>
                                      @endforeach
                                     </select>
                                  
                               </div>
                                <div class="form-group">
                                   <label for="mobile">Mobile Phone</label>
                                   <input type="number" value="" class="form-control" data-bv-field="mobile" id="mobile" name="mobile" required placeholder="Enter Mobile Number">
                               </div>
                                <div class="form-group">
                                   <label for="emailID">Email</label>
                                   <input type="email" value="" class="form-control" data-bv-field="emailid" id="emailID" name="emailID" required placeholder="Enter Email Address">
                               </div>
                                <div class="form-group">
                                   <label for="sending_reason">Sending Reason</label>
                                   <input type="text" value="" class="form-control" data-bv-field="sending_reason" id="sending_reason" name="sending_reason" required placeholder="Enter Sending Reason">
                               </div>
                               <div class="row">
                                   <div class="col-5">
                                       <button type="button" class="btn btn-outline-primary btn-block btn-back">Back</button>
                                   </div>
                                   <div class="col-7">
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
                                       <textarea class="form-control" rows="4" id="description" required placeholder="Payment Description" name="description"></textarea>
                                   </div>
                                   <h3 class="text-5 font-weight-400 mb-3">Details</h3>
                                   <p class="mb-1">Send Amount <span class="text-3 float-right">1,000.00 USD</span></p>
                                   <p class="mb-1">Total fees <span class="text-3 float-right">7.21 USD</span></p>
                                   <hr>
                                   <p class="font-weight-500">Total<span class="text-3 float-right">1,007.21 USD</span></p>
                               <div class="row">
                                   <div class="col-5">
                                       <button type="button" class="btn btn-outline-primary btn-block btn-back">Back</button>
                                   </div>
                                   <div class="col-7">
                                       <button type="submit" class="btn btn-primary btn-block">Send Money</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
              <div class="text-center">
                  <button class="btn btn-link p-0 btn-reset" type="button">Cancel</button>
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

        const curr1 = "{{@$_GET['curr1']}}" || 'USD';
        const curr2 = "{{@$_GET['curr2']}}" || 'AUD';
        const initSendVal = '{{@$_GET['amount']}}' || 1000;
    </script>

    <script src="{{asset('js/send-money.js')}}"></script>

    <script>
    $(function() {
        $('select[name=Recipient_bank_country]').change(function() {

            var url = '{{ url('Recipient_bank_country') }}' + $(this).val() + '/banks/';

            $.get(url, function(data) {
                var select = $('form select[name= bank]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });
    });
</script>
@endsection