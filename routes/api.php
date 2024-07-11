<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/users')->group(function () {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/portfolio-platform', [UserController::class, 'storePortfolio'])->middleware('auth:sanctum');
    Route::get('/show', [UserController::class, 'showCurrent'])->middleware('auth:sanctum');
    Route::put('/update/{id}', [UserController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
});
