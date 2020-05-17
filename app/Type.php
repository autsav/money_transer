<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    
        public $table = 'types';
         protected $fillable = ['id','business','personal','created_at','updated_at',];
}
