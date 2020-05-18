<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        View::composer('*', function ($view) {
            $view->with('user', $this->user());
        });
    }

    protected function user(){
        return Auth::user();
    }
}
