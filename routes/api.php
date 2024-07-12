<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserExpertiseController;
use App\Http\Controllers\UserPortfolioPlatformController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectJoinController;
use App\Http\Controllers\PersonalProjectController;

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
    Route::get('index', [UserController::class, 'index'])->middleware('auth:sanctum');
    Route::get('/show', [UserController::class, 'showCurrent'])->middleware('auth:sanctum');
    Route::put('/update', [UserController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
});

Route::prefix('/user-expertise')->group(function () {
    Route::post('/', [UserExpertiseController::class, 'store'])->middleware('auth:sanctum');
    Route::delete('/{id}', [UserExpertiseController::class, 'delete'])->middleware('auth:sanctum');
});

Route::prefix('/user-portfolio-platform')->group(function () {
    Route::post('/', [UserPortfolioPlatformController::class, 'store'])->middleware('auth:sanctum');
    Route::delete('/{id}', [UserPortfolioPlatformController::class, 'delete'])->middleware('auth:sanctum');
});

Route::prefix('project')->group(function () {
    Route::post('/store', [ProjectController::class, 'store'])->middleware('auth:sanctum');
    Route::post('/{projectId}/store-skill', [ProjectController::class, 'storeSkill'])->middleware('auth:sanctum');

    Route::post('/{projectId}/send-request', [ProjectJoinController::class, 'store'])->middleware('auth:sanctum');
    Route::post('/{projectId}/reject-request/{userId}', [ProjectJoinController::class, 'reject'])->middleware('auth:sanctum');
    Route::post('/{projectId}/accept-request/{userId}', [ProjectJoinController::class, 'accept'])->middleware('auth:sanctum');
    Route::get('/{projectId}/show-request', [ProjectJoinController::class, 'showByProjectId'])->middleware('auth:sanctum');

    Route::get('/index', [ProjectController::class, 'index'])->middleware('auth:sanctum');
    Route::get('/show/{id}', [ProjectController::class, 'showById'])->middleware('auth:sanctum');
    Route::get('/show', [ProjectController::class, 'showCurrent'])->middleware('auth:sanctum');
    Route::get('/show-ongoing', [ProjectController::class, 'showCurrentOngoing'])->middleware('auth:sanctum');

    Route::put('/upload-image/{id}', [ProjectController::class, 'uploadImage'])->middleware('auth:sanctum');
    Route::put('/finish/{id}', [ProjectController::class, 'finish'])->middleware('auth:sanctum');
});

Route::prefix('personal-project')->group(function () {
    Route::post('/store', [PersonalProjectController::class, 'store'])->middleware('auth:sanctum');
    Route::post('/{personalProjectId}/store-skill', [PersonalProjectController::class, 'storeSkill'])->middleware('auth:sanctum');
    Route::get('/show', [PersonalProjectController::class, 'showCurrent'])->middleware('auth:sanctum');
    Route::get('/show/{id}', [PersonalProjectController::class, 'showById'])->middleware('auth:sanctum');
});
