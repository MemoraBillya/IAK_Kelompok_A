<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jejak.id Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1.5s ease-out forwards;
        }
    </style>
</head>
<body class="bg-[#ede7e3] text-[#141414] font-sans">
    <!-- Navbar -->
    <nav class="bg-[#ede7e3] p-5">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('build/assets/logo.svg') }}" alt="Jejak" class="w-24 h-24">
                <h1 class="text-2xl font-bold ml-1">JEJAK</h1>
            </div>
            <div>
                @if (Route::has('login'))
                    <nav class="flex justify-end">
                        @auth
                            <!-- Tombol Dashboard jika sudah login -->
                            <a href="{{ url('/dashboard') }}" class="text-xl font-semibold ml-5 bg-[#2ba79e] text-[#ede7e3] py-2 px-4 rounded-lg hover:bg-[#24987b] transition-colors">
                                Dashboard
                            </a>
                        @else
                            <!-- Tombol Login dan Register jika belum login -->
                            <a href="{{ route('login') }}" class="text-xl font-semibold ml-5 bg-[#2ba79e] text-[#ede7e3] py-2 px-4 rounded-lg hover:bg-[#24987b] transition-colors">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-xl font-semibold ml-5 bg-[#2ba79e] text-[#ede7e3] py-2 px-4 rounded-lg hover:bg-[#24987b] transition-colors">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-[#ede7e3]">
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('{{ asset('build/assets/hero.png') }}');"></div>
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between z-10 mt-[-250px]">
            <!-- Left Content -->
            <div class="md:w-1/2 p-2 animate-fade-in text-center md:text-left">
                <h2 class="text-5xl font-bold text-[#ede7e3] mb-5">JEJAK</h2>
                <h3 class="text-5xl font-bold text-[#ede7e3] mb-5">Jelajah Jendela Pariwisata Kita</h3>
                <p class="text-lg text-[#ede7e3] mb-6">Jelajahi data wisata terkini untuk mengetahui potensi pariwisata Indonesia</p>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-[#2ba79e] py-6">
        <div class="container mx-auto text-center">
            <p class="text-white">&copy; 2024 Jejak.id | All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
