<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 2. Simpan ke database (opsional, untuk backup)
        Message::create($validated);

        // 3. Kirim Email ke Kamu
        try {
            Mail::to('alamat_email_kamu@gmail.com')->send(new ContactMail($validated));
            
            return back()->with('success', 'Terima kasih! Pesan Anda berhasil dikirim ke email saya.');
        } catch (\Exception $e) {
            // Jika email gagal, tetap simpan di database tapi tampilkan error
            return back()->with('error', 'Pesan tersimpan, tapi gagal terkirim ke email: ' . $e->getMessage());
        }
    }
}