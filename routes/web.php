<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\GlobalPageController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;

Route::get('/', [FrontPageController::class, 'index'])->name('layouts.index');
Route::get('/gioi-thieu', [GlobalPageController::class, 'index'])->name('layouts.aboutus.index');

// Dashboard
Route::prefix('admin')->group(function () {
    Route::get('dashboard/index', [DashboardController::class, 'index'])->name('admins.index');
    Route::get('pages/index', [PagesController::class, 'index'])->name('admins.pages.index');
    Route::get('categories/index', [CategoriesController::class, 'index'])->name('admins.categories.index');
    Route::get('posts/index', [PostsController::class, 'index'])->name('admins.posts.index');
});
