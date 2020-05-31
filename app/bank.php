<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public $table = 'banks';
         protected $fillable = ['id','name','created_at','updated_at',];}
