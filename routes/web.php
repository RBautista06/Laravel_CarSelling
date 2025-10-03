<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        'name'=> 'Railley',
        'email'=> 'railley@gmail.com',
    ];
    dd($person);
    return view('welcome');
});

// route view
Route::view('/about', 'about');

//route parameters
Route::get("/product/{id}", function(string $id){
    return "Product for ID = $id";
})->whereNumber('id');


Route::get('/user/{username}', function (string $username) {
    return "Alpha Username  = $username";
})->whereAlpha("username");