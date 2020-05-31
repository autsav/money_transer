<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country_bank extends Model
{
     public $table = 'country_banks';
         protected $fillable = ['id','country_id','bank_id','created_at','updated_at',];
               }
