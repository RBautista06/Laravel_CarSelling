<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route view
Route::view('/about', 'about');



/// fallback route if the route does not exists
Route::fallback(function () {
    return 'fallback';
});