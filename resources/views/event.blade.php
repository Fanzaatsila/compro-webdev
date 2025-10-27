@extends('layouts.app')

@section('title', 'Event & Promo - Renjana Cashew')

@section('content')
<!-- Banner Event -->
<section class="relative h-96 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <!-- Background Image -->
    @if($banners && $banners->banner_file)
    <img src="{{ asset('storage/' . $banners->banner_file) }}" alt="Event Banner" class="absolute inset-0 w-full h-full object-cover bg-opacity-50">
    @else
    <img src="{{ asset('assets/img/about_us/banner.jpg') }}" alt="Event Banner" class="absolute inset-0 w-full h-full object-cover bg-opacity-50">
    @endif
    </div>

    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Event & Promo</h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto mb-8">
            Jangan lewatkan event menarik dan promo spesial dari Renjana Cashew
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <button onclick="openEventBrochureModal()" class="bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                <i class="ri-file-pdf-line mr-2"></i>
                Download Brosur Event
            </button>
            <!-- <a href="#jadwal-event" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-secondary-dark-brown transition-colors">
                Lihat Jadwal Event
            </a> -->
        </div>
    </div>
</section>
<!-- Jadwal Event -->
<section id="jadwal-event" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Jadwal Event</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Event Berlangsung
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>
        <!-- Event yang Sedang Berlangsung -->
        <div class="mb-16">
            <h4 class="text-2xl font-bold text-secondary-dark-brown mb-8 text-center">Event yang Sedang Berlangsung</h4>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($activeEvents as $event)
                <!-- Event Berlangsung -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $event->placeholder) }}"
                            alt="{{ $event->title }}" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold animate-pulse">
                            LIVE NOW
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-75 text-white px-2 py-1 rounded text-xs">
                            <i class="ri-time-line mr-1"></i>
                            @php
                            $daysLeft = max(0, now()->diffInDays($event->end_date));
                            @endphp
                            {{ $daysLeft }} hari tersisa
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="text-xl font-bold text-secondary-dark-brown mb-3">{{ $event->title }}</h5>
                        <p class="text-secondary-gray-orange text-sm mb-4">
                            {{ Str::limit($event->description, 100) }}
                        </p>

                        <div class="space-y-2 text-sm text-secondary-gray-orange mb-4">
                            <div class="flex items-center">
                                <i class="ri-calendar-line text-primary-gold mr-2"></i>
                                <span>{{ $event->start_date->format('d M') }} - {{ $event->end_date->format('d M Y') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="ri-map-pin-line text-primary-gold mr-2"></i>
                                <span>{{ Str::contains($event->description, 'lokasi:') ? Str::of($event->description)->after('lokasi:')->before('.')->trim() : 'Jakarta' }}</span>
                            </div>
                        </div>

                        <!-- <button onclick="openEventModal('event{{ $event->id }}')" class="w-full bg-gradient-gold text-white py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                            <i class="ri-file-pdf-line mr-2"></i>
                            Lihat Detail
                        </button> -->
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center py-8">
                    <p class="text-secondary-gray-orange text-lg">Tidak ada event yang sedang berlangsung saat ini.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Jadwal Event -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Jadwal Event</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Event Akan Mendatang
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>
        <div class="space-y-8">
            @forelse($upcomingEvents as $event)
            <!-- Upcoming Event -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="md:flex">
                    <div class="md:w-1/3">
                        <img src="{{ asset('storage/' . $event->placeholder) }}"
                            alt="{{ $event->title }}" class="w-full h-48 md:h-full object-cover">
                    </div>
                    <div class="md:w-2/3 p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium mr-3">
                                Upcoming Event
                            </span>
                            <span class="text-sm text-secondary-gray-orange">
                                <i class="ri-map-pin-line mr-1"></i>
                                {{ Str::contains($event->description, 'lokasi:') ? Str::of($event->description)->after('lokasi:')->before('.')->trim() : 'Jakarta' }}
                            </span>
                        </div>

                        <h4 class="text-2xl font-bold text-secondary-dark-brown mb-3">{{ $event->title }}</h4>
                        <p class="text-secondary-gray-orange mb-6">
                            {{ Str::limit($event->description, 150) }}
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <div class="flex items-center text-secondary-gray-orange">
                                <i class="ri-calendar-line text-primary-gold mr-2"></i>
                                <span>{{ $event->start_date->format('d M') }} - {{ $event->end_date->format('d M Y') }}</span>
                            </div>
                            <div class="flex items-center text-secondary-gray-orange">
                                <i class="ri-time-line text-primary-gold mr-2"></i>
                                <span>{{ Str::contains($event->description, 'waktu:') ? Str::of($event->description)->after('waktu:')->before(';')->trim() : '10:00 - 22:00 WIB' }}</span>
                            </div>
                            <div class="flex items-center text-secondary-gray-orange">
                                <i class="ri-map-pin-line text-primary-gold mr-2"></i>
                                <span>{{ Str::contains($event->description, 'tempat:') ? Str::of($event->description)->after('tempat:')->before(';')->trim() : 'Jakarta' }}</span>
                            </div>
                        </div>

                        <!-- <div class="flex flex-col sm:flex-row gap-3">
                            <button class="bg-gradient-gold text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                                Daftar Sekarang
                            </button>
                            <button onclick="openEventModal('event{{ $event->id }}')" class="border-2 border-primary-gold text-primary-gold px-6 py-3 rounded-full font-semibold hover:bg-primary-gold hover:text-white transition-colors">
                                Detail Event
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Tidak ada event yang akan datang saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Promo Bulan Ini -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Promo Aktif</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Promo Bulan Ini
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($activePromos as $promo)
            <!-- Promo -->
            <div class="bg-light rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="relative">
                    <img src="{{ asset('storage/' . $promo->placeholder) }}"
                        alt="{{ $promo->title }}" class="w-full h-48 object-cover">
                    <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        AKTIF
                    </div>
                    @if(Str::contains(strtolower($promo->title), 'off') || Str::contains(strtolower($promo->description), 'diskon'))
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        {{ Str::contains(strtolower($promo->title), '%') ? Str::of($promo->title)->match('/\d+\%/')->first() : '10% OFF' }}
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">{{ $promo->title }}</h4>
                    <p class="text-secondary-gray-orange mb-4">
                        {{ Str::limit($promo->description, 100) }}
                    </p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-secondary-gray-orange">
                            <i class="ri-calendar-line mr-1"></i>
                            {{ $promo->start_date->format('d M') }} - {{ $promo->end_date->format('d M Y') }}
                        </span>
                        @if(Str::contains(strtolower($promo->description), 'min') || Str::contains(strtolower($promo->description), 'minimum'))
                        <span class="bg-primary-gold text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ Str::of($promo->description)->match('/Min\.?\s?Rp\.?\s?\d+[KMkm]/')->first() ?: 'Min. Pembelian' }}
                        </span>
                        @endif
                    </div>
                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-gray-orange">Sisa waktu:</span>
                            @php
                            $daysLeft = max(0, now()->diffInDays($promo->end_date));
                            @endphp
                            <span class="text-lg font-bold text-red-600">{{ $daysLeft }} hari</span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Tidak ada promo aktif saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Promo Akan Datang -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Promo Mendatang</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Promo yang Akan Datang
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($upcomingPromos as $promo)
            <!-- Promo -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="relative">
                    <img src="{{ asset('storage/' . $promo->placeholder) }}"
                        alt="{{ $promo->title }}" class="w-full h-48 object-cover">
                    <div class="absolute top-4 left-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        SEGERA HADIR
                    </div>
                    @if(Str::contains(strtolower($promo->title), 'off') || Str::contains(strtolower($promo->description), 'diskon'))
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        {{ Str::contains(strtolower($promo->title), '%') ? Str::of($promo->title)->match('/\d+\%/')->first() : '10% OFF' }}
                    </div>
                    @endif
                    <!-- <div class="absolute bottom-4 right-4 bg-black bg-opacity-75 text-white px-2 py-1 rounded text-xs">
                        <i class="ri-time-line mr-1"></i>
                        @php
                        $daysToStart = max(0, now()->diffInDays($promo->start_date));
                        @endphp
                        {{ $daysToStart }} hari lagi
                    </div> -->
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">{{ $promo->title }}</h4>
                    <p class="text-secondary-gray-orange mb-4">
                        {{ Str::limit($promo->description, 100) }}
                    </p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-secondary-gray-orange">
                            <i class="ri-calendar-line mr-1"></i>Mulai: {{ $promo->start_date->format('d M Y') }}
                        </span>
                        @if(Str::contains(strtolower($promo->description), 'min') || Str::contains(strtolower($promo->description), 'minimum'))
                        <span class="bg-primary-gold text-white px-3 py-1 rounded-full text-sm font-medium">
                            Min. {{ Str::of($promo->description)->match('/min[.\s]*[\w\s\d]+/i')->first() ?? 'Pembelian' }}
                        </span>
                        @endif
                    </div>
                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-secondary-gray-orange">
                                <i class="ri-alarm-line mr-1"></i>Berlaku: {{ $promo->start_date->format('d M') }} - {{ $promo->end_date->format('d M Y') }}
                            </span>
                            <span class="text-xs text-secondary-gray-orange">
                                <i class="ri-store-2-line mr-1"></i>{{ Str::contains($promo->description, 'lokasi:') ? Str::of($promo->description)->after('lokasi:')->before('.')->trim() : 'Semua Outlet' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Tidak ada promo mendatang saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Partner & Kolaborasi Logo Section dengan Animasi -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Partner Event</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Brand yang Sudah Berkolaborasi
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Bergabunglah dengan jaringan partner terpercaya yang telah mengadakan event bersama Renjana Cashew
            </p>
        </div>

        <!-- Animated Logo Slider -->
        <div class="relative overflow-hidden bg-white rounded-2xl shadow-lg py-8">
            <!-- Gradient overlay untuk smooth edge effect -->
            <div class="absolute left-0 top-0 bottom-0 w-16 bg-gradient-to-r from-white to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-white to-transparent z-10"></div>

            <!-- Animasi Logo Berjalan -->
            <div class="flex items-center justify-start animate-scroll-left">
                <!-- Logo Set 1 -->
                <div class="flex items-center space-x-12 min-w-max">
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/123BAZAR.jpeg') }}"
                            alt="PT Pusri Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/EASTFOOD.png') }}"
                            alt="BPP Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/ehub-cover.png') }}"
                            alt="Edcco Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/FurtastiC.png') }}"
                            alt="Geo Gea Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/IBSE.jpeg') }}"
                            alt="Jembatan Muara Bara Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/IFBC.png') }}"
                            alt="Mineral Trobos Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/INABUYER.png') }}"
                            alt="Mineral Trobos Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/JAPKOR.jpeg') }}"
                            alt="Mineral Trobos Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/STARKGARAGE.png') }}"
                            alt="Mineral Trobos Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>

                    <!-- Duplikat Logo untuk Seamless Loop -->
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/123BAZAR.jpeg') }}"
                            alt="PT Pusri Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/EASTFOOD.png') }}"
                            alt="BPP Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/ehub-cover.png') }}"
                            alt="Edcco Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                    <div class="flex items-center justify-center w-32 h-20">
                        <img src="{{ asset('assets/img/logo_collab/FurtastiC.png') }}"
                            alt="Geo Gea Logo"
                            class="max-h-16 max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<!-- <section class="py-20 bg-secondary-dark-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Jangan Lewatkan Event & Promo Terbaru!
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Daftarkan email Anda untuk mendapatkan notifikasi event dan promo eksklusif dari Renjana Cashew.
        </p>

        <form class="max-w-md mx-auto">
            <div class="flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="Masukkan email Anda"
                    class="flex-1 px-6 py-4 rounded-full bg-white text-secondary-dark-brown focus:outline-none focus:ring-2 focus:ring-primary-gold">
                <button type="submit" class="bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                    Subscribe
                </button>
            </div>
        </form>

        <p class="text-sm text-gray-400 mt-4">
            * Kami menghargai privasi Anda dan tidak akan spam email Anda
        </p>
    </div>
</section> -->

<!-- Modal untuk Event Brochure PDF -->
<div id="eventBrochureModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl max-w-4xl w-full mx-4 max-h-[90vh] overflow-hidden">
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-secondary-dark-brown">Brosur Event & Promo Renjana Cashew</h3>
            <button onclick="closeEventBrochureModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>

        <div class="p-6">
            <div class="h-[70vh]">
                <iframe id="brochurePdfViewer"
                    src="{{ asset('assets/event.pdf') }}"
                    class="w-full h-full border-0 rounded-lg"
                    title="Event Brochure PDF">
                </iframe>
            </div>
        </div>

        <div class="flex justify-end gap-4 p-6 border-t border-gray-200">
            <button onclick="downloadEventBrochure()" class="bg-gradient-gold text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                <i class="ri-download-line mr-2"></i>
                Download Brosur
            </button>
            <button onclick="closeEventBrochureModal()" class="border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                Tutup
            </button>
        </div>
    </div>
</div>

<style>
    /* Animasi Logo Berjalan ke Kiri */
    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-scroll-left {
        animation: scroll-left 20s linear infinite;
    }

    /* Pause animasi saat hover untuk UX yang lebih baik */
    .animate-scroll-left:hover {
        animation-play-state: paused;
    }

    /* Smooth scroll untuk anchor link */
    html {
        scroll-behavior: smooth;
    }

    /* Responsive adjustments untuk animasi */
    @media (max-width: 768px) {
        .animate-scroll-left {
            animation-duration: 15s;
        }
    }
</style>

<script>
    // Modal Functions untuk Event Brochure
    function openEventBrochureModal() {
        const modal = document.getElementById('eventBrochureModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeEventBrochureModal() {
        const modal = document.getElementById('eventBrochureModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    function downloadEventBrochure() {
        const link = document.createElement('a');
        link.href = '{{ asset("assets/pdf/renjana-event-brochure.pdf") }}';
        link.download = 'renjana-event-brochure.pdf';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    // Close modal ketika click outside
    document.getElementById('eventBrochureModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeEventBrochureModal();
        }
    });

    // Close modal dengan ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeEventBrochureModal();
        }
    });

    // Smooth scroll untuk anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endsection