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
Route::get('/there', function () {
    echo "we are here!";
});

Route::match(['get', 'post'], '/hi', function () {
    dump($_SERVER['REQUEST_METHOD']);
});
Route::redirect('/here', '/there');
Route::get('/search/{search}', function (string $search) {
    foreach (explode(' ', $search) as $word) {
        echo "search: {$word}<br>";
    }
})->where('search', '.+');
Route::get
('/watch/{VId}', function (string $videoId) {
    echo "watch: {$videoId}";
});

Route::prefix('/admin')->group(function () {
    Route::get('/users', function () {
        echo "admin users";
    });
});
Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        echo "here admin.users";
    })->name('users');
});

Route::fallback(function () {
    return view('404');
});
