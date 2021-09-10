<?php

use App\Http\Controllers\Server\AdminController;
use App\Http\Controllers\Server\AuthController;
use App\Http\Controllers\Server\BannerController;
use App\Http\Controllers\Server\BucketController;
use App\Http\Controllers\Server\SaleController;
use App\Http\Controllers\Server\VehicleController;
use App\Http\Controllers\Server\CategoryController;
use App\Http\Controllers\Server\CouponController;
use App\Http\Controllers\Server\LogController;
use App\Http\Controllers\Server\PartnerController;
use App\Http\Controllers\Server\ReserveController;
use App\Http\Controllers\Server\ServiceController;
use App\Http\Controllers\Server\SettingController;
use App\Http\Controllers\Server\StaffController;
use App\Http\Controllers\Server\TestController;
use App\Http\Controllers\Server\UserController;
use App\Http\Controllers\Server\UserRecordController;
use App\Http\Controllers\Server\VipController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello, Service Management!';
});
Route::apiResource('/test', TestController::class);

Route::apiResource('/settings', SettingController::class)->only(['index', 'show']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/sts', [BucketController::class, 'sts']);
    Route::get('/auth/admin', [AuthController::class, 'admin']);
    Route::get('/auth/refresh', [AuthController::class, 'refresh']);

    Route::apiResource('/admins', AdminController::class);
    Route::apiResource('/settings', SettingController::class)->only(['update']);

    Route::apiResource('/banners', BannerController::class);
    Route::apiResource('/vehicles', VehicleController::class);
    Route::apiResource('/sales', SaleController::class);
    Route::apiResource('/staffs', StaffController::class);
    Route::apiResource('/partners', PartnerController::class);
    Route::apiResource('/categories', CategoryController::class);
    Route::apiResource('/services', ServiceController::class);
    Route::apiResource('/reserves', ReserveController::class);
    Route::apiResource('/vips', VipController::class);
    Route::apiResource('/users/{user}/records', UserRecordController::class);
    Route::apiResource('/users', UserController::class);
    Route::apiResource('/coupons', CouponController::class);
    Route::apiResource('/logs', LogController::class)->only(['index', 'show']);
});
