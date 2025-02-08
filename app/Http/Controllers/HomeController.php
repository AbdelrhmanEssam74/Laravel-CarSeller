<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('hello.welcome');
    }
    public function about()
    {
        return view('hello.about');
    }
}
