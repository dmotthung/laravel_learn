<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

Route::get('/', [FrontPageController::class, 'index'])->name('frontpage.index');
