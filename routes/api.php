<?php


use App\Http\Controllers\RatingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    //Rating a product
    Route::get('/rate', [RatingController::class, 'rate']);

//Removing a rating
Route::delete('rate/{user_rating}', [RatingController::class, 'remove']);

//Changing a rating
Route::put('rate/{user_rating}',[RatingController::class, 'change']);
    
}); 
