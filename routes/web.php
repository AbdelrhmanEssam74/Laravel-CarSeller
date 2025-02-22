<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginControllers;
use App\Http\Controllers\SignupControllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'welcome'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [LoginControllers::class, 'create'])->name('login');
Route::get('/signup', [SignupControllers::class, 'create'])->name('signup');
Route::redirect('/home', '/');

Route::fallback(function () {
    return view('404');
});
