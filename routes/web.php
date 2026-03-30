<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello';
});

Route::get('/greeting2/{name}', function ($name) {
    return view('greeting', ['name' => $name]);
});

// Route::view('/greeting', 'greeting');