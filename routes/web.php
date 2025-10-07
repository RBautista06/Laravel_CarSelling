<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');



/// fallback route if the route does not exists
Route::fallback(function () {
    return 'fallback';
});