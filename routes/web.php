<?php

use App\Http\Controllers\NotasController;
use Illuminate\Support\Facades\Route;

Route::resource('/notas', NotasController::class);