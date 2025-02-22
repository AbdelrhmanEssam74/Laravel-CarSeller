<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginControllers;
use App\Http\Controllers\SignupControllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'welcome']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/login', [LoginControllers::class, 'create']);
Route::get('/signup', [SignupControllers::class, 'create']);
Route::redirect('/home', '/');

Route::fallback(function () {
    return view('404');
});
