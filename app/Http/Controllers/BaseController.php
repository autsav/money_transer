<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public $currencySubText = ['USD' => 'United States dollar', 'AUD' => 'Australian dollar', 'INR' => 'Indian rupee', 'AED' => 'United Arab Emirates dirham', 'AFN' => 'Afghan Afghani', 'ARS' => 'Argentine peso', 'BDT' => 'Bangladeshi taka', 'BGN' => 'Bulgarian lev', 'BRL' => 'Brazilian real', 'CAD' => 'Canadian dollar', 'CHF' => 'Swiss franc', 'CLP' => 'Chilean peso', 'CNY' => 'Chinese yuan', 'CZK' => 'Czech koruna', 'DKK' => 'Danish krone', 'EGP' => 'Egyptian pound', 'EUR' => 'Euro', 'GBP' => 'British pound', 'GEL' => 'Georgian lari', 'GHS' => 'Ghanaian cedi', 'HKD' => 'Hong Kong dollar', 'HRK' => 'Croatian kuna', 'HUF' => 'Hungarian forint', 'IDR' => 'Indonesian rupiah', 'ILS' => 'Israeli shekel', 'JPY' => 'Japanese yen', 'KES' => 'Kenyan shilling', 'KRW' => 'South Korean won', 'LKR' => 'Sri Lankan rupee', 'MAD' => 'Moroccan dirham', 'MXN' => 'Mexican peso', 'MYR' => 'Malaysian ringgit', 'NGN' => 'Nigerian naira', 'NOK' => 'Norwegian krone', 'NPR' => 'Nepalese rupee', 'NZD' => 'New Zealand dollar', 'PEN' => 'Peruvian nuevo sol', 'PHP' => 'Philippine peso', 'PKR' => 'Pakistani rupee', 'PLN' => 'Polish złoty', 'RON' => 'Romanian leu', 'RUB' => 'Russian rouble', 'SEK' => 'Swedish krona', 'SGD' => 'Singapore dollar', 'THB' => 'Thai baht', 'TRY' => 'Turkish lira', 'UAH' => 'Ukrainian hryvnia', 'UGX' => 'Ugandan shilling', 'VND' => 'Vietnamese dong', 'ZAR' => 'South African rand'];
    public $popularCurrency = ['USD','AUD','INR'];
    public $defaultFromCurrency = 'USD';
    public $defaultToCurrency = 'AUD';

    public function __construct()
    {
        View::composer('*', function ($view) {
            $view->with('user', $this->user());
        });
    }

    protected function user(){
        return Auth::user();
    }
}
