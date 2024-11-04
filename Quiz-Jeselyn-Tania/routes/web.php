<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
//Route::get('/category/data-science', [CategoryController::class, 'dataScience'])->name('category.data-science');
//Route::get('/category/network-security', [CategoryController::class, 'networkSecurity'])->name('category.network-security');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/writers', [WriterController::class, 'index'])->name('writers');

Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writers.show');

Route::get('/about', [AboutController::class, 'index'])->name('about');
