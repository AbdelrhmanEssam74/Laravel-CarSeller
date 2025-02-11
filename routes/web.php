<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'welcome']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/signup', [HomeController::class, 'signup']);
Route::redirect('/home', '/');

Route::fallback(function () {
    return view('404');
});
