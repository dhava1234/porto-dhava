<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio') - Muhammad Dhava Agsella</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    @if(file_exists(public_path('favicon.ico')))
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @else
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @endif
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .gradient-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
        .gradient-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
    </style>
</head>
<body class="bg-white text-gray-900">

    <!-- Navbar -->
    <nav class="fixed w-full bg-white border-b border-gray-200 z-50 py-4">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-black tracking-wider">INDEX</a>
            <div class="flex gap-6 items-center">
                <a href="{{ route('about') }}" class="text-sm font-semibold hover:text-gray-600 transition">ABOUT</a>
                <a href="{{ route('contact') }}" class="bg-black text-white px-6 py-2.5 rounded-full text-sm font-semibold hover:bg-gray-800 transition">
                    LET'S TALK <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200 mt-20 py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <div>
                    <h2 class="text-7xl font-black mb-6 tracking-tighter">MY CONTACT</h2>
                    <div class="flex gap-3 flex-wrap">
                        <a href="https://www.instagram.com/dappaagsella/" class="bg-black text-white px-5 py-2.5 rounded-full text-xs font-bold hover:bg-gray-800 transition">INSTAGRAM</a>
                        <a href="https://www.linkedin.com/in/muhammaddhavaagsella/" class="bg-black text-white px-5 py-2.5 rounded-full text-xs font-bold hover:bg-gray-800 transition">LINKEDIN</a>
                        <a href="https://github.com/dhava1234" class="bg-black text-white px-5 py-2.5 rounded-full text-xs font-bold hover:bg-gray-800 transition">GITHUB</a>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-xl overflow-hidden">
                    <a href="https://web.telegram.org/a/" class="block px-6 py-4 border-b border-gray-300 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="text-lg font-semibold">Telegram</span>
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                    <a href="https://mail.google.com/mail/u/0/#inbox" class="block px-6 py-4 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="text-lg font-semibold">Email</span>
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            <div class="text-right text-gray-500 text-sm">
                <p>© 2026 Muhammad Dhava Agsella. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>