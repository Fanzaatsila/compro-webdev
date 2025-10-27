@extends('layouts.app')

@section('title', 'Tentang Kami - Renjana Cashew')

@section('content')
<!-- Hero Banner -->
<section class="relative h-96 flex items-center justify-center bg-gradient-to-r from-renjana-brown to-renjana-gray-orange">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <!-- Background Image -->
    @if($banners && $banners->banner_file)
    <img src="{{ asset('storage/' . $banners->banner_file) }}" alt="About Us Banner" class="absolute inset-0 w-full h-full object-cover bg-opacity-50">
    @else
    <img src="{{ asset('assets/img/about_us/banner.jpg') }}" alt="About Us Banner" class="absolute inset-0 w-full h-full object-cover bg-opacity-50">
    @endif
    </div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Tentang Renjana</h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto">
            Mengenal lebih dekat dengan filosofi, visi misi, dan nilai-nilai yang kami junjung tinggi
        </p>
    </div>
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="ri-arrow-down-line text-2xl"></i>
    </div>
</section>

<!-- Our Story -->
<!-- Profil Perusahaan & Produk -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Our Story</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Cerita Perusahaan Kami
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="prose prose-lg text-secondary-gray-orange space-y-6">
                    <p class="text-lg leading-relaxed mb-6">
                        <strong class="text-secondary-dark-brown">PT Manohara Adika Distrindo</strong> adalah perusahaan distribusi yang sejak 2020 mengusung misi "Your Trusted Distribution Partner" untuk memberikan kepuasan kepada stakeholder dan mitra bisnis serta menerapkan tata kelola perusahaan yang baik.
                    </p>
                    <p class="text-lg leading-relaxed mb-6">
                        Saat ini, perusahaan ini memiliki banyak cabang di Pulau Jawa dan Bali, serta menaungi beberapa perusahaan, salah satunya Renjana.
                    </p>
                    <p class="text-lg leading-relaxed">
                        <strong class="text-primary-gold">Renjana</strong>, didirikan pada 2021 di bawah PT Manohara Adika Distrindo, memproduksi kacang mete oven premium dengan berbagai varian rasa unik. Produk utamanya adalah kacang mete utuh berkualitas dari Kendari, berukuran besar, renyah, dan dilapisi tepung premium dengan bumbu khusus.
                    </p>
                </div>
            </div>

            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/img/about_us/renjana_story.jpg') }}"
                        alt="Renjana Factory" class="w-full h-96 object-cover">
                </div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-light rounded-2xl flex items-center justify-center shadow-lg">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-gold">2021</div>
                        <div class="text-sm text-secondary-gray-orange">Didirikan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Renjana Story -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Renjana Story</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Passion Behind Our Brand
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/img/about_us/20240908_145736.jpg') }}"
                        alt="Cashew Production" class="w-full h-96 object-cover">
                </div>

            </div>
            <div>
                <div class="prose prose-lg text-secondary-gray-orange">
                    <p class="text-lg leading-relaxed mb-6">
                        Our product is roasted cashew nuts coated with premium flour and flavored with various unique flavors. We use whole cashew nuts as the main ingredient of our product.
                    </p>
                    <p class="text-lg leading-relaxed mb-6">
                        Our Flavored Roasted Coated Cashew Nuts are presented differently and uniquely compared to our competitors, bigger size of nuts from Indonesia, crunchy texture, and specially crafted flavors.
                    </p>
                    <p class="text-lg leading-relaxed mb-6">
                        The cashew nuts are accumulated fairly and carefully by Indonesian farmers. We use <strong class="text-primary-gold">"Renjana"</strong> as our brand name, Renjana(/ren·ja·na/n) = rasa hati yang kuat (rindu, cinta kasih, berahi, dan sebagainya) = a strong affection (refers to longing, love, or lust); passion.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Renjana describes the passion of our local farmers to grow the cashew carefully to be loved and attract the international market's heart.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Founder -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">About Founder</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Pendiri Renjana
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-light rounded-2xl p-8 md:p-12 shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="md:col-span-1">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl mx-auto max-w-xs">
                            <img src="{{ asset('assets/img/Founder.jpg') }}"
                                alt="Founder" class="w-full h-80 object-cover">
                        </div>
                        <div class="text-center mt-6">
                            <h4 class="text-xl font-bold text-secondary-dark-brown mb-2">Bapak Founder</h4>
                            <p class="text-primary-gold font-semibold">Founder & CEO</p>
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <div class="prose prose-lg text-secondary-gray-orange">
                            <p class="text-lg leading-relaxed mb-6">
                                Renjana was founded by a graduate student from <strong class="text-primary-gold">Ciputra University</strong> master's degree in management, IBM-IC. Renjana initially emerged as part of fulfilling a business assignment during his undergraduate studies in 2019-2021.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Vision & Mission</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Visi & Misi Kami
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Vision -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mr-6">
                        <i class="ri-eye-line text-2xl text-white"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-secondary-dark-brown">Visi</h4>
                </div>
                <p class="text-lg text-secondary-gray-orange leading-relaxed">
                    Being a snack company premium oven Cashew in Indonesia, starting from Surabaya, with high quality taste in every bite.
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mr-6">
                        <i class="ri-flag-line text-2xl text-white"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-secondary-dark-brown">Misi</h4>
                </div>
                <ul class="space-y-4 text-secondary-gray-orange">
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <span>Renjana is a premium snack and souvenir from Surabaya that is always remembered by the public.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <span>Spreading the presence of the Renjana brand throughout Surabaya as the main choice of premium snacks.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <span>Becomes the "number 1 premium snack in Surabaya" through event marketing, digitalization, and strategic partnerships.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <span>Renjana is committed to improving stakeholder welfare through collaborative programs that strengthen relationships.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Value Internal -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Nilai Perusahaan</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Value Internal
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Nilai-nilai yang menjadi fondasi budaya kerja dan karakter Renjana dalam mencapai visi dan misi perusahaan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Berdedikasi -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L3 7l9 5 9-5-9-5zM3 17l9 5 9-5M3 12l9 5 9-5"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Berdedikasi</h4>
                <p class="text-secondary-gray-orange text-sm leading-relaxed">
                    Prinsip yang mencerminkan dedikasi penuh dalam menyelesaikan tugas
                </p>
            </div>

            <!-- Edukasi -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6L23 9l-11-6zM18.82 9L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Edukasi</h4>
                <p class="text-secondary-gray-orange text-sm leading-relaxed">
                    Renjana menjadi landasan bagi anggota untuk belajar dari kesalahan, berkembang, dan mencari solusi terbaik
                </p>
            </div>

            <!-- Relasi -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zM4 18v-4h3v4h2v-7.5c0-.83.67-1.5 1.5-1.5S12 9.67 12 10.5V15h2v3h3v-3h1l-2.54-7.63A1.5 1.5 0 0 0 14.09 7H9.91c-.68 0-1.3.43-1.53 1.06L6 16v2H4z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Relasi</h4>
                <p class="text-secondary-gray-orange text-sm leading-relaxed">
                    Renjana mengutamakan membangun hubungan kerja yang baik tanpa diskriminasi, dengan rasa kebersamaan
                </p>
            </div>

            <!-- Keterbukaan -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Keterbukaan</h4>
                <p class="text-secondary-gray-orange text-sm leading-relaxed">
                    Renjana mendukung kebebasan berpendapat dan mendukung ide-ide baru dari semua anggota
                </p>
            </div>

            <!-- Akses -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 11H7v9h2v-9zm4 0h-2v9h2v-9zm4 0h-2v9h2v-9zm2.5-9H18V1h-2v1H8V1H6v1H4.5C3.11 2 2 3.11 2 4.5v15C2 20.89 3.11 22 4.5 22h15c1.39 0 2.5-1.11 2.5-2.5v-15C22 3.11 20.89 2 19.5 2z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Akses</h4>
                <p class="text-secondary-gray-orange text-sm leading-relaxed">
                    Believing that every action today will create opportunities in the future
                </p>
            </div>

            <!-- Resolusi -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14H9v-2h3v2zm0-4H9V7h3v6z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Resolusi</h4>
                <p class="text-secondary-gray-orange text-sm leading-relaxed">
                    Renjana guarantees problem solving through deliberation and family spirit
                </p>
            </div>

            <!-- Integritas -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Integritas</h4>
                <p class="text-secondary-gray-orange text-sm leading-relaxed">
                    Belief in integrity is the basis for gaining trust and good reputation
                </p>
            </div>

            <!-- Advance -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4,2A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4A2,2 0 0,0 20,2H4M4,4H20V20H4V4M6,6V18H8V9H10V18H12V6H6M14,6V18H16V12H18V18H20V6H14Z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Advance</h4>
                <p class="text-secondary-gray-orange text-sm leading-relaxed">
                    Emphasizes the commitment to move forward and develop in achieving the best potential
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Our Values
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Our Values</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Nilai-Nilai Kami
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-8 text-center">VALUE EXTERNAL</h4>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Best services</h5>
                            <p class="text-secondary-gray-orange">Provide a satisfying service experience and always oriented to customer needs with high standards.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Responsive</h5>
                            <p class="text-secondary-gray-orange">Quickly respond to every customer problem and need with a deft attitude and the right solution.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Integrity and Trust</h5>
                            <p class="text-secondary-gray-orange">Maintaining integrity by always conducting business in an honest, open, and trustworthy manner.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Empathy</h5>
                            <p class="text-secondary-gray-orange">Prioritizing empathy and collaboration to build strong customer relationships. Sustainable</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Impact</h5>
                            <p class="text-secondary-gray-orange">Creating solutions that benefit both parties and ensure sustainable cooperation for the long term.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-8 text-center">VALUE INTERNAL</h4>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Berdedikasi</h5>
                            <p class="text-secondary-gray-orange">Prinsip yang mencerminkan dedikasi penuh dalam menyelesaikan tugas.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Edukasi</h5>
                            <p class="text-secondary-gray-orange">Renjana menjadi landasan bagi anggota untuk belajar dari kesalahan, berkembang, dan mencari solusi terbaik.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Relasi</h5>
                            <p class="text-secondary-gray-orange">Renjana mengutamakan membangun hubungan kerja yang baik tanpa diskriminasi, dengan rasa kebersamaan.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Keterbukaan</h5>
                            <p class="text-secondary-gray-orange">Renjana mendukung kebebasan berpendapat dan mendukung ide-ide baru dari semua anggota.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Akses</h5>
                            <p class="text-secondary-gray-orange">Believing that every action today will create opportunities in the future.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Resolusi</h5>
                            <p class="text-secondary-gray-orange">Renjana guarantees problem solving through deliberation and family spirit.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Integritas</h5>
                            <p class="text-secondary-gray-orange">Belief in integrity is the basis for gaining trust and good reputation.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-primary-gold rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                            <i class="ri-check-line text-sm text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-secondary-dark-brown mb-2">Advance</h5>
                            <p class="text-secondary-gray-orange">Emphasizes the commitment to move forward and develop in achieving the best potential.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Our Values -->
<section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Our Values</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Value External
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="space-y-8">
            <!-- Best Services -->
            <div class="text-center">
                <div class="w-10 h-10 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h5 class="text-lg font-bold text-secondary-dark-brown mb-3">Best services</h5>
                <p class="text-secondary-gray-orange leading-relaxed max-w-lg mx-auto">
                    Provide a satisfying service experience and always oriented to customer needs with high standards.
                </p>
            </div>

            <!-- Responsive -->
            <div class="text-center">
                <div class="w-10 h-10 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h5 class="text-lg font-bold text-secondary-dark-brown mb-3">Responsive</h5>
                <p class="text-secondary-gray-orange leading-relaxed max-w-lg mx-auto">
                    Quickly respond to every customer problem and need with a deft attitude and the right solution.
                </p>
            </div>

            <!-- Integrity and Trust -->
            <div class="text-center">
                <div class="w-10 h-10 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h5 class="text-lg font-bold text-secondary-dark-brown mb-3">Integrity and Trust</h5>
                <p class="text-secondary-gray-orange leading-relaxed max-w-lg mx-auto">
                    Maintaining integrity by always conducting business in an honest, open, and trustworthy manner.
                </p>
            </div>

            <!-- Empathy -->
            <div class="text-center">
                <div class="w-10 h-10 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h5 class="text-lg font-bold text-secondary-dark-brown mb-3">Empathy</h5>
                <p class="text-secondary-gray-orange leading-relaxed max-w-lg mx-auto">
                    Prioritizing empathy and collaboration to build strong customer relationships. Sustainable
                </p>
            </div>

            <!-- Impact -->
            <div class="text-center">
                <div class="w-10 h-10 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4" style="background: linear-gradient(135deg, #BF902D 0%, #D4AF37 100%);">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h5 class="text-lg font-bold text-secondary-dark-brown mb-3">Impact</h5>
                <p class="text-secondary-gray-orange leading-relaxed max-w-lg mx-auto">
                    Creating solutions that benefit both parties and ensure sustainable cooperation for the long term.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Strength -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Our Strength</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Kekuatan Kami
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Quality -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center hover:shadow-xl transition-shadow">
                <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-shield-check-line text-3xl text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">Quality</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Renjana maintains high product quality by partnering with a professional manufacturing company equipped with certified, high-tech machinery.
                </p>
            </div>

            <!-- Customer Engagement -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center hover:shadow-xl transition-shadow">
                <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-heart-3-line text-3xl text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">Customer Engagement</h4>
                <p class="text-secondary-gray-orange mb-6">
                    We strive to build close relationships with customers through transparency, allowing them to understand our brand better.
                </p>
            </div>

            <!-- Competitive Price -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center hover:shadow-xl transition-shadow">
                <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-price-tag-3-line text-3xl text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-secondary-dark-brown mb-4">Competitive Price</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Using a competitive pricing strategy, Renjana targets the middle-upper market with affordable, semi-premium cashews, making the premium taste accessible to everyone.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection