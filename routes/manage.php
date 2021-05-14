<?php

use App\Http\Controllers\Manage\AuthController;
use App\Http\Controllers\Manage\BannerController;
use App\Http\Controllers\Manage\BucketController;
use App\Http\Controllers\Manage\CarController;
use App\Http\Controllers\Manage\CategoryController;
use App\Http\Controllers\Manage\PartnerController;
use App\Http\Controllers\Manage\ReserveController;
use App\Http\Controllers\Manage\ServiceController;
use App\Http\Controllers\Manage\SettingController;
use App\Http\Controllers\Manage\StaffController;
use App\Http\Controllers\Manage\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello, Service Management!';
});

Route::post('/auth', [AuthController::class, 'auth']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/sts', [BucketController::class, 'sts']);
    Route::put('/users/{user}/password', [UserController::class, 'password']);

    Route::apiResource('/users', UserController::class);
    Route::apiResource('/settings', SettingController::class);

    Route::apiResource('/categories', CategoryController::class);
    Route::apiResource('/services', ServiceController::class);
    Route::apiResource('/banners', BannerController::class);
    Route::apiResource('/cars', CarController::class);
    Route::apiResource('/staff', StaffController::class);
    Route::apiResource('/partners', PartnerController::class);
    Route::apiResource('/reserves', ReserveController::class);
});
