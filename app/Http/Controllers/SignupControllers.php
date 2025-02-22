<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupControllers extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }
}
