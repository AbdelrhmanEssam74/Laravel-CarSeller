<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/hello', [HomeController::class, 'welcome']);
Route::get('/about', [HomeController::class, 'about']);
Route::redirect('/', '/hello');

Route::fallback(function () {
    return view('404');
});
