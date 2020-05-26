<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
         public $table = 'transactions';
             protected $fillable = ['id','sender_id','receiver_id','payment_date','estimated_delivery_date',];}
