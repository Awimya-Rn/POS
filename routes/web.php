<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('category')->group(function(){
    Route::get('/food-beverage', [FoodBeverageController::class, 'index']);
    Route::get('/beauty-health', [BeautyHealthController::class, 'index']);
    Route::get('/home-care', [HomeCareController::class, 'index']);
    Route::get('/baby-kid', [BabyKidController::class, 'index']);
});

Route::get('/user/{id}/name/{name}',[UserController::class,'show']);

Route::get('/transaksi',[PenjualanController::class,'index']);
