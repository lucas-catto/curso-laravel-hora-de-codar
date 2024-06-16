<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/',              [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $search = request('search');

    return view('product', ['search' => $search]);
});

/*
Route::get('/produtos/{id}', function (int $id) {
    return view('product', compact('id'));
})->where([
    'id' => '[0-9]+'
]);

Route::get('/produtos_teste/{id?}', function (int $id = null) {
    return view('product', compact('id'));
})->where([
    'id' => '[0-9]+'
]);
*/
