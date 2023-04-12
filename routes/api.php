<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BlackboxController;
use App\Http\Controllers\Api\ExamPaperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('users', UserController::class);
Route::apiResource('boxes', BlackboxController::class);
Route::apiResource('papers', ExamPaperController::class);
