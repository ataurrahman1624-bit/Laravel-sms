<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
// Change 'info' to whatever your actual controller method name is
Route::post('/student-info', [HomeController::class, 'StudentInfo'])->name('StudentInfo');
Auth::routes();


Route::get('/student-list', function () {
    echo "This is the student list page.";
})->name('student-list');
