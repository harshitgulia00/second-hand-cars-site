<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellRequestController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ContactMessagesController;
use App\Http\Controllers\BuyRequestController;
use Illuminate\Support\Facades\Route;

Route::get('', [CarsController::class, 'featuredCars']);
Route::get('buynow/{carId}', [BuyRequestController::class, 'create']);
Route::post('buyRequest', [BuyRequestController::class, 'store']);
Route::get('/explore',[CarsController::class,'index']);
Route::post('/message',[ContactMessagesController::class,'store']);
Route::post('/addCar',[CarsController::class, 'store']);
Route::get('/details/{id}',[CarsController::class, 'details']);
Route::view('/contact','contact');
Route::get('/about',function(){
    return view('about');
});
Route::middleware('auth')->group(function () {
    Route::get('/sellCar', [SellRequestController::class, 'create']);
    Route::post('/sellCar', [SellRequestController::class, 'store']);
    Route::get('/details/{id}',[CarsController::class, 'details']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth','RoleCheck'])->group(function(){
    Route::prefix('/admin')->group(function(){
        Route::view('/','admin.ManageCars');
        Route::view('cars','admin.ManageCars');
        Route::view('buyRequests','admin.buyRequests');
        Route::view('sellRequests','admin.sellRequests');
        Route::view('messages','admin.Messages');
        Route::get('addCar',[CarsController::class,'create']);
        Route::post('storecar',[CarsController::class,'store']);
        Route::post('update/{carId}',[CarsController::class,'edit']);
    });
});