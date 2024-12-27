<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControlController;

Route::get('/', [ControlController::class, 'index']);
Route::get('/processos/create', [ControlController::class, 'create']);
Route::get('/processos/{id}', [ControlController::class, 'show']);
Route::post('/processos', [ControlController::class, 'store']);
