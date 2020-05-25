<?php

namespace App\Http\Controllers;

use App\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
