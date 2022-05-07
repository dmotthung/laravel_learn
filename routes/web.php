<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\GlobalPageController;

Route::get('/', [FrontPageController::class, 'index'])->name('layout.index');
Route::get('/gioi-thieu', [GlobalPageController::class, 'index'])->name('layout.aboutus.index');
