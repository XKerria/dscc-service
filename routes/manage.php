<?php

use App\Http\Controllers\Manage\AuthController;
use App\Http\Controllers\Manage\BucketController;
use App\Http\Controllers\Manage\SettingController;
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
});
