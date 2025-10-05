<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LembagaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lembaga', [LembagaController::class, 'index']);


Route::get('/auth', [AuthController::class, 'index']);

