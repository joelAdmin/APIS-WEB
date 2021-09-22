<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\passportAuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ViajeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider ithin a group which
| is assigned the "api" middleware group. Enjoy bulding your API!
|
*/
Route::get('cliente/all', [ClienteController::class, 'all']);
Route::post('cliente/created', [ClienteController::class, 'store']);
Route::delete('cliente/delete/{id}', [ClienteController::class, 'destroy']);
Route::put('cliente/update/{id}', [ClienteController::class, 'update']);
Route::get('viaje/all', [ViajeController::class, 'all']);

Route::post('viaje/created', [ViajeController::class, 'store']);

