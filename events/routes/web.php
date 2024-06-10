<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'lucas';
    $age = 17;

    return view('welcome', compact('name', 'age'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('contact');
});
