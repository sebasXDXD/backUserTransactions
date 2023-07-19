<?php

use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(TransactionController::class)->group(function(){
    Route::get('/users/{token}/transactions/{id}', 'show');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/users/{token}', 'index');
});
