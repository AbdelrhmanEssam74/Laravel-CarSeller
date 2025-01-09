<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{id}', function (string $id) {
    echo "profile: id = {$id}";
})->name('profile');

Route::get('/test/{id}', function (string $id) {
    return redirect()->route('profile', ['id' => $id]); // Example with id = 1
});

