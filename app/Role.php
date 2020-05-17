<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
        public $table = 'roles';
         protected $fillable = ['id','name','created_at','updated_at',];
}
