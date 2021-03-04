<?php

use App\Http\Controllers\Admin\{CategoryController, HomeController, PostController, TagController,UserController};
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index'])->name('admin.home');

Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('tags', TagController::class)->names('admin.tags');

Route::resource('posts', PostController::class)->names('admin.posts');

