<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
         public $table = 'transactions';
             protected $fillable = ['id','sender_id','receiver_id','payment_date','estimated_delivery_date','created_at','updated_at','account_number','from_currency','to_currency','exchange_rate','fee','status','remarks','bank','branch_name','first_name','middle_name','last_name','address_line','cityOrTown','recipient_country','mobile','emailID','sending_reason'];}
