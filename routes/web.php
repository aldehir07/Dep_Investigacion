<?php

use App\Http\Controllers\CapacitacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'index'])->name('app');

Route::resource('capacitaciones', CapacitacionController::class);
