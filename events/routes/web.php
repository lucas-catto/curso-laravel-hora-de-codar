<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'lucas';
    $age = 17;

    $numbers = [0,1,2,3,4,5,6,7,8,9];
    $names = ['lucas', 'elon', 'john', 'larry', 'sergey'];

    return view('welcome',
        compact(
            'name',
            'age',
            'numbers',
            'names'
        )
    );
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});
