<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//homepage
Route::get('/home', function() {
    return view('homepage');
})->name('home');


//user routes
Route::get('/register', function() {
    return view('registration');
})->name('register');

Route::post('register' , [UserController::class,'create']);


Route::get('/login', function() {
    return view('logging');
})->name('login');

Route::post('login' , [UserController::class,'log']);

Route::get('/logout',function(){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');




//admin routes
Route::get('/admin', [UserController::class,'adminShow'])->name('admin');
Route::post('/admin', [UserController::class,'adminLog'])->name('admin');

Route::get('/adminNav', function() {
    return view('adminNavigation');
})->name('adminNav');


Route::get('/approve' , [AdminController::class,'pendings'])->name('approve');
Route::post('/approve/{id}' , [AdminController::class,'approving'])->name('approve.action');

Route::get('/AdminDeleted' , [MarketController::class,'adminDel'])->name('AdminDeleted');





//market routes

//seller
Route::get('/upload' , [MarketController::class,'view'])->name('upload');
Route::post('/upload' , [MarketController::class,'create']);

Route::get('/showDeleted' , [MarketController::class,'showDeleted'])->name('showMarkets');
Route::get('/showApproved' , [MarketController::class,'showApproved'])->name('showApproved');
Route::get('/showPending' , [MarketController::class,'showPending'])->name('showPending');


Route::get('/display' , [MarketController::class,'show'])->name('display');




//
Route::get('/about', function() {
    return view('aboutUs');
})->name('about');

