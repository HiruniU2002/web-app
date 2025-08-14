<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Navbar -->
        <nav class="sticky top-0 shadow-sm bg-pink-200 z-50">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    
                    <!-- Logo/Brand -->
                    <a href="/" class="flex items-center">
                        <img 
                            src="{{ asset('frontend/images/Cake-Logo.png') }}" 
                            alt="Logo" 
                            width="50" 
                            height="50" 
                            class="rounded-full mr-2"
                        >
                        <span class="text-2xl font-bold text-gray-900 font-pacifico">Cakes by Hiru</span>
                    </a>

                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button" class="text-gray-900 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false" onclick="toggleMobileMenu()">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-1">
                        <ul class="flex items-center space-x-2">
                            <li>
                                <a href="/" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->is('/') ? 'font-bold text-red-600' : 'text-gray-900' }}">Home</a>
                            </li>
                            <li>
                                <a href="/product" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->is('product') ? 'font-bold text-red-600' : 'text-gray-900' }}">Our Products</a>
                            </li>
                            <li>
                                <a href="/about" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->is('about') ? 'font-bold text-red-600' : 'text-gray-900' }}">About Us</a>
                            </li>
                            <li>
                                <a href="/contact" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->is('contact') ? 'font-bold text-red-600' : 'text-gray-900' }}">Contact</a>
                            </li>
                           
                        </ul>

                        
                    </div>
                </div>
            </div>

            <!-- Mobile Menu (hidden by default) -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="/" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('/') ? 'font-bold text-red-600' : 'text-gray-900' }}">Home</a>
                    <a href="/product" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('product') ? 'font-bold text-red-600' : 'text-gray-900' }}">Our Products</a>
                    <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('about') ? 'font-bold text-red-600' : 'text-gray-900' }}">About Us</a>
                    <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->is('contact') ? 'font-bold text-red-600' : 'text-gray-900' }}">Contact</a>
                    <a href="/cart" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900">Cart</a>
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <a href="/login" class="block w-full px-4 py-2 text-center border border-gray-900 rounded-md text-base font-medium text-gray-900 mb-2">Login</a>
                        <a href="/register" class="block w-full px-4 py-2 text-center rounded-md text-base font-medium text-white bg-red-600">Register</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <style>
            .font-pacifico {
                font-family: 'Pacifico', cursive;
            }
        </style>

        <script>
            function toggleMobileMenu() {
                const menu = document.getElementById('mobile-menu');
                const button = document.querySelector('[aria-controls="mobile-menu"]');
                const expanded = button.getAttribute('aria-expanded') === 'true';
                
                button.setAttribute('aria-expanded', !expanded);
                menu.classList.toggle('hidden');
            }
        </script>
    </body>
</html>