<?php

namespace App\Http\Controllers;

use App\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Transaction;

class UserController extends BaseController
{
     public function index(){
        return view('frontend.user.dashboard');
    }

    public function send_money(){
        $currencies = ExchangeRate::pluck("currency_code");
        return view('frontend.user.send-money')->with([
                "currencies" => $currencies,
                "currencySubText" => $this->currencySubText,
                "popularCurrency" => $this->popularCurrency,
                "defaultFromCurrency" => $this->defaultFromCurrency,
                "defaultToCurrency" => $this->defaultToCurrency
            ]
        );
    }
     public function store(Request $request)
    {   dd($request);
        $user = new Transaction();
        $data = $this->validate($request, [
            'sender_id' => 'required',
            'receiver_id' => 'required',
            'payment_date' => 'required',
            'estimated_delivery_date' => 'required',
            'account_number' => 'required',
            'from_currency' => 'required',
            'to_currency' => 'required',
            'exchange_rate' => 'required',
            'fee' => 'required',
            'status' => 'required',
            'remarks' => 'required',
            'bank' => 'required',
            'branch_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'address_line' => 'required',
            'cityOrTown' => 'required',
            'recipient_country' => 'required',
            'mobile' => 'required',
            'emailID' => 'required',
            'sending_reason' => 'required'
        ]);

        $user->saveUser($data);
        return 'Success';
        // return redirect('/dashboard/users')->with('success');

    }
}
 