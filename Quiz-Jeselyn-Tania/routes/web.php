<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/writers', [WriterController::class, 'index'])->name('writers');

Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writers.show');

Route::get('/about', [AboutController::class, 'index'])->name('about');
