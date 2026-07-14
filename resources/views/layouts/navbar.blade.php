<nav class="fixed w-full bg-white/90 backdrop-blur-md border-b border-gray-200 z-50 py-4">
    <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-xl font-black tracking-wider hover:text-gray-600 transition">INDEX</a>
        <div class="flex gap-6 items-center">
            <a href="{{ route('about') }}" class="text-sm font-semibold hover:text-gray-600 transition hidden md:inline-block">ABOUT</a>
            <a href="{{ route('projects') }}" class="text-sm font-semibold hover:text-gray-600 transition hidden md:inline-block">PROJECTS</a>
            <a href="{{ route('download.cv') }}" class="text-sm font-semibold hover:text-gray-600 transition hidden md:inline-block">
                <i class="fas fa-download mr-1"></i>CV
            </a>
            <a href="{{ route('contact') }}" class="bg-black text-white px-6 py-2.5 rounded-full text-sm font-semibold hover:bg-gray-800 transition inline-flex items-center gap-2">
                LET'S TALK <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</nav>