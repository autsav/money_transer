<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
      public $table = 'Locations';
             protected $fillable = ['id','country','city','street','postal_codes','created_at','updated_at',];


}
