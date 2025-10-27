@extends('layouts.app')
@section('title', 'Kolaborasi - Renjana Cashew')
@section('content')
<!-- Banner Kolaborasi -->
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
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Kolaborasi Bersama Renjana</h1>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4">Buka Peluang, Ciptakan Dampak Bersama</h2>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto">
            Mari bersama membangun kemitraan yang saling menguntungkan dan berkelanjutan
        </p>
    </div>
</section>

<!-- Collaboration Section -->
<section id="kolaborasi" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Kolaborasi</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Kolaborasi Bersama Renjana
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Mari bersama membangun kemitraan yang saling menguntungkan dan berkelanjutan
            </p>
        </div>

        <!-- Types of Collaboration -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            @forelse($collaborations as $collaboration)
            <!-- Collaboration Item -->
            <div class="bg-light rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="text-center mb-6">
                    <!-- <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ri-handshake-line text-3xl text-white"></i>
                    </div> -->
                    <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">{{ $collaboration->title }}</h4>
                    <p class="text-secondary-gray-orange mb-6">
                        {{ $collaboration->description }}
                    </p>
                </div>

                @if($collaboration->image)
                <div class="mb-6">
                    <img src="{{ asset('storage/' . $collaboration->image) }}" alt="{{ $collaboration->title }}" class="w-full h-48 object-cover rounded-lg">
                </div>
                @endif

                <div class="mb-6">
                    <h5 class="font-bold text-secondary-dark-brown mb-3">Benefits:</h5>
                    <ul class="space-y-2 text-secondary-gray-orange text-sm">
                        @foreach(explode("\n", $collaboration->benefits) as $benefit)
                        @if(!empty(trim($benefit)))
                        <li class="flex items-center">
                            <i class="ri-check-circle-fill text-primary-gold mr-2"></i>
                            <span>{{ trim($benefit) }}</span>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>

                <a href="{{ route('contact') }}" class="block w-full bg-gradient-gold text-white py-3 rounded-full font-semibold hover:opacity-90 transition-opacity text-center">
                    Hubungi Kami
                </a>
            </div>
            @empty
            <!-- No collaborations available -->
            <div class="col-span-3 text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Belum ada program kolaborasi yang tersedia.</p>
            </div>
            @endforelse
        </div>

        <!-- CTA Section -->
        <div class="bg-secondary-dark-brown text-white rounded-2xl p-8 lg:p-12 text-center">
            <h4 class="text-3xl md:text-4xl font-bold mb-6">
                Siap Memulai Kolaborasi Bersama Kami?
            </h4>
            <p class="text-xl text-gray-300 mb-8">
                Mari bergabung dengan jaringan mitra Renjana dan ciptakan peluang bisnis yang saling menguntungkan
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="mailto:partnership@renjanacashew.com" class="inline-block bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                    Hubungi Tim Kolaborasi
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="inline-block border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-secondary-dark-brown transition-colors">
                    <i class="ri-whatsapp-line mr-2"></i>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Collaboration Process -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Proses Kolaborasi</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Langkah Mudah Berkolaborasi
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">1</span>
                    </div>
                    <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-primary-gold opacity-30 transform translate-x-2"></div>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">Konsultasi</h4>
                <p class="text-secondary-gray-orange">
                    Diskusikan kebutuhan dan tujuan kolaborasi Anda dengan tim kami
                </p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">2</span>
                    </div>
                    <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-primary-gold opacity-30 transform translate-x-2"></div>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">Proposal</h4>
                <p class="text-secondary-gray-orange">
                    Kami akan menyusun proposal kemitraan yang sesuai dengan kebutuhan
                </p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">3</span>
                    </div>
                    <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-primary-gold opacity-30 transform translate-x-2"></div>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">Agreement</h4>
                <p class="text-secondary-gray-orange">
                    Finalisasi kontrak dan kesepakatan kerjasama yang menguntungkan semua pihak
                </p>
            </div>

            <!-- Step 4 -->
            <div class="text-center">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">4</span>
                    </div>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-3">Execution</h4>
                <p class="text-secondary-gray-orange">
                    Implementasi program kemitraan dan monitoring hasil bersama
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-secondary-dark-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Siap Memulai Kolaborasi Bersama Kami?
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Mari bergabung dengan jaringan mitra Renjana dan ciptakan peluang bisnis yang saling menguntungkan
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="inline-block bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                Hubungi Tim Kolaborasi
            </a>
            <a href="https://wa.me/6281234567890" target="_blank" class="inline-block border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-secondary-dark-brown transition-colors">
                <i class="ri-whatsapp-line mr-2"></i>
                Chat WhatsApp
            </a>
        </div>
    </div>
</section>
<!-- Removing duplicate content -->
<!-- 
@endsection

@section('title', 'Collaboration - Renjana Cashew')

@section('content')
-->
<!-- Removed duplicate content -->

<!-- Partnership -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Partnership</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Mitra Bisnis Strategis
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Kami mengundang perusahaan dan organisasi untuk menjalin kemitraan strategis yang saling menguntungkan dalam bisnis kacang mede premium
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Partnership Info -->
            <div>
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-6">
                    Jenis Kemitraan yang Tersedia:
                </h4>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="ri-building-line text-white text-xl"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Corporate Partnership</h5>
                            <p class="text-secondary-gray-orange">Kemitraan dengan perusahaan besar untuk supply kacang mede dalam jumlah besar, program CSR, atau employee gift.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="ri-store-line text-white text-xl"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Retail Partnership</h5>
                            <p class="text-secondary-gray-orange">Bermitra dengan supermarket, minimarket, dan toko retail untuk distribusi produk Renjana Cashew.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="ri-restaurant-line text-white text-xl"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">F&B Partnership</h5>
                            <p class="text-secondary-gray-orange">Kolaborasi dengan restoran, café, dan hotel untuk menyediakan kacang mede sebagai bahan baku atau snack premium.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="ri-global-line text-white text-xl"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Export Partnership</h5>
                            <p class="text-secondary-gray-orange">Kemitraan ekspor untuk memasarkan produk Renjana Cashew ke pasar internasional.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partnership Benefits -->
            <div class="bg-light rounded-2xl p-8">
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-6 text-center">
                    Keuntungan Bermitra dengan Kami
                </h4>

                <div class="space-y-4">
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                        <span class="text-secondary-gray-orange">Produk berkualitas premium dengan sertifikasi internasional</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                        <span class="text-secondary-gray-orange">Support marketing dan promosi bersama</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                        <span class="text-secondary-gray-orange">Harga khusus untuk partner dengan volume besar</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                        <span class="text-secondary-gray-orange">Dukungan teknis dan konsultasi produk</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                        <span class="text-secondary-gray-orange">Fleksibilitas dalam customization packaging</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 text-xl mr-3"></i>
                        <span class="text-secondary-gray-orange">Program loyalty dan reward eksklusif</span>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <a href="mailto:partnership@renjanacashew.com" class="inline-block bg-gradient-gold text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                        Ajukan Partnership
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reseller Program -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Reseller</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Program Reseller Renjana
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Jadilah bagian dari jaringan reseller Renjana Cashew dan raih keuntungan menarik dengan menjual produk kacang mede premium kami
            </p>
        </div>

        <!-- Reseller Tiers -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Silver Reseller -->
            <div class="bg-white rounded-2xl p-8 text-center relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gray-400"></div>

                <div class="w-16 h-16 bg-gray-400 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-medal-line text-2xl text-white"></i>
                </div>

                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">Silver Reseller</h4>
                <div class="text-3xl font-bold text-primary-gold mb-6">15%</div>
                <p class="text-secondary-gray-orange mb-6">Profit margin untuk reseller pemula</p>

                <div class="space-y-3 mb-8 text-left">
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Min. order 50 pcs/bulan</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Katalog produk digital</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Support WA Group</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Training online</span>
                    </div>
                </div>

                <button class="w-full bg-gray-400 text-white py-3 rounded-full font-semibold hover:bg-gray-500 transition-colors">
                    Daftar Silver
                </button>
            </div>

            <!-- Gold Reseller -->
            <div class="bg-white rounded-2xl p-8 text-center relative overflow-hidden border-2 border-primary-gold">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-gold"></div>
                <div class="absolute top-4 right-4 bg-primary-gold text-white text-xs px-2 py-1 rounded-full">
                    POPULAR
                </div>

                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-vip-crown-line text-2xl text-white"></i>
                </div>

                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">Gold Reseller</h4>
                <div class="text-3xl font-bold text-primary-gold mb-6">25%</div>
                <p class="text-secondary-gray-orange mb-6">Profit margin untuk reseller aktif</p>

                <div class="space-y-3 mb-8 text-left">
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Min. order 150 pcs/bulan</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Materi marketing premium</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Support personal manager</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Training offline berkala</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Bonus quarterly</span>
                    </div>
                </div>

                <button class="w-full bg-gradient-gold text-white py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                    Daftar Gold
                </button>
            </div>

            <!-- Platinum Reseller -->
            <div class="bg-white rounded-2xl p-8 text-center relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1 bg-purple-600"></div>

                <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-vip-diamond-line text-2xl text-white"></i>
                </div>

                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">Platinum Reseller</h4>
                <div class="text-3xl font-bold text-primary-gold mb-6">35%</div>
                <p class="text-secondary-gray-orange mb-6">Profit margin untuk top reseller</p>

                <div class="space-y-3 mb-8 text-left">
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Min. order 300 pcs/bulan</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Custom packaging tersedia</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Dedicated account manager</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Priority stock allocation</span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-check-line text-green-500 mr-2"></i>
                        <span class="text-sm text-secondary-gray-orange">Annual trip reward</span>
                    </div>
                </div>

                <button class="w-full bg-purple-600 text-white py-3 rounded-full font-semibold hover:bg-purple-700 transition-colors">
                    Daftar Platinum
                </button>
            </div>
        </div>

        <!-- Reseller Support -->
        <div class="bg-white rounded-2xl p-8 lg:p-12">
            <h4 class="text-2xl font-bold text-secondary-dark-brown mb-8 text-center">
                Support untuk Semua Reseller
            </h4>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ri-book-open-line text-2xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary-dark-brown mb-2">Training Komprehensif</h5>
                    <p class="text-sm text-secondary-gray-orange">Pelatihan produk, penjualan, dan digital marketing</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ri-image-line text-2xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary-dark-brown mb-2">Materi Marketing</h5>
                    <p class="text-sm text-secondary-gray-orange">Foto produk, video, dan template promosi siap pakai</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ri-customer-service-line text-2xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary-dark-brown mb-2">Support 24/7</h5>
                    <p class="text-sm text-secondary-gray-orange">Tim support khusus untuk membantu reseller</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="ri-gift-line text-2xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary-dark-brown mb-2">Reward Program</h5>
                    <p class="text-sm text-secondary-gray-orange">Bonus penjualan dan hadiah menarik setiap bulan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Affiliate Program -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Affiliate</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Program Affiliate Renjana
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Dapatkan komisi menarik dengan mempromosikan produk Renjana Cashew melalui konten digital Anda
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Affiliate Info -->
            <div>
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-6">
                    Cara Kerja Program Affiliate:
                </h4>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-white font-bold text-sm">1</span>
                        </div>
                        <div>
                            <h5 class="text-lg font-bold text-secondary-dark-brown mb-2">Daftar sebagai Affiliate</h5>
                            <p class="text-secondary-gray-orange">Lengkapi form pendaftaran dan tunggu approval dari tim kami dalam 2x24 jam.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-white font-bold text-sm">2</span>
                        </div>
                        <div>
                            <h5 class="text-lg font-bold text-secondary-dark-brown mb-2">Dapatkan Link Unik</h5>
                            <p class="text-secondary-gray-orange">Terima link affiliate tracking dan kode promo khusus untuk audiens Anda.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-white font-bold text-sm">3</span>
                        </div>
                        <div>
                            <h5 class="text-lg font-bold text-secondary-dark-brown mb-2">Promosikan Produk</h5>
                            <p class="text-secondary-gray-orange">Bagikan di media sosial, blog, YouTube, atau platform digital lainnya.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-gradient-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-white font-bold text-sm">4</span>
                        </div>
                        <div>
                            <h5 class="text-lg font-bold text-secondary-dark-brown mb-2">Terima Komisi</h5>
                            <p class="text-secondary-gray-orange">Dapatkan komisi 10% dari setiap penjualan yang berhasil melalui link Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Affiliate Benefits -->
            <div class="bg-light rounded-2xl p-8">
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-6 text-center">
                    Keuntungan Menjadi Affiliate
                </h4>

                <div class="space-y-4 mb-8">
                    <div class="flex items-center">
                        <i class="ri-money-dollar-circle-line text-primary-gold text-2xl mr-3"></i>
                        <div>
                            <h5 class="font-bold text-secondary-dark-brown">Komisi 10%</h5>
                            <p class="text-sm text-secondary-gray-orange">Dari setiap transaksi sukses</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <i class="ri-time-line text-primary-gold text-2xl mr-3"></i>
                        <div>
                            <h5 class="font-bold text-secondary-dark-brown">Tracking Real-time</h5>
                            <p class="text-sm text-secondary-gray-orange">Monitor performa dengan dashboard</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <i class="ri-calendar-line text-primary-gold text-2xl mr-3"></i>
                        <div>
                            <h5 class="font-bold text-secondary-dark-brown">Payment Bulanan</h5>
                            <p class="text-sm text-secondary-gray-orange">Pembayaran komisi setiap bulan</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <i class="ri-smartphone-line text-primary-gold text-2xl mr-3"></i>
                        <div>
                            <h5 class="font-bold text-secondary-dark-brown">Mobile Dashboard</h5>
                            <p class="text-sm text-secondary-gray-orange">Akses mudah via smartphone</p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <p class="text-sm text-secondary-gray-orange mb-4">
                        <strong>Minimum Payout:</strong> Rp 100.000<br>
                        <strong>Cookie Duration:</strong> 30 hari
                    </p>
                    <a href="mailto:affiliate@renjanacashew.com" class="inline-block bg-gradient-gold text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                        Daftar Affiliate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni Partner -->
<section class="py-20 bg-secondary-dark-brown text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Testimonial</h2>
            <h3 class="text-4xl md:text-5xl font-bold mb-6">
                Kata Partner Kami
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-blur-sm">
                <div class="flex items-center mb-4">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Budi Santoso" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <h5 class="font-bold">Budi Santoso</h5>
                        <p class="text-sm text-gray-300">Gold Reseller - Jakarta</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-4">
                    "Program reseller Renjana sangat menguntungkan. Support tim sangat baik dan produk mudah dijual karena kualitasnya premium."
                </p>
                <div class="flex text-primary-gold">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-blur-sm">
                <div class="flex items-center mb-4">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616c2706db6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Sarah Wijaya" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <h5 class="font-bold">Sarah Wijaya</h5>
                        <p class="text-sm text-gray-300">Food Blogger - Affiliate</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-4">
                    "Sebagai food blogger, saya bangga merekomendasi Renjana Cashew. Komisi affiliate-nya juga sangat kompetitif!"
                </p>
                <div class="flex text-primary-gold">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-blur-sm">
                <div class="flex items-center mb-4">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Ahmad Rahman" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <h5 class="font-bold">Ahmad Rahman</h5>
                        <p class="text-sm text-gray-300">Hotel Manager - Corporate Partner</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-4">
                    "Kemitraan dengan Renjana untuk supply kacang mede hotel sangat memuaskan. Kualitas konsisten dan pelayanan professional."
                </p>
                <div class="flex text-primary-gold">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-20 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-secondary-dark-brown mb-6">
            Siap Berkolaborasi dengan Renjana?
        </h2>
        <p class="text-xl text-secondary-gray-orange mb-8">
            Hubungi tim kami untuk membahas peluang kerjasama yang menguntungkan bagi kedua belah pihak
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="mailto:partnership@renjanacashew.com" class="inline-block bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                <i class="ri-mail-line mr-2"></i>
                Email Partnership
            </a>
            <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan program kerjasama Renjana Cashew" target="_blank" class="inline-block border-2 border-primary-gold text-primary-gold px-8 py-4 rounded-full font-semibold hover:bg-primary-gold hover:text-white transition-colors">
                <i class="ri-whatsapp-line mr-2"></i>
                WhatsApp Kami
            </a>
        </div>
    </div>
</section>
@endsection