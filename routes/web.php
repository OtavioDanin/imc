<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imc', [ImcController::class, 'index']);
Route::post('/imc/calculation', [ImcController::class, 'calculation'])->name('imc.calculation');