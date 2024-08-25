<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});


Route::get('/structure', [HomeController::class, 'structure'])->name('structure');
Route::get('/partner', [HomeController::class, 'partner'])->name('partner');
Route::get('/about', [HomeController::class, 'about'])->name('about');
