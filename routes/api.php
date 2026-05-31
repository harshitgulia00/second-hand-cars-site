<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\BuyRequestController;
use App\Http\Controllers\SellRequestController;
use App\Http\Controllers\ContactMessagesController;
use App\Http\Controllers\WishlistController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cars',[CarsController::class,'CarsApi']);
Route::get('/buyRequests',[BuyRequestController::class,'index']); //pending buy requests
Route::get('/buyRequests/accepted',[BuyRequestController::class,'accepted']); //accepted buy requests
Route::get('/buyRequests/rejected',[BuyRequestController::class,'rejected']); //rejected buy requests
Route::get('/buyRequest/accept/{id}',[BuyRequestController::class,'accept']); //accept a request
Route::get('/buyRequest/reject/{id}',[BuyRequestController::class,'reject']); //reject a buy request
Route::get('/saveCar/{userId}/{carId}',[WishlistController::class,'store']);
Route::get('/deleteCar/{carId}',[CarsController::class,'destroy']);
Route::get('/sellRequests',[SellRequestController::class,'index']); //pending sell requests
Route::get('/sellRequests/accepted',[SellRequestController::class,'accepted']); //accepted sell requests
Route::get('/sellRequests/rejected',[SellRequestController::class,'rejected']); //rejected sell requests
Route::get('/sellRequests/accept/{id}',[SellRequestController::class,'accept']); //accept a request
Route::get('/sellRequests/reject/{id}',[SellRequestController::class,'reject']); //reject a sell request


// contact messages
Route::get(
    '/messages/unread',
    [ContactMessagesController::class,'index']
);

Route::get(
    '/messages/read',
    [ContactMessagesController::class,'read']
);

Route::get(
    '/messages/read/{id}',
    [ContactMessagesController::class,'markAsRead']
);