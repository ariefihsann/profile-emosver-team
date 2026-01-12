<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // ⬅️ WAJIB ADA


Route::get('/', function () {
    return view('welcome');
})->name('home');

// Tambahkan ini untuk halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/tech', function () {
    return view('tech');
})->name('tech');