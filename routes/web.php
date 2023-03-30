<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AnimalController;


/*Route::get('/animais', [AnimalController::class, 'index']);
Route::get('/visualisar-animal/{id}', [AnimalController::class, 'show']);
Route::get('/cadastrar-animal', [AnimalController::class, 'create']);
Route::post('/cadastrar-animal', [AnimalController::class, 'store']);
*/
Route::resource('animais', AnimalController::class);


