<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

// Middleware global

Route::get('admin', function(){
    dd('admin');
})->middleware('checkToken:editor');

// Route::middleware(['myApp'])->group( function(){

//     Route::get('users', function(){
//         dd('users');
//     });

//     Route::get('posts', function(){
//         dd('posts');
//     });

//     Route::get('services', function(){
//         dd('services');
//     })->withoutMiddleware('userAgent');
// });
