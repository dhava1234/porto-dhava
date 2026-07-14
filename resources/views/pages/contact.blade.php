@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Header -->
<section class="py-20 border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex justify-between items-center py-4 border-b border-gray-200 mb-12">
            <span class="text-sm font-medium"></span>
            <span class="text-lg font-bold tracking-wide">CONTACT</span>
            <span class="text-sm font-medium"></span>
        </div>
        
        <h1 class="text-6xl md:text-8xl font-black leading-tight tracking-tight">
            LET'S<br>
            <span class="text-gray-400">TALK.</span>
        </h1>
    </div>
</section>

<!-- Contact Content -->
<section class="py-20">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16">
        
        <!-- Kiri: Info -->
        <div>
            <h2 class="text-3xl font-bold mb-6">Mari berdiskusi tentang project kamu.</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-10">
                Saya selalu terbuka untuk peluang baru, kolaborasi menarik, atau sekadar berbagi ide. Kirim pesan dan saya akan merespon secepatnya.
            </p>
            
            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Email</p>
                        <a href="mailto:hello@ahmadalwi.com" class="text-lg font-semibold hover:text-gray-600 transition">dhavaagsellaaa@gmail.com</a>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center text-white flex-shrink-0">
                        <i class="fab fa-telegram"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Telegram</p>
                        <a href="https://t.me/dhavaagsella" class="text-lg font-semibold hover:text-gray-600 transition">dhavaagsella</a>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center text-white flex-shrink-0">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Lokasi</p>
                        <p class="text-lg font-semibold">Jakarta, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Kanan: Form -->
        <!-- Kanan: Form -->
<div class="bg-gray-50 rounded-3xl p-8 md:p-12">
    <h3 class="text-2xl font-bold mb-6">Kirim Pesan</h3>
    
    <!-- Tampilkan Pesan Sukses -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-3">
            <i class="fas fa-check-circle"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Form Action diarahkan ke route contact.store -->
    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
        @csrf
        
        <div>
            <label class="block text-sm font-semibold mb-2">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="w-full px-5 py-3 bg-white border border-gray-200 rounded-full focus:outline-none focus:border-black transition @error('name') border-red-500 @enderror">
            @error('name') <p class="text-red-500 text-xs mt-1 ml-4">{{ $message }}</p> @enderror
        </div>
        
        <div>
            <label class="block text-sm font-semibold mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required
                class="w-full px-5 py-3 bg-white border border-gray-200 rounded-full focus:outline-none focus:border-black transition @error('email') border-red-500 @enderror">
            @error('email') <p class="text-red-500 text-xs mt-1 ml-4">{{ $message }}</p> @enderror
        </div>
        
        <div>
            <label class="block text-sm font-semibold mb-2">Subjek</label>
            <input type="text" name="subject" value="{{ old('subject') }}" required
                class="w-full px-5 py-3 bg-white border border-gray-200 rounded-full focus:outline-none focus:border-black transition @error('subject') border-red-500 @enderror">
            @error('subject') <p class="text-red-500 text-xs mt-1 ml-4">{{ $message }}</p> @enderror
        </div>
        
        <div>
            <label class="block text-sm font-semibold mb-2">Pesan</label>
            <textarea name="message" rows="5" required
                class="w-full px-5 py-3 bg-white border border-gray-200 rounded-2xl focus:outline-none focus:border-black transition resize-none @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
            @error('message') <p class="text-red-500 text-xs mt-1 ml-4">{{ $message }}</p> @enderror
        </div>
        
        <button type="submit" class="w-full bg-black text-white py-4 rounded-full font-bold hover:bg-gray-800 transition inline-flex items-center justify-center gap-2">
            Kirim Pesan <i class="fas fa-paper-plane"></i>
        </button>
    </form>
</div>
    </div>
</section>
@endsection