<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route view
Route::view('/about', 'about');

// //route parameters
// // Route::get("/product/{id}", function(string $id){
// //     return "Product for ID = $id";
// // })->whereNumber('id');

// Route::get('/', function(){
//     $productUrl = route('product.view', ['lang' => 'en', 'id' => 1]);
//     dd($productUrl);
//     return view('welcome');
// });

// Route::get('/user/{username}', function (string $username) {
//     return "Alpha Username  = $username";
// })->whereAlpha("username");

// // NAMED ROUTE WITH PARAMETER

// Route::get("/p/{lang}/product/{id}", function (string $lang, string $id) {
// })->name("product.view");

// Route::get("/user/profile", function (){})->name('profile');
// Route::get('/current-user', function (){
//     return to_route('profile');
// });

// Route Group
// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         return '/admin/users';
//     });
// });

// Route::name('admin.')->group(function () {
//     Route::get('users', function () {
//         return '/users'; // But the route name is "admin.users"
//     })->name('users');
// });


/// Route adding 2 numbers Challege
// Route::get('/sum/{num1}/{num2}', function (float $num1, float $num2) {
//     return $num1 + $num2;
// })->whereNumber(['num1', 'num2']);








Route::fallback(function () {
    return 'fallback';
});