<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // 1. Validasi data
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // 2. Kirim Email ke Admin (Emosver Team)
        // Pastikan kamu sudah setting .env
        Mail::send([], [], function ($message) use ($data) {
            $message->to('emosver.team@google.com') // Alamat tujuan
                    ->subject('Pesan Baru: ' . $data['subject']) // Judul Email
                    ->from(env('MAIL_FROM_ADDRESS'), $data['name']) // Pengirim
                    ->html("
                        <h3>Pesan Baru dari Website EMOSVER</h3>
                        <p><strong>Nama:</strong> {$data['name']}</p>
                        <p><strong>Email:</strong> {$data['email']}</p>
                        <p><strong>Perihal:</strong> {$data['subject']}</p>
                        <hr>
                        <p><strong>Pesan:</strong><br>{$data['message']}</p>
                    ");
        });

        // 3. Kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Transmission Sent Successfully!');
    }
}