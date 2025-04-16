<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('homepage');
})->name('home');

Route::get('/register', function() {
    return view('registration');
})->name('register');

Route::post('register' , [UserController::class,'create']);

Route::get('/login', function() {
    return view('logging');
})->name('login');

Route::post('login' , [UserController::class,'log']);

Route::get('/about', function() {
    return view('aboutUs');
})->name('about');
