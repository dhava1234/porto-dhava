@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- Header Section -->
    <section class="py-20 border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex justify-between items-center py-4 border-b border-gray-200 mb-12">
                <span class="text-sm font-medium"></span>
                <span class="text-lg font-bold tracking-wide">ABOUT</span>
                <span class="text-sm font-medium"></span>
            </div>

            <h1 class="text-6xl md:text-8xl font-black leading-tight tracking-tight">
                ABOUT<br>
                <span class="text-gray-400">ME.</span>
            </h1>
        </div>
    </section>

    <!-- Bio & Biodata Section -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16">

            <!-- Kiri: Foto / Placeholder -->
            <div class="relative">
                <div class="bg-gray-100 aspect-[4/5] rounded-3xl flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/profile/pasfoto.jpg') }}" class="w-full h-full object-cover"
                        alt="Profile Photo">
                </div>
            </div>

            <!-- Kanan: Biodata & Deskripsi -->
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">
                    Hi, I'm Muhammad Dhava Agsella. <br>
                    <span class="text-gray-500">Web Developer & Cybersecurity.</span>
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-10">
                    Saya adalah seorang pengembang web yang berfokus pada keamanan. Saya senang membangun aplikasi yang
                    tidak hanya terlihat bagus, tetapi juga aman, skalabel, dan mudah digunakan.
                </p>

                <!-- Tabel Biodata Sederhana -->
                <div class="space-y-4 border-t border-gray-200 pt-8 mb-10">
                    <div class="flex justify-between border-b border-gray-100 pb-4">
                        <span class="text-gray-500 font-medium">Nama Lengkap</span>
                        <span class="font-semibold text-right">Muhammad Dhava Agsella</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-100 pb-4">
                        <span class="text-gray-500 font-medium">Lokasi</span>
                        <span class="font-semibold text-right">Jakarta, Indonesia</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-100 pb-4">
                        <span class="text-gray-500 font-medium">Email</span>
                        <span class="font-semibold text-right">dhavaagsellaaaWgmail .com</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-100 pb-4">
                        <span class="text-gray-500 font-medium">Status</span>
                        <span class="inline-flex items-center gap-2 text-green-600 font-semibold">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span> Available for Work
                        </span>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('contact') }}"
                        class="bg-black text-white px-8 py-3 rounded-full font-semibold hover:bg-gray-800 transition">
                        Hubungi Saya
                    </a>
                    <a href="{{ route('download.cv') }}"
                        class="border border-gray-300 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition"
                        download>
                        <i class="fas fa-download mr-2"></i>Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-20 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-2xl font-bold mb-8">Tech Stack & Tools</h3>
            <div class="flex flex-wrap gap-3">
                @foreach($skills as $skill)
                    <span
                        class="bg-gray-100 text-gray-800 px-5 py-2.5 rounded-full text-sm font-semibold hover:bg-gray-200 transition cursor-default">
                        {{ $skill->name }}
                    </span>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Certification Section -->
    <section class="py-20 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex justify-between items-center py-4 border-b border-gray-200 mb-12">
                <span class="text-sm font-medium"></span>
                <span class="text-lg font-bold tracking-wide">CERTIFICATION</span>
                <span class="text-sm font-medium"></span>
            </div>

            <!-- Single Featured Certificate Card -->
            <div
                class="group bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300">
                <div class="grid md:grid-cols-5 gap-0">

                    <!-- Sisi Kiri: Foto Sertifikat -->
                    <div class="md:col-span-3 aspect-[16/9] md:aspect-auto overflow-hidden bg-gray-100">
                        <img src="{{ asset('images/certificates/sertifikat.jpg') }}" alt="Sertifikat Web Development"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>

                    <!-- Sisi Kanan: Detail Sertifikat -->
                    <div
                        class="md:col-span-2 p-8 md:p-10 flex flex-col justify-center bg-gradient-to-br from-gray-50 to-white">
                        <div
                            class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 w-fit">
                            <i class="fas fa-award"></i> Web Development
                        </div>

                        <!-- GANTI TEKS DI BAWAH INI SESUAI SERTIFIKAT KAMU -->
                        <h3 class="text-2xl md:text-3xl font-black text-gray-900 mb-3 leading-tight">
                            Menjadi Web Developer
                        </h3>

                        <p class="text-gray-600 mb-6 text-sm md:text-base">
                            Diterbitkan oleh <span class="font-semibold text-gray-900">PPKD Jakpus</span> <br>
                            pada <span class="font-semibold text-gray-900">Juli 2024</span>.
                        </p>

                        <!-- Tombol Download PDF -->
                        <!-- Tombol Download PDF (Pakai Route Laravel) -->
                        <a href="{{ route('download.sertifikat') }}"
                            class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full text-sm font-semibold transition-all mt-auto shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection