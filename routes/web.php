<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // ⬅️ WAJIB ADA

Route::get('/', [HomeController::class, 'index'])->name('home');
