<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    private const RECIPIENT = 'krbai@event.pens.ac.id';

    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            Mail::raw(
                "Pesan dari: {$data['name']}\nEmail: {$data['email']}\n\nPesan:\n{$data['message']}",
                function ($msg) use ($data) {
                    $msg->to(self::RECIPIENT)
                        ->replyTo($data['email'], $data['name'])
                        ->subject('[WEBSITE INQUIRY] ' . $data['subject']);
                }
            );
        } catch (\Throwable $e) {
            Log::error('Contact form delivery failed', [
                'email' => $data['email'],
                'error' => $e->getMessage(),
            ]);

            return back()
                ->withInput($request->only('name', 'email', 'subject'))
                ->with('error', 'Pesan gagal dikirim. Silakan coba lagi atau hubungi kami lewat email.');
        }

        return back()->with('success', 'Pesan Anda telah terkirim. Kami akan membalas dalam 1x24 jam kerja.');
    }
}
