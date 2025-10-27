@extends('layouts.app')

@section('title', 'Home - Renjana Cashew')

@section('content')

<!-- Hero Banner with Video or Image -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Banner Background -->
    <div class="absolute inset-0 w-full h-full">
        @if($banners && $banners->banner_file)
        @if($banners->is_video)
        <video class="w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="{{ asset('storage/' . $banners->banner_file) }}" type="video/mp4">
            <!-- Fallback for browsers that don't support video -->
            <img src="{{ asset('assets/img/home/fallback-banner.jpg') }}" alt="Renjana Cashew Banner" class="w-full h-full object-cover">
        </video>
        @else
        <img src="{{ asset('storage/' . $banners->banner_file) }}" alt="Renjana Cashew Banner" class="w-full h-full object-cover">
        @endif
        @else
        <!-- Default background if no banner is available -->
        <img src="{{ asset('assets/img/home/default-banner.jpg') }}" alt="Default Banner" class="w-full h-full object-cover">
        @endif
        <!-- Dark overlay for better text readability -->
        <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>
    </div>

    <div class="relative z-20 text-center text-white px-4">
        <h1 class="text-5xl md:text-7xl font-bold mb-6">Renjana Cashew</h1>
        <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">
            Kacang Mede Premium dengan Cita Rasa Menawan dan Berkualitas Tinggi
        </p>
        <div class="space-x-4">
            <a href="{{ route('product') }}" class="inline-block bg-white text-secondary-dark-brown px-8 py-4 rounded-full font-semibold hover:bg-light transition-colors">
                Jelajahi Produk
            </a>
            <a href="{{ route('about') }}" class="inline-block border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-secondary-dark-brown transition-colors">
                Tentang Kami
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce z-20">
        <i class="ri-arrow-down-line text-2xl"></i>
    </div>
</section>

<!-- Advertisement Modal will be at the bottom of the page -->
<!-- Hidden element to store ad state for JavaScript -->
<div id="adDataElement" data-has-ad="{{ isset($latestAd) && $latestAd ? 'true' : 'false' }}" class="hidden"></div>

<!-- Renjana Story (brand meaning & filosofi) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Renjana Story</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Filosofi & Makna Renjana
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="prose prose-lg text-secondary-gray-orange">
                    <p class="text-xl leading-relaxed mb-6">
                        We use <strong class="text-primary-gold">"Renjana"</strong> as our brand name, Renjana(/ren·ja·na/n) = rasa hati yang kuat (rindu, cinta kasih, berahi , dan sebagainya) = a strong affection (refers to longing, love, or lust); passion.
                    </p>
                    <p class="text-lg leading-relaxed mb-6">
                        Renjana describes the passion of our local farmers to grow the cashew carefully to be loved and attract the international market's heart.
                    </p>
                    <div class="mt-8">
                        <a href="{{ route('about') }}" class="inline-flex items-center px-6 py-3 bg-gradient-gold text-white font-semibold rounded-full hover:opacity-90 transition-opacity">
                            Selengkapnya
                            <i class="ri-arrow-right-line ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/img/renjana-story.jpg') }}"
                        alt="Renjana Story" class="w-full h-96 object-cover">
                </div>
                <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-primary-gold rounded-full flex items-center justify-center">
                    <i class="ri-heart-3-fill text-3xl text-white"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us / Keunggulan -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Keunggulan</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Mengapa Memilih Renjana?
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mb-6">
                    <i class="ri-map-pin-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Sourced from the finest</h4>
                <p class="text-secondary-gray-orange">
                    whole cashew nuts in Kendari, Sulawesi dengan kualitas terbaik dan seleksi ketat
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mb-6">
                    <i class="ri-fire-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">We Bake, Not Fried</h4>
                <p class="text-secondary-gray-orange">
                    Proses pemanggangan untuk hasil yang lebih sehat dan renyah tanpa minyak berlebih
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mb-6">
                    <i class="ri-palette-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Various Unique Flavors</h4>
                <p class="text-secondary-gray-orange">
                    Berbagai varian rasa unik dan inovatif yang tidak akan Anda temukan di tempat lain
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mb-6">
                    <i class="ri-heart-3-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Made with Love</h4>
                <p class="text-secondary-gray-orange">
                    All homemade with love and care, diproduksi dengan penuh perhatian dan kasih sayang
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mb-6">
                    <i class="ri-time-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Long Shelf Life</h4>
                <p class="text-secondary-gray-orange">
                    Daya tahan yang lama dengan kemasan berkualitas untuk menjaga kesegaran produk
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3 Produk Unggulan -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Produk Unggulan</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Produk Terbaik Kami
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @forelse($featuredProducts as $product)
            <!-- Product Card -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow group">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->product_name }}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    @if($product->category)
                    <div class="absolute top-4 left-4 bg-primary-gold text-white px-3 py-1 rounded-full text-sm font-medium">
                        {{ ucfirst(str_replace('-', ' ', $product->category)) }}
                    </div>
                    @endif
                    <div class="absolute top-4 right-4 bg-white text-secondary-dark-brown px-3 py-1 rounded-full text-sm font-medium">
                        {{ ucfirst($product->type) }}
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-secondary-dark-brown mb-2">{{ $product->product_name }}</h4>
                    <p class="text-secondary-gray-orange mb-4 line-clamp-2">
                        {{ $product->description }}
                    </p>
                    <div class="flex justify-end items-center">
                        <a href="{{ route('product') }}" class="bg-gradient-gold text-white px-4 py-2 rounded-full hover:opacity-90 transition-opacity">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Belum ada produk unggulan yang tersedia.</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('product') }}" class="inline-flex items-center px-8 py-4 bg-gradient-gold text-white font-semibold rounded-full hover:opacity-90 transition-opacity">
                Lihat Semua Produk
                <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Promo & Event Bulan Ini -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Promo & Event</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Promo & Event Bulan Ini
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Promo Card -->
            @if($activePromo)
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                        <i class="ri-percent-line text-xl text-green-600"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-secondary-dark-brown">{{ $activePromo->title }}</h4>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-medium">Aktif</span>
                    </div>
                </div>
                <p class="text-secondary-gray-orange mb-4">
                    {{ Str::limit($activePromo->description, 100) }}
                </p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-secondary-gray-orange">
                        Valid: {{ $activePromo->start_date->format('d M') }}-{{ $activePromo->end_date->format('d M Y') }}
                    </span>
                    <a href="{{ route('event') }}" class="text-primary-gold font-semibold hover:text-primary-light-gold">
                        Selengkapnya →
                    </a>
                </div>
            </div>
            @else
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                        <i class="ri-percent-line text-xl text-green-600"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-secondary-dark-brown">Promo September Ceria</h4>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-medium">Aktif</span>
                    </div>
                </div>
                <p class="text-secondary-gray-orange mb-4">
                    Dapatkan diskon hingga 25% untuk pembelian paket hampers spesial Renjana.
                </p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-secondary-gray-orange">Valid: 1-30 September 2025</span>
                    <a href="{{ route('event') }}" class="text-primary-gold font-semibold hover:text-primary-light-gold">
                        Selengkapnya →
                    </a>
                </div>
            </div>
            @endif

            <!-- Event Card -->
            @if($upcomingEvent)
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <i class="ri-calendar-event-line text-xl text-blue-600"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-secondary-dark-brown">{{ $upcomingEvent->title }}</h4>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-sm font-medium">Akan Datang</span>
                    </div>
                </div>
                <p class="text-secondary-gray-orange mb-4">
                    {{ Str::limit($upcomingEvent->description, 100) }}
                </p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-secondary-gray-orange">
                        {{ $upcomingEvent->start_date->format('d') }}-{{ $upcomingEvent->end_date->format('d M Y') }}
                    </span>
                    <a href="{{ route('event') }}" class="text-primary-gold font-semibold hover:text-primary-light-gold">
                        Selengkapnya →
                    </a>
                </div>
            </div>
            @else
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <i class="ri-calendar-event-line text-xl text-blue-600"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-secondary-dark-brown">Festival Kuliner Nusantara</h4>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-sm font-medium">Akan Datang</span>
                    </div>
                </div>
                <p class="text-secondary-gray-orange mb-4">
                    Kunjungi booth Renjana di Festival Kuliner Nusantara, Surabaya.
                </p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-secondary-gray-orange">15-17 Oktober 2025</span>
                    <a href="{{ route('event') }}" class="text-primary-gold font-semibold hover:text-primary-light-gold">
                        Selengkapnya →
                    </a>
                </div>
            </div>
            @endif
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('event') }}" class="inline-flex items-center px-8 py-4 bg-gradient-gold text-white font-semibold rounded-full hover:opacity-90 transition-opacity">
                Lihat Selengkapnya
                <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Testimoni (pelanggan & kolaborasi) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Testimoni</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Apa Kata Mereka?
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Dengarkan pengalaman nyata pelanggan yang telah merasakan kelezatan produk Renjana Cashew
            </p>
        </div>

        <!-- Testimonial Slider Container -->
        <div class="relative">
            <!-- Navigation Buttons -->
            <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white shadow-lg rounded-full p-3 hover:bg-light transition-colors z-10">
                <i class="ri-arrow-left-line text-2xl text-primary-gold"></i>
            </button>
            <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white shadow-lg rounded-full p-3 hover:bg-light transition-colors z-10">
                <i class="ri-arrow-right-line text-2xl text-primary-gold"></i>
            </button>

            <!-- Testimonials Slider -->
            <div class="overflow-hidden">
                <div id="testimonialSlider" class="flex transition-transform duration-500 ease-in-out">
                    @forelse ($testimonials as $testimonial)
                    <!-- Testimonial Card -->
                    <div class="min-w-full md:min-w-1/3 px-4 testimonial-slide">
                        <div class="bg-light rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow mx-auto max-w-md">
                            <!-- Quote Icon -->
                            <div class="text-center mb-6">
                                <i class="ri-double-quotes-l text-4xl text-primary-gold"></i>
                            </div>
                            
                            <!-- Testimonial Content -->
                            <div class="text-center mb-6">
                                <p class="text-secondary-gray-orange text-lg leading-relaxed italic mb-4">
                                    "{{ $testimonial->content ?? 'Produk kacang mede Renjana benar-benar luar biasa! Rasanya unik dan kualitasnya premium. Sudah jadi camilan favorit keluarga kami.' }}"
                                </p>
                                
                                <!-- Rating Stars -->
                                <div class="flex justify-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Customer Info -->
                            <div class="text-center border-t border-gray-200 pt-6">
                                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="ri-user-3-line text-2xl text-white"></i>
                                </div>
                                <h4 class="text-xl font-bold text-secondary-dark-brown mb-1">
                                    {{ $testimonial->customer_name ?? 'Ibu Sarah' }}
                                </h4>
                                <p class="text-sm text-secondary-gray-orange">
                                    {{ $testimonial->customer_location ?? 'Jakarta, Indonesia' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <!-- Default Testimonials when no data available -->
                    <div class="min-w-full md:min-w-1/3 px-4 testimonial-slide">
                        <div class="bg-light rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow mx-auto max-w-md">
                            <div class="text-center mb-6">
                                <i class="ri-double-quotes-l text-4xl text-primary-gold"></i>
                            </div>
                            <div class="text-center mb-6">
                                <p class="text-secondary-gray-orange text-lg leading-relaxed italic mb-4">
                                    "Kacang mede Renjana benar-benar premium! Rasanya unik dan teksturnya sangat renyah. Sudah jadi camilan favorit keluarga."
                                </p>
                                <div class="flex justify-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border-t border-gray-200 pt-6">
                                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="ri-user-3-line text-2xl text-white"></i>
                                </div>
                                <h4 class="text-xl font-bold text-secondary-dark-brown mb-1">Sarah Wijaya</h4>
                                <p class="text-sm text-secondary-gray-orange">Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>

                    <div class="min-w-full md:min-w-1/3 px-4 testimonial-slide">
                        <div class="bg-light rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow mx-auto max-w-md">
                            <div class="text-center mb-6">
                                <i class="ri-double-quotes-l text-4xl text-primary-gold"></i>
                            </div>
                            <div class="text-center mb-6">
                                <p class="text-secondary-gray-orange text-lg leading-relaxed italic mb-4">
                                    "Pelayanan cepat dan produknya selalu fresh! Rasa balado dan original favorit anak-anak. Pasti repeat order terus!"
                                </p>
                                <div class="flex justify-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border-t border-gray-200 pt-6">
                                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="ri-user-3-line text-2xl text-white"></i>
                                </div>
                                <h4 class="text-xl font-bold text-secondary-dark-brown mb-1">Budi Santoso</h4>
                                <p class="text-sm text-secondary-gray-orange">Surabaya, Indonesia</p>
                            </div>
                        </div>
                    </div>

                    <div class="min-w-full md:min-w-1/3 px-4 testimonial-slide">
                        <div class="bg-light rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow mx-auto max-w-md">
                            <div class="text-center mb-6">
                                <i class="ri-double-quotes-l text-4xl text-primary-gold"></i>
                            </div>
                            <div class="text-center mb-6">
                                <p class="text-secondary-gray-orange text-lg leading-relaxed italic mb-4">
                                    "Hampers Renjana jadi pilihan utama untuk kado. Kemasannya cantik dan rasanya dijamin enak. Terima kasih Renjana!"
                                </p>
                                <div class="flex justify-center mb-4">
                                    <div class="flex text-yellow-400">
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                        <i class="ri-star-fill text-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border-t border-gray-200 pt-6">
                                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="ri-user-3-line text-2xl text-white"></i>
                                </div>
                                <h4 class="text-xl font-bold text-secondary-dark-brown mb-1">Maya Putri</h4>
                                <p class="text-sm text-secondary-gray-orange">Bandung, Indonesia</p>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Dots Indicator -->
            <div class="flex justify-center mt-8 space-x-2">
                <div id="dotsContainer" class="flex space-x-2"></div>
            </div>
        </div>
    </div>
</section>
<!-- Kerjasama dengan Renjana -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Kerjasama</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Bangun Bisnis Bersama Renjana
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Kami membuka peluang kerja sama dengan berbagai pihak untuk memperluas jangkauan pasar dan menciptakan nilai tambah bagi semua pihak.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-shadow">
                    <i class="ri-store-3-line text-3xl text-primary-gold"></i>
                </div>
                <h4 class="text-lg font-bold text-secondary-dark-brown mb-2">Reseller</h4>
                <p class="text-secondary-gray-orange text-sm">Jual produk kami dengan sistem yang mudah dan untung menarik</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-shadow">
                    <i class="ri-team-line text-3xl text-primary-gold"></i>
                </div>
                <h4 class="text-lg font-bold text-secondary-dark-brown mb-2">Affiliate</h4>
                <p class="text-secondary-gray-orange text-sm">Program afiliasi dengan komisi menarik untuk setiap penjualan</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-shadow">
                    <i class="ri-building-line text-3xl text-primary-gold"></i>
                </div>
                <h4 class="text-lg font-bold text-secondary-dark-brown mb-2">B2B Partnership</h4>
                <p class="text-secondary-gray-orange text-sm">Kerja sama bisnis ke bisnis dengan harga khusus grosir</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-shadow">
                    <i class="ri-truck-line text-3xl text-primary-gold"></i>
                </div>
                <h4 class="text-lg font-bold text-secondary-dark-brown mb-2">Distributor</h4>
                <p class="text-secondary-gray-orange text-sm">Jadilah distributor resmi di wilayah Anda</p>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('collaboration') }}" class="inline-block bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>
</section>

<!-- Sertifikasi -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Sertifikasi</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Sertifikasi & Penghargaan
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Produk kami telah tersertifikasi dan memenuhi standar kualitas nasional dan internasional.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-shadow p-2">
                    <img src="{{ asset('assets/img/HKI.png') }}" alt="HKI Logo" class="w-full h-full object-contain">
                </div>
                <h4 class="font-bold text-secondary-dark-brown mb-2">HKI</h4>
                <p class="text-secondary-gray-orange text-sm">Memenuhi standar kualitas nasional</p>
            </div>

            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-shadow p-2">
                    <img src="{{ asset('assets/img/Halal indonesia logo.jpg') }}" alt="Halal MUI Logo" class="w-full h-full object-contain">
                </div>
                <h4 class="font-bold text-secondary-dark-brown mb-2">Halal MUI</h4>
                <p class="text-secondary-gray-orange text-sm">Tersertifikasi halal dari MUI</p>
            </div>

            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-shadow p-2">
                    <img src="{{ asset('assets/img/IRT.png') }}" alt="P-IRT Logo" class="w-full h-full object-contain">
                </div>
                <h4 class="font-bold text-secondary-dark-brown mb-2">P-IRT</h4>
                <p class="text-secondary-gray-orange text-sm">Sistem manajemen keamanan pangan</p>
            </div>

            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:shadow-xl transition-shadow p-2">
                    <img src="{{ asset('assets/img/BPOM.png') }}" alt="BPOM Logo" class="w-full h-full object-contain">
                </div>
                <h4 class="font-bold text-secondary-dark-brown mb-2">BPOM RI</h4>
                <p class="text-secondary-gray-orange text-sm">Terdaftar di Badan POM RI</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">FAQ</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Frequently Asked Questions
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Temukan jawaban atas pertanyaan yang sering diajukan tentang produk dan layanan Renjana Cashew
            </p>
        </div>

        <!-- FAQ Categories -->
        <div class="space-y-4 max-w-4xl mx-auto">
            @forelse($faqs as $faq)
            <!-- FAQ Item -->
            <div class="bg-light rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                    onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            {{ $faq->question }}
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        {{ $faq->answer }}
                    </p>
                </div>
            </div>
            @empty
            <!-- No FAQs available -->
            <div class="text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Belum ada FAQ yang tersedia.</p>
            </div>
            @endforelse
        </div>
</section>


<!-- Modal untuk Event Detail PDF -->
<div id="eventModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl max-w-4xl w-full mx-4 max-h-[90vh] overflow-hidden">
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h3 id="modalTitle" class="text-2xl font-bold text-secondary-dark-brown">Detail Event</h3>
            <button onclick="closeEventModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>

        <div class="p-6">
            <div id="modalContent" class="h-[70vh]">
                <!-- PDF akan dimuat di sini -->
                <iframe id="pdfViewer" src="" class="w-full h-full border-0 rounded-lg" title="Event Detail PDF"></iframe>
            </div>
        </div>

        <div class="flex justify-end gap-4 p-6 border-t border-gray-200">
            <button onclick="downloadPDF()" class="bg-gradient-gold text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                <i class="ri-download-line mr-2"></i>
                Download PDF
            </button>
            <button onclick="closeEventModal()" class="border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                Tutup
            </button>
        </div>
    </div>
</div>

<script>
    // No PHP variables needed here

    function toggleFaq(button) {
        const content = button.nextElementSibling;
        const icon = button.querySelector('i');

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        } else {
            content.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        }
    }

    function scrollToSection(sectionId) {
        document.getElementById(sectionId).scrollIntoView({
            behavior: 'smooth'
        });
    }

    // Modal Event Functions
    let currentEventPDF = '';

    function openEventModal(eventId) {
        const modal = document.getElementById('eventModal');
        const modalTitle = document.getElementById('modalTitle');
        const pdfViewer = document.getElementById('pdfViewer');

        // Data event dengan PDF masing-masing
        const eventData = {
            'event1': {
                title: 'Renjana Food Festival Jakarta - Detail Event',
                pdfUrl: '{{ asset("assets/pdf/renjana-food-festival-jakarta.pdf") }}'
            },
            'event2': {
                title: 'Cashew Cooking Workshop - Detail Event',
                pdfUrl: '{{ asset("assets/pdf/cashew-cooking-workshop.pdf") }}'
            },
            'event3': {
                title: 'Renjana Health Expo - Detail Event',
                pdfUrl: '{{ asset("assets/pdf/renjana-health-expo.pdf") }}'
            }
        };

        if (eventData[eventId]) {
            modalTitle.textContent = eventData[eventId].title;
            pdfViewer.src = eventData[eventId].pdfUrl;
            currentEventPDF = eventData[eventId].pdfUrl;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeEventModal() {
        const modal = document.getElementById('eventModal');
        const pdfViewer = document.getElementById('pdfViewer');

        modal.classList.add('hidden');
        modal.classList.remove('flex');
        pdfViewer.src = '';
        document.body.style.overflow = 'auto';
    }

    function downloadPDF() {
        if (currentEventPDF) {
            // Membuat link download
            const link = document.createElement('a');
            link.href = currentEventPDF;
            link.download = 'event-detail-renjana.pdf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    }

    // Tutup modal ketika mengklik di luar area modal
    document.getElementById('eventModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeEventModal();
        }
    });

    // Tutup modal dengan tombol ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeEventModal();
            closeAdModal();
        }
    });

    // Ad Modal Functions
    function openAdModal() {
        const adModal = document.getElementById('adModal');
        adModal.classList.remove('hidden');
        adModal.classList.add('flex');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    }

    function closeAdModal() {
        const adModal = document.getElementById('adModal');
        adModal.classList.add('hidden');
        adModal.classList.remove('flex');
        document.body.style.overflow = 'auto'; // Re-enable scrolling
    }

    // Open ad modal automatically when page loads
    window.addEventListener('DOMContentLoaded', function() {
        // Get ad state from the hidden element
        var adDataElement = document.getElementById('adDataElement');
        var hasAd = adDataElement && adDataElement.dataset.hasAd === 'true';

        if (hasAd) {
            setTimeout(function() {
                openAdModal();
            }, 1000); // Wait 1 second before showing the ad
        }

        // Initialize testimonial slider
        initTestimonialSlider();
    });

    // Testimonial Slider Functionality
    function initTestimonialSlider() {
        const slider = document.getElementById('testimonialSlider');
        const slides = document.querySelectorAll('.testimonial-slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dotsContainer = document.getElementById('dotsContainer');
        
        if (!slider || slides.length === 0) return;

        let currentSlide = 0;
        const totalSlides = slides.length;
        let autoSlideInterval;

        // Create dots
        function createDots() {
            dotsContainer.innerHTML = '';
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement('button');
                dot.classList.add('w-3', 'h-3', 'rounded-full', 'transition-colors', 'duration-300');
                dot.classList.add(i === 0 ? 'bg-primary-gold' : 'bg-gray-300');
                dot.addEventListener('click', () => goToSlide(i));
                dotsContainer.appendChild(dot);
            }
        }

        // Update dots
        function updateDots() {
            const dots = dotsContainer.children;
            Array.from(dots).forEach((dot, index) => {
                dot.classList.remove('bg-primary-gold', 'bg-gray-300');
                dot.classList.add(index === currentSlide ? 'bg-primary-gold' : 'bg-gray-300');
            });
        }

        // Go to specific slide
        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            const offset = -slideIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;
            updateDots();
        }

        // Next slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            goToSlide(currentSlide);
        }

        // Previous slide
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            goToSlide(currentSlide);
        }

        // Auto slide
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Event listeners
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoSlide();
            startAutoSlide(); // Restart auto slide
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoSlide();
            startAutoSlide(); // Restart auto slide
        });

        // Pause auto slide on hover
        slider.addEventListener('mouseenter', stopAutoSlide);
        slider.addEventListener('mouseleave', startAutoSlide);

        // Touch/swipe support for mobile
        let startX = 0;
        let isDragging = false;

        slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
            stopAutoSlide();
        });

        slider.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            e.preventDefault();
        });

        slider.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            isDragging = false;
            
            const endX = e.changedTouches[0].clientX;
            const diff = startX - endX;
            
            if (Math.abs(diff) > 50) { // Minimum swipe distance
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
            
            startAutoSlide(); // Restart auto slide
        });

        // Initialize
        createDots();
        startAutoSlide();
    }
</script>

<!-- Ad Modal Popup -->
@if($latestAd)
<div id="adModal" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl max-w-3xl w-full mx-4 relative overflow-hidden">
        <!-- Close button -->
        <button onclick="closeAdModal()" class="absolute top-2 right-2 bg-white rounded-full p-1 shadow-lg z-10">
            <i class="ri-close-line text-2xl text-secondary-dark-brown"></i>
        </button>

        <!-- Ad content -->
        <div class="flex flex-col">
            <div class="p-0">
                <img src="{{ asset('storage/' . $latestAd->poster) }}" alt="Advertisement" class="w-full object-cover">
            </div>
        </div>
    </div>
</div>
@endif

<style>
/* Testimonial Slider Responsive Styles */
@media (min-width: 768px) {
    .testimonial-slide {
        min-width: 33.333333%; /* Show 3 slides on desktop */
    }
}

@media (max-width: 767px) {
    .testimonial-slide {
        min-width: 100%; /* Show 1 slide on mobile */
    }
    
    #prevBtn, #nextBtn {
        display: none; /* Hide navigation buttons on mobile */
    }
}

/* Smooth transitions */
#testimonialSlider {
    transition: transform 0.5s ease-in-out;
}

/* Custom scrollbar for slider */
#testimonialSlider::-webkit-scrollbar {
    display: none;
}

/* Fade in animation for testimonial cards */
.testimonial-slide {
    opacity: 0;
    animation: fadeInUp 0.8s ease-out forwards;
}

.testimonial-slide:nth-child(1) { animation-delay: 0.1s; }
.testimonial-slide:nth-child(2) { animation-delay: 0.2s; }
.testimonial-slide:nth-child(3) { animation-delay: 0.3s; }

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Quote icon pulse animation */
.ri-double-quotes-l {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}
</style>
@endsection