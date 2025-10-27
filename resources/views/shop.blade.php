@extends('layouts.app')

@section('title', 'Shop - Renjana Cashew')

@section('content')
<!-- Banner Shop -->
<section class="relative h-96 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <!-- Background Image -->
    @if($banners && $banners->banner_file)
    <img src="{{ asset('storage/' . $banners->banner_file) }}" alt="About Us Banner" class="absolute inset-0 w-full h-full object-cover bg-opacity-50">
    @else
    <img src="{{ asset('assets/img/about_us/banner.jpg') }}" alt="About Us Banner" class="absolute inset-0 w-full h-full object-cover bg-opacity-50">
    @endif
    </div>

    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Renjana Shop</h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto">
            Belanja produk premium kami dalam berbagai kategori pilihan
        </p>
    </div>
</section>

<!-- Toko Online -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Toko Online</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Belanja Online di Platform Terpercaya
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Nikmati kemudahan berbelanja produk Renjana Cashew di berbagai platform e-commerce favorit Anda dengan berbagai promo menarik.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse ($onlineShops as $shop)
            <a href="{{ $shop->shop_url }}" target="_blank" class="group">
                <div class="bg-light rounded-xl p-8 text-center hover:shadow-xl transition-all group-hover:scale-105">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 overflow-hidden">
                        @if($shop->shop_logo)
                        <img src="{{ $shop->getLogoUrlAttribute() }}" alt="{{ $shop->shop_name }}" class="w-full h-full object-cover">
                        @else
                        <div class="w-full h-full bg-orange-500 flex items-center justify-center">
                            <i class="ri-shopping-bag-3-line text-3xl text-white"></i>
                        </div>
                        @endif
                    </div>
                    <h4 class="text-2xl font-bold text-secondary-dark-brown mb-3">{{ $shop->shop_name }}</h4>
                    <p class="text-secondary-gray-orange mb-4">{{ $shop->description }}</p>

                    <div class="bg-white rounded-lg p-4 mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-secondary-gray-orange">Rating Toko:</span>
                            <div class="flex items-center">
                                <span class="text-orange-500 font-bold mr-1">{{ number_format($shop->rating, 1) }}</span>
                                <div class="flex text-orange-500">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <=$shop->rating)
                                        <i class="ri-star-fill text-sm"></i>
                                        @elseif ($i <= $shop->rating + 0.5)
                                            <i class="ri-star-half-fill text-sm"></i>
                                            @else
                                            <i class="ri-star-line text-sm"></i>
                                            @endif
                                            @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="w-full bg-orange-500 text-white py-3 rounded-full font-semibold hover:bg-orange-600 transition-colors">
                        Kunjungi Toko
                    </button>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center p-8">
                <p class="text-lg text-secondary-gray-orange">Belum ada toko online yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Toko Offline -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Toko Offline</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Kunjungi Outlet Fisik Kami
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Rasakan pengalaman berbelanja langsung di outlet fisik kami di Pakuwon Mall Surabaya
            </p>
        </div>

        <!-- Outlet Pakuwon Mall -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="lg:flex">
                <!-- Image Gallery -->
                <div class="lg:w-1/2">
                    <div class="relative h-96 lg:h-full">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            alt="Renjana Outlet Pakuwon Mall" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white rounded-lg p-4">
                                <h4 class="font-bold text-secondary-dark-brown mb-2">{{ $offlineShop['name'] }}</h4>
                                <p class="text-sm text-secondary-gray-orange">{{ $offlineShop['location'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Store Info -->
                <div class="lg:w-1/2 p-8 lg:p-12">
                    <div class="h-full flex flex-col justify-center">
                        <h4 class="text-3xl font-bold text-secondary-dark-brown mb-6">
                            Outlet Pakuwon Mall Surabaya
                        </h4>

                        <div class="space-y-6 mb-8">
                            <div class="flex items-start">
                                <i class="ri-map-pin-line text-primary-gold text-2xl mr-4 mt-1"></i>
                                <div>
                                    <h5 class="font-bold text-secondary-dark-brown mb-1">Alamat:</h5>
                                    <p class="text-secondary-gray-orange">
                                        {!! nl2br(e($offlineShop['address'])) !!}
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="ri-time-line text-primary-gold text-2xl mr-4 mt-1"></i>
                                <div>
                                    <h5 class="font-bold text-secondary-dark-brown mb-1">Jam Operasional:</h5>
                                    <p class="text-secondary-gray-orange">
                                        {!! nl2br(e($offlineShop['hours'])) !!}
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="ri-phone-line text-primary-gold text-2xl mr-4 mt-1"></i>
                                <div>
                                    <h5 class="font-bold text-secondary-dark-brown mb-1">Kontak:</h5>
                                    <p class="text-secondary-gray-orange">
                                        <a href="tel:{{ str_replace(' ', '', $offlineShop['phone']) }}" class="hover:text-primary-gold transition-colors">
                                            {{ $offlineShop['phone'] }}
                                        </a><br>
                                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $offlineShop['whatsapp']) }}" target="_blank" class="hover:text-primary-gold transition-colors">
                                            WhatsApp: {{ $offlineShop['whatsapp'] }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="https://maps.google.com/?q=Pakuwon+Mall+Surabaya" target="_blank"
                                class="flex-1 bg-gradient-gold text-white py-4 px-6 rounded-full font-semibold text-center hover:opacity-90 transition-opacity">
                                <i class="ri-navigation-line mr-2"></i>
                                Petunjuk Arah
                            </a>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $offlineShop['whatsapp']) }}" target="_blank"
                                class="flex-1 border-2 border-primary-gold text-primary-gold py-4 px-6 rounded-full font-semibold text-center hover:bg-primary-gold hover:text-white transition-colors">
                                <i class="ri-whatsapp-line mr-2"></i>
                                Chat WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Foto Outlet - Galeri 3 Foto -->
        <div class="mt-16">
            <div class="text-center mb-8">
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">
                    Galeri Outlet
                </h4>
                <p class="text-secondary-gray-orange">
                    Lihat Foto untuk menemukan outlet kami di Pakuwon Mall dengan mudah
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                @foreach ($offlineShop['gallery'] as $item)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset($item['image']) }}"
                        alt="{{ $item['title'] }}"
                        class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h5 class="font-bold text-secondary-dark-brown mb-2">{{ $item['title'] }}</h5>
                        <p class="text-sm text-secondary-gray-orange">{{ $item['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Video Petunjuk Arah -->
        <div class="mt-16">
            <div class="text-center mb-8">
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">
                    Video Petunjuk Arah ke Outlet
                </h4>
                <p class="text-secondary-gray-orange">
                    Tonton video panduan untuk menemukan outlet kami di Pakuwon Mall dengan mudah
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="relative bg-secondary-dark-brown rounded-2xl p-8 text-center">
                    <div class="relative bg-light rounded-xl p-12">
                        <div class="mb-6">
                            <video
                                src="{{ asset($offlineShop['video']) }}"
                                class="w-full h-auto rounded-lg shadow-lg"
                                controls
                                poster="{{ asset('assets/img/outlet-1.jpeg') }}"></video>
                        </div>
                        <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Video Petunjuk Arah</h5>
                        <p class="text-secondary-gray-orange mb-6">
                            Panduan lengkap menuju outlet Renjana Cashew di Pakuwon Mall Surabaya
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Keunggulan Belanja di Renjana -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Keunggulan</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Mengapa Belanja di Renjana?
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-truck-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">Pengiriman Cepat</h4>
                <p class="text-secondary-gray-orange">Free ongkir untuk pembelian di atas Rp 150.000 ke seluruh Indonesia</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-shield-check-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">Garansi Kualitas</h4>
                <p class="text-secondary-gray-orange">100% uang kembali jika produk tidak sesuai ekspektasi</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-customer-service-2-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">Customer Service 24/7</h4>
                <p class="text-secondary-gray-orange">Tim support siap membantu Anda kapan saja melalui berbagai channel</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-gift-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">Packaging Premium</h4>
                <p class="text-secondary-gray-orange">Kemasan eksklusif yang aman dan menarik, cocok untuk hadiah</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-secondary-dark-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Siap Mencoba Kelezatan Renjana Cashew?
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Pilih platform belanja favorit Anda dan rasakan pengalaman berbelanja kacang mede premium terbaik
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('product') }}" class="inline-block bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                Lihat Semua Produk
            </a>
            <a href="{{ route('contact') }}" class="inline-block border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-secondary-dark-brown transition-colors">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>
@endsection