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
            ->with('job', '<b>Developer</b>')
            ->with('hobbies', ["Reading", "Swimming", "Coding"]);
    }
}
