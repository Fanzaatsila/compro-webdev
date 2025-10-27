<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Renjana Cashew - Premium Cashew Products')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('assets/img/Renjana_Logo.png') }}" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CUSTOM CSS ===============-->
    <style>
        :root {
            --color-primary-gold: #BF902D;
            --color-primary-light-gold: #E9C66E;
            --color-secondary-dark-brown: #4A2F00;
            --color-secondary-gray-orange: #A38456;
            --color-light: #FFEC9D;
            --color-white: #FFFFFF;
            --color-black: #000000;
            --gradient-gold: linear-gradient(135deg, #BF902D 0%, #E9C66E 100%);
            --shadow-sm: 0 2px 4px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--color-secondary-dark-brown);
        }

        .bg-gradient-gold {
            background: var(--gradient-gold);
        }

        .text-primary-gold {
            color: var(--color-primary-gold);
        }

        .text-primary-light-gold {
            color: var(--color-primary-light-gold);
        }

        .text-secondary-dark-brown {
            color: var(--color-secondary-dark-brown);
        }

        .text-secondary-gray-orange {
            color: var(--color-secondary-gray-orange);
        }

        .bg-primary-gold {
            background-color: var(--color-primary-gold);
        }

        .bg-secondary-dark-brown {
            background-color: var(--color-secondary-dark-brown);
        }

        .bg-light {
            background-color: var(--color-light);
        }

        .hover-gold:hover {
            background-color: var(--color-primary-light-gold);
        }
    </style>
</head>

<body class="font-sans antialiased bg-white">
    <!--==================== NAVIGATION ====================-->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <img src="{{ asset('assets/img/Renjana_Logo.png') }}" alt="Renjana Cashew Logo" class="h-10 w-auto">
                        <span class="text-xl font-bold text-secondary-dark-brown">Renjana Cashew</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('home') ? 'text-primary-gold font-semibold' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('about') ? 'text-primary-gold font-semibold' : '' }}">
                        Tentang
                    </a>
                    <a href="{{ route('product') }}" class="text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('product') ? 'text-primary-gold font-semibold' : '' }}">
                        Produk
                    </a>
                    <a href="{{ route('event') }}" class="text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('event') ? 'text-primary-gold font-semibold' : '' }}">
                        Event
                    </a>
                    <a href="{{ route('shop') }}" class="text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('shop') ? 'text-primary-gold font-semibold' : '' }}">
                        Shop
                    </a>
                    <a href="{{ route('collaboration') }}" class="text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('collaboration') ? 'text-primary-gold font-semibold' : '' }}">
                        Kolaborasi
                    </a>
                    <a href="{{ route('carrier') }}" class="text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('carrier') ? 'text-primary-gold font-semibold' : '' }}">
                        Karir
                    </a>
                    <a href="{{ route('contact') }}" class="text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('contact') ? 'text-primary-gold font-semibold' : '' }}">
                        Kontak
                    </a>
                    <!-- <a href="{{ route('home') }}#faq" class="text-secondary-dark-brown hover:text-primary-gold transition-colors">
                        FAQ
                    </a> -->
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-secondary-dark-brown hover:text-primary-gold transition-colors" id="mobile-menu-button">
                        <i class="ri-menu-line text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('home') ? 'text-primary-gold font-semibold' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('about') ? 'text-primary-gold font-semibold' : '' }}">
                    Tentang
                </a>
                <a href="{{ route('product') }}" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('product') ? 'text-primary-gold font-semibold' : '' }}">
                    Produk
                </a>
                <a href="{{ route('event') }}" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors">
                    Event
                </a>
                <a href="{{ route('shop') }}" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('shop') ? 'text-primary-gold font-semibold' : '' }}">
                    Shop
                </a>
                <a href="{{ route('collaboration') }}" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('collaboration') ? 'text-primary-gold font-semibold' : '' }}">
                    Kolaborasi
                </a>
                <a href="{{ route('carrier') }}" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('carrier') ? 'text-primary-gold font-semibold' : '' }}">
                    Karir
                </a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors {{ request()->routeIs('contact') ? 'text-primary-gold font-semibold' : '' }}">
                    Kontak
                </a>
                <!-- <a href="{{ route('home') }}#faq" class="block px-3 py-2 text-secondary-dark-brown hover:text-primary-gold transition-colors">
                        FAQ
                    </a> -->
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="bg-secondary-dark-brown text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ asset('assets/img/Renjana_Logo.png') }}" alt="Renjana Cashew Logo" class="h-8 w-auto">
                        <span class="text-xl font-bold">Renjana Cashew</span>
                    </div>
                    <p class="text-gray-300 text-sm mb-4">
                        Menyajikan kacang mede premium berkualitas tinggi dengan cita rasa yang menawan dan bergizi.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/" class="text-gray-300 hover:text-primary-light-gold transition-colors">
                            <i class="ri-facebook-fill text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="text-gray-300 hover:text-primary-light-gold transition-colors">
                            <i class="ri-instagram-line text-xl"></i>
                        </a>
                        <a href="https://twitter.com/" class="text-gray-300 hover:text-primary-light-gold transition-colors">
                            <i class="ri-twitter-x-line text-xl"></i>
                        </a>
                        <a href="https://www.tiktok.com/" class="text-gray-300 hover:text-primary-light-gold transition-colors">
                            <i class="ri-tiktok-line text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-primary-light-gold transition-colors text-sm">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-primary-light-gold transition-colors text-sm">Tentang</a></li>
                        <li><a href="{{ route('product') }}" class="text-gray-300 hover:text-primary-light-gold transition-colors text-sm">Produk</a></li>
                        <li><a href="{{ route('collaboration') }}" class="text-gray-300 hover:text-primary-light-gold transition-colors text-sm">Kolaborasi</a></li>
                        <li><a href="{{ route('carrier') }}" class="text-gray-300 hover:text-primary-light-gold transition-colors text-sm">Karir</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center">
                            <i class="ri-phone-line mr-2"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-mail-line mr-2"></i>
                            <span>info@renjanacashew.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-map-pin-line mr-2 mt-1"></i>
                            <span>Pakuwon Mall Surabaya<br>Jl. Puncak Indah Lontar No. 2<br>Surabaya, Jawa Timur</span>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <!-- <div>
                    <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                    <p class="text-gray-300 text-sm mb-4">
                        Dapatkan info terbaru tentang produk dan promo kami.
                    </p>
                    <form class="space-y-2">
                        <input type="email" placeholder="Masukkan email Anda"
                            class="w-full px-3 py-2 bg-gray-700 text-white rounded-lg border border-gray-600 focus:border-primary-gold focus:outline-none text-sm">
                        <button type="submit" class="w-full bg-gradient-gold text-white py-2 rounded-lg hover:opacity-90 transition-opacity text-sm font-medium">
                            Subscribe
                        </button>
                    </form>
                </div> -->
            </div>

            <div class="border-t border-gray-700 mt-8 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300 text-sm">
                        © 2025 Renjana Cashew. All rights reserved.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-300 hover:text-primary-light-gold text-sm transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-300 hover:text-primary-light-gold text-sm transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-gradient-gold text-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 pointer-events-none">
        <i class="ri-arrow-up-line text-xl"></i>
    </button>

    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Back to top functionality
            const backToTop = document.getElementById('back-to-top');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTop.classList.remove('opacity-0', 'pointer-events-none');
                    backToTop.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    backToTop.classList.add('opacity-0', 'pointer-events-none');
                    backToTop.classList.remove('opacity-100', 'pointer-events-auto');
                }
            });

            backToTop.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Testimonial tabs functionality
            const testimonialTabs = document.querySelectorAll('.testimonial-tab');
            const testimonialContents = document.querySelectorAll('.testimonial-content');

            testimonialTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabType = this.getAttribute('data-tab');

                    // Remove active class from all tabs and contents
                    testimonialTabs.forEach(t => {
                        t.classList.remove('active', 'bg-gradient-gold', 'text-white');
                        t.classList.add('text-secondary-gray-orange');
                    });
                    testimonialContents.forEach(content => {
                        content.classList.remove('active');
                        content.classList.add('hidden');
                    });

                    // Add active class to clicked tab
                    this.classList.add('active', 'bg-gradient-gold', 'text-white');
                    this.classList.remove('text-secondary-gray-orange');

                    // Show corresponding content
                    const targetContent = document.getElementById(tabType + '-testimonials');
                    if (targetContent) {
                        targetContent.classList.add('active');
                        targetContent.classList.remove('hidden');
                    }
                });
            });

            // Set initial active state
            const firstTab = document.querySelector('.testimonial-tab[data-tab="customer"]');
            if (firstTab) {
                firstTab.classList.add('bg-gradient-gold', 'text-white');
                firstTab.classList.remove('text-secondary-gray-orange');
            }
        });
    </script>
</body>

</html>