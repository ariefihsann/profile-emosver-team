<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // ⬅️ WAJIB ADA
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/gallery', fn() => view('gallery'))->name('gallery');
Route::get('/contact', fn () => view('tech'))->name('tech');

Route::post('/contact/send', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);


    try {
        Mail::raw("Pesan dari: " . $data['name'] . "\nEmail: " . $data['email'] . "\n\nPesan:\n" . $data['message'], function ($msg) use ($data) {
            $msg->to('kri@event.pens.ac.id') 
                ->subject('[WEBSITE INQUIRY] ' . $data['subject']);
        });
        
        return back()->with('success', 'Transmission Successful! Pesan Anda telah dikirim.');
        
    } catch (\Exception $e) {
        return back()->with('success', 'Transmission Error: Gagal koneksi ke server email. Cek konfigurasi .env');
    }

})->name('contact.send');