<?php

use App\Http\Controllers\Admin\{CategoryController, HomeController};
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index'])->name('admin.home');

Route::resource('categories', CategoryController::class)->names('admin.categories');
