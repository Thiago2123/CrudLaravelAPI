<?php

use Illuminate\Http\Request;
use illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DogController;

Route::get('animais', [DogController::class, 'index']);
Route::post('animais', [DogController::class, 'store']);
Route::get('animais/{id}', [DogController::class, 'show']);
Route::get('animais/{id}/editar', [DogController::class, 'edit']);
Route::put('animais/{id}/editar', [DogController::class, 'update']);
Route::delete('animais/{id}/delete', [DogController::class, 'destroy']);

