<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function help()
    {
        return view('frontend.help');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
