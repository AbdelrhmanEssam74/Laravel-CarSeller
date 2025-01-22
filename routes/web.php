<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/hello', [HomeController::class, 'welcome']);
Route::redirect('/', '/hello');

Route::fallback(function () {
    return view('404');
});
