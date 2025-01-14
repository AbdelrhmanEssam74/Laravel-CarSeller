<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('hello.welcome')
            ->with('name', 'John Doe')
            ->with('surname', 'Johnson')
            ->with('jop', '<b>Developer<b/>');
    }
}
