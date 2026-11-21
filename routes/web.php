<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/gallery', fn() => view('gallery'))->name('gallery');
Route::get('/contact', fn() => view('tech'))->name('tech');

Route::post('/contact/send', [ContactController::class, 'sendEmail'])
    ->middleware('throttle:5,1')
    ->name('contact.send');
