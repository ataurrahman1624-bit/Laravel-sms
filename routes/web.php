<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
// Change 'info' to whatever your actual controller method name is
Route::post('/StudentInfo', [HomeController::class, 'StudentInfo'])->name('StudentInfo');