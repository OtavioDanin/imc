<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::post('/imc/calc', [ImcController::class, 'index']);

