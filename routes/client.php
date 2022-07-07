<?php

use App\Http\Controllers\Client\BannerController;
use App\Http\Controllers\Client\SaleController;
use App\Http\Controllers\Client\VehicleController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\CouponController;
use App\Http\Controllers\Client\PartnerController;
use App\Http\Controllers\Client\ReserveController;
use App\Http\Controllers\Client\ServiceController;
use App\Http\Controllers\Client\SettingController;
use App\Http\Controllers\Client\StaffController;
use App\Http\Controllers\Client\TicketController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Client\VipController;
use Illuminate\Support\Facades\Route;


Route::get('/users/current', [UserController::class, 'current']);
Route::post('/users/decrypt', [UserController::class, 'decrypt']);

Route::apiResource('/users', UserController::class)->only(['store', 'update']);
Route::apiResource('/settings', SettingController::class)->only(['index']);
Route::apiResource('/banners', BannerController::class)->only(['index']);
Route::apiResource('/categories', CategoryController::class)->only(['index']);
Route::apiResource('/services', ServiceController::class)->only(['show', 'index']);
Route::apiResource('/coupons', CouponController::class)->only(['index']);
Route::apiResource('/staffs', StaffController::class)->only(['index']);
Route::apiResource('/vehicles', VehicleController::class)->only(['index']);
Route::apiResource('/partners', PartnerController::class)->only(['index']);
Route::apiResource('/sales', SaleController::class)->only(['index']);
Route::apiResource('/reserves', ReserveController::class)->only(['index', 'store']);
Route::apiResource('/tickets', TicketController::class)->only(['index', 'store']);
Route::apiResource('/vips', VipController::class)->only(['index']);
