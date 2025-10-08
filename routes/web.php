<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/signup', [SignupController::class,'create'])->name('home');



/// fallback route if the route does not exists
Route::fallback(function () {
    return 'fallback';
});