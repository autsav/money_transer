<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    protected $table = "exchange_rates";
    public $timestamps = false;

    protected $fillable = ["currency_code", "rate"];
}
