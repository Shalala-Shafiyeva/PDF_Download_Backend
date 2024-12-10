<?php

use App\Http\Controllers\PresentationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => "user"], function () {
    Route::get('/', [UserController::class, 'index']);
});
Route::group(['prefix' => "presentation"], function () {
    Route::get('/', [PresentationController::class, 'index']);
    Route::post('/create', [PresentationController::class, 'store']);
    Route::post('/edit/{id}', [PresentationController::class, 'update']);
    Route::get('/show/{id}', [PresentationController::class, 'show']);
});
