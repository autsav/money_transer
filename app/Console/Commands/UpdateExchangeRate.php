<?php

namespace App\Console\Commands;

use App\ExchangeRate;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateExchangeRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchangerate:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to update currency exchange rate.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // set API Endpoint and API key
        $endpoint = 'latest';
        $access_key = config('app.fixer_api_key');

        // Initialize CURL:
        $ch = curl_init('http://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $exchangeRates = json_decode($json, true);
        $rows = [];

        //update data to database
        if($exchangeRates['success']){
            foreach ($exchangeRates['rates'] as $key=>$value){
                $row = ["currency_code"=>$key, "rate"=>$exchangeRates['rates'][$key], "last_updated_at"=>Carbon::now()];
                array_push($rows, $row);
            }

            ExchangeRate::truncate();
            ExchangeRate::insert($rows);
        }
    }
}
