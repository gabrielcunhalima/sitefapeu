<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/home',[HomeController::class,'index'])->name('homepage.home');