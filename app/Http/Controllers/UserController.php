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
use App\User;
use App\Bank;
use App\Country;



class UserController extends BaseController
{
     public function index(){
      
        return view('frontend.user.dashboard');
    }

    public function send_money(){
        $banks = Bank::all();
        $countries = Country::all();
        $currencies = ExchangeRate::pluck("currency_code");
        return view('frontend.user.send-money')->with([
                "currencies" => $currencies,
                "banks" => $banks,
                "countries" => $countries,
                "currencySubText" => $this->currencySubText,
                "popularCurrency" => $this->popularCurrency,
                "defaultFromCurrency" => $this->defaultFromCurrency,
                "defaultToCurrency" => $this->defaultToCurrency
            ]
        );
    }
     public function store(Request $request)
    {  
        // dd($request);

        $transaction = new Transaction([
            'sender_id' => Auth::user()->id,
            'from_currency' => $request->get('curr1'),
            'to_currency' => $request->get('curr2'),
            'exchange_rate' => '101',
            'fee' => '101',
            'status' =>'101',
            'remarks' => $request->get('description'),
            'Recipient_bank_country' => $request->get('Recipient_bank_country'),
            'bank' => $request->get('bank'),
            'branch_name' => $request->get('branch_name'),
            'account_number' => $request->get('account_number'),
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
            'address_line' => $request->get('address_line'),
            'cityOrTown' => $request->get('cityOrTown'),
            'recipient_country' => $request->get('recipient_country'),
            'mobile' => $request->get('mobile'),
            'emailID' => $request->get('emailID'),
            'sending_reason' => $request->get('sending_reason')

        ]);
        $transaction->save();
        return redirect('/thank-you')->with('success', 'Transaction saved!');
    }
}
 