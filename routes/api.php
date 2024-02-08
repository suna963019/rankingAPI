<?php

use App\Http\Controllers\BlockBreakerController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\TetrisController;
use App\Http\Controllers\TypingController;
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

//tetris
Route::get('/tetris/index',[TetrisController::class,'index']);
Route::post('/tetris/add',[TetrisController::class,'add']);

//slot
Route::get('/slot/index',[SlotController::class,'index']);
Route::post('/slot/add',[SlotController::class,'add']);

//typing
Route::get('/typing/index',[TypingController::class,'index']);
Route::post('/typing/add',[TypingController::class,'add']);

//blockbreaker
Route::get('/blockbreaker/index',[BlockBreakerController::class,'index']);
Route::post('/blockbreaker/add',[BlockBreakerController::class,'add']);
