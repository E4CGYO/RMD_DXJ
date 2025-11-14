<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Rmdcontroller;

Route::get('/home', [Rmdcontroller::class, 'home']);
Route::get('/post/{id}', [Rmdcontroller::class, 'post']);
Route::get('/about', [Rmdcontroller::class, 'about']);
// Route::get('home', function () {
//     return view('home');
// });

// Route::get('about', function () {
//     return view('about');
// });
