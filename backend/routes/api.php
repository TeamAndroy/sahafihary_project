<?php

use App\Http\Controllers\ProjetController;
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

Route::get('/project/get/all', [ProjetController::class, 'index']);
Route::get('/project/get/{projet}', [ProjetController::class, 'show']);
Route::post('/project/create', [ProjetController::class, 'store']);
Route::put('/project/update/{projet}', [ProjetController::class, 'update']);
Route::delete('/project/delete/{projet}', [ProjetController::class, 'destroy']);
