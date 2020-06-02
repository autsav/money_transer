<?php
 
namespace App\Http\Controllers;

use App\ExchangeRate;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {
        $currencies = ExchangeRate::pluck("currency_code");
        return view('frontend.home')->with([
            "currencies" => $currencies,
            "currencySubText" => $this->currencySubText,
            "popularCurrency" => $this->popularCurrency,
            "defaultFromCurrency" => $this->defaultFromCurrency,
            "defaultToCurrency" => $this->defaultToCurrency
            ]
        );
    }

    public function about()
    {
        return view('frontend.about')->with(['title'=>'About Us']);
    }

    public function help()
    {
        return view('frontend.help')->with(['title'=>'Help Policy']);
    }

    public function contact()
    {
        return view('frontend.contact')->with(['title'=>'Contact']);
    }

    public function privacy_policy()
    {
        return view('frontend.privacy-policy')->with(['title'=>'Privacy Policy']);
    }

    public function cookie_policy()
    {
        return view('frontend.cookie-policy')->with(['title'=>'Cookie Policy']);
    }

    public function getExchangeResult(Request $request){
        $data = $request->all();

        $amount = $data['amount'];
        $from = $data['from'];
        $to = $data['to'];
        $reverse = isset($data['reverse']) ? $data['reverse'] : false;
        $fee = 0.009; //0.9% fee

        if($amount){
            $exchangeRates = ExchangeRate::where('currency_code',$from)->orWhere('currency_code',$to)->pluck('rate','currency_code');
            if(count($exchangeRates)===2 || ($from === $to)){
                $r1 = $exchangeRates[$from];
                $r2 = $exchangeRates[$to];
                $exr = $r2/$r1;

                if($reverse){
                    $result = $amount/($exr*(1-$fee));
                    $feeAmount = $result * $fee;
                }else{
                    $feeAmount = $amount*$fee;
                    $result = $exr*($amount-$feeAmount);
                }

                return response()->json([
                    "success"=>true,
                    "body"=> [
                        "rate" => round($exr, 3),
                        "result" => round($result, 3),
                        "feeAmount" => round($feeAmount, 3)
                    ]
                ]);
            }
        }
        return response()->json([
            "success"=>false,
            "body"=>null
        ]);
    }
}
