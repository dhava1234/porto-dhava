@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-6">
            <h1 class="text-7xl md:text-8xl font-black leading-tight tracking-tight">
                WEB DEVELOPER<br>
                <span class="text-gray-400">& CYBERSECURITY</span>
            </h1>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="py-12 border-t border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-6">
            <div
                class="inline-flex items-center gap-2 bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                <span class="w-2 h-2 bg-green-600 rounded-full"></span>
                Available for Work
            </div>

            <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-12 max-w-3xl">
                Membangun Website Modern & Aman<br>
                dengan Fokus pada Keamanan<br>
                dan Pengalaman Pengguna.
            </h2>

            <div class="flex justify-between items-center py-4 border-t border-gray-200">
                <span class="text-sm font-medium"></span>
                <span class="text-lg font-bold tracking-wide">MY PROJECTS</span>
                <span class="text-sm font-medium"></span>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-6 space-y-32">
            @foreach($projects as $project)
                <article class="group">
                    <!-- Project Images -->
                    <!-- Project Images (2 Foto) -->
                    <div class="grid md:grid-cols-2 gap-4 mb-8">
                        @if($project->image)
                            <div class="rounded-2xl overflow-hidden shadow-lg group">
                                <img src="{{ asset('images/projects/' . $project->image) }}" alt="{{ $project->title }}"
                                    class="w-full h-96 object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        @endif

                        @if($project->image_2)
                            <div class="rounded-2xl overflow-hidden shadow-lg group">
                                <img src="{{ asset('images/projects/' . $project->image_2) }}" alt="{{ $project->title }}"
                                    class="w-full h-96 object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        @endif
                    </div>

                    <!-- Project Content -->
                    <div class="max-w-3xl">
                        <h3 class="text-5xl font-black mb-6 tracking-tight">{{ $project->title }}</h3>

                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach($project->tech_stack as $tech)
                                <span class="bg-gray-100 text-gray-800 px-4 py-2 rounded-full text-sm font-semibold">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>

                        <!-- Description -->
                        <p class="text-lg text-gray-600 leading-relaxed">
                            {{ $project->description }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex justify-between items-center py-4 border-b border-gray-200 mb-12">
                <span class="text-sm font-medium"></span>
                <div>
                    <span class="text-lg font-bold tracking-wide">ABOUT</span>
                    <span class="ml-4 text-gray-500">[ LEARN MORE ]</span>
                </div>
                <span class="text-sm font-medium"></span>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-start">
                <!-- Profile Image Placeholder -->
                <!-- Profile Image -->
                <div class="relative">
                    <div class="bg-gray-100 aspect-[4/5] rounded-3xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/profile/pasfoto.jpg') }}" class="w-full h-full object-cover"
                            alt="Profile Photo">
                    </div>
                </div>

                <!-- About Text -->
                <div class="pt-12">
                    <h2 class="text-4xl font-bold leading-tight mb-8">
                        I'm Muhammad Dhava Agsella, <span class="text-gray-400">Web Developer & Cybersecurity Expert</span>
                        with <span class="text-gray-400"></span> of dedicated technical exploration and project-based
                        experience.
                    </h2>

                    <div class="mb-8">
                        <p class="font-semibold mb-4">Area Expertise:</p>
                        <div class="flex flex-wrap gap-3">
                            @foreach($skills->take(6) as $skill)
                                <span class="bg-gray-100 px-5 py-2.5 rounded-full text-sm font-semibold">
                                    {{ $skill->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ route('about') }}"
                        class="inline-block border-2 border-black px-8 py-3 rounded-full font-semibold hover:bg-black hover:text-white transition">
                        LEARN MORE
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Let's Talk CTA Section -->
    <section class="py-32 bg-black text-white relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold mb-8">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                Available for new projects
            </div>

            <h2 class="text-6xl md:text-8xl font-black leading-tight tracking-tight mb-8">
                LET'S<br>
                <span class="text-gray-500">TALK.</span>
            </h2>

            <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-12 leading-relaxed">
                Punya ide project? Butuh konsultasi keamanan? Atau sekadar ingin ngobrol soal web development? Saya selalu
                terbuka untuk diskusi.
            </p>

            <div class="flex gap-4 justify-center flex-wrap">
                <a href="{{ route('contact') }}"
                    class="bg-white text-black px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-200 transition inline-flex items-center gap-3">
                    Mulai Percakapan <i class="fas fa-arrow-right"></i>
                </a>
                <a href="mailto:dhavaagsellaaa@gmail.com"
                    class="border-2 border-white/30 text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition inline-flex items-center gap-3">
                    <i class="fas fa-envelope"></i> Email Langsung
                </a>
            </div>

            <!-- Social Links -->
            <div class="mt-16 pt-12 border-t border-white/10">
                <p class="text-sm text-gray-500 mb-6">Atau temui saya di</p>
                <div class="flex gap-4 justify-center flex-wrap">
                    <a href="https://github.com/dhava1234"
                        class="bg-white/10 hover:bg-white/20 px-6 py-3 rounded-full text-sm font-semibold transition">
                        <i class="fab fa-github mr-2"></i>GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/muhammaddhavaagsella/"
                        class="bg-white/10 hover:bg-white/20 px-6 py-3 rounded-full text-sm font-semibold transition">
                        <i class="fab fa-linkedin mr-2"></i>LinkedIn
                    </a>
                    <a href="https://www.instagram.com/dappaagsella/"
                        class="bg-white/10 hover:bg-white/20 px-6 py-3 rounded-full text-sm font-semibold transition">
                        <i class="fab fa-instagram mr-2"></i>Instagram
                    </a>
                </div>
            </div>
        </div>

        <!-- Background Decoration -->
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-10 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-gray-500 rounded-full blur-3xl"></div>
        </div>
    </section>
@endsection