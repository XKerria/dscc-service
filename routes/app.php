<?php

use App\Http\Controllers\App\BannerController;
use App\Http\Controllers\App\CarController;
use App\Http\Controllers\App\CategoryController;
use App\Http\Controllers\App\ReserveController;
use App\Http\Controllers\App\ServiceController;
use App\Http\Controllers\App\StaffController;
use Illuminate\Support\Facades\Route;


Route::get('/banners', [BannerController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/services/{service}', [ServiceController::class, 'show']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/staff', [StaffController::class, 'index']);
Route::post('/reserves', [ReserveController::class, 'store']);
