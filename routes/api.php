<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\passportAuthController;
use App\Http\Controllers\ClienteController;

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

//Route::post('login_2', [AuthController::class, 'login_2']);
/*
Route::group(['middleware'=>'auth:api'], function(){
    Route::get('all_2', [ChatController::class, 'all_2']);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('user/{id}', [AuthController::class, 'show']);
    Route::get('chatsAuthU/{id}', [ChatController::class, 'allAuthU']);
    Route::get('chatsAuthM/{id}', [ChatController::class, 'allAuthM']);
    Route::get('subChatAuthM/{id}', [ChatController::class, 'subAllAuthM']);
    Route::get('getMessage/{id}', [MessageController::class, 'show']);
});*/
