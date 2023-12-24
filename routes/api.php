<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\SubscriptionController;
use App\Http\Controllers\Api\WithdarwController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::post('profile', [AuthController::class, 'profile']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('home', [HomeController::class, 'index']);
    Route::get('subscription', [SubscriptionController::class, 'index']);
    Route::post('subscribe', [SubscriptionController::class, 'subscribe']);
    Route::get('withdraw', [WithdarwController::class, 'index']);   
    Route::post('withdraw', [WithdarwController::class, 'withdraw']);
});
