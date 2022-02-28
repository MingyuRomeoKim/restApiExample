<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('v1/register', [PassportAuthController::class, 'register']);
Route::post('v1/login', [PassportAuthController::class, 'login']);
//Route::post('v1/logout',  [PassportAuthController::class, 'logout']);
Route::middleware('auth:api')->group(function () {
    Route::post('v1/logout',  [PassportAuthController::class, 'logout']);
    Route::resource('orders', OrderController::class);
});