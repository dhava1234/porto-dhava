<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

// Halaman Utama & Portfolio
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Route POST untuk memproses form contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route Download CV
Route::get('/download-cv', function () {
    $cvPath = public_path('cv/cv-dhava.pdf');
    
    if (file_exists($cvPath)) {
        return response()->download($cvPath, 'CV-Muhammad-Dhava-Agsella.pdf');
    }
    
    abort(404, 'File CV tidak ditemukan.');
})->name('download.cv');

Route::get('/download-sertifikat', function () {
    $filePath = public_path('images/certificates/sertifikat.pdf');
    
    if (file_exists($filePath)) {
        return response()->download($filePath, 'Sertifikat-Web-Development-Dhava.pdf');
    }
    
    abort(404, 'File sertifikat tidak ditemukan.');
})->name('download.sertifikat');