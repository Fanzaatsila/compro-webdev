@extends('layouts.app')

@section('title', 'carrier - Renjana Cashew')

@section('content')
<!-- Banner carrier -->
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
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Renjana Karir</h1>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-primary-gold">
            Tumbuh Bersama. Berkarya Bersama
        </h2>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto">
            Jadi Bagian dari Renjana
        </p>
    </div>
</section>

<!-- Hero Message -->
<section class="py-20 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-white rounded-3xl p-12 shadow-lg">
            <div class="w-20 h-20 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-8">
                <i class="ri-heart-pulse-line text-3xl text-white"></i>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-dark-brown mb-8 leading-relaxed">
                Filosofi Kerja Kami
            </h2>
            <p class="text-lg md:text-xl text-secondary-gray-orange leading-relaxed">
                Kami percaya bahwa bekerja bukan sekadar rutinitas, tapi perjalanan untuk berkembang. 
                Renjana memberi ruang untuk tumbuh, berkontribusi, dan jadi bagian dari cerita di balik 
                setiap produk yang bermakna.
            </p>
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

<!-- Profil Perusahaan & Produk -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Apa Benefit Renjana Karir ?
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
                    <img src="{{ asset('assets/img/benefit.jpeg') }}"
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
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Mengapa Harus Renjana Karir ?
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/img/benefit2.jpeg') }}"
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

<!-- Mengapa Renjana Karir -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Benefit</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Mengapa Renjana Karir?
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Renjana Cashew menawarkan lingkungan kerja yang dinamis, budaya perusahaan yang positif, dan kesempatan pengembangan karir yang luas
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-rocket-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Pertumbuhan Cepat</h4>
                <p class="text-secondary-gray-orange">Perusahaan yang berkembang pesat memberikan banyak peluang karir dan promosi internal</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-team-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Tim Solid</h4>
                <p class="text-secondary-gray-orange">Bekerja dengan tim yang kompak, saling mendukung, dan memiliki visi yang sama</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-lightbulb-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Inovasi</h4>
                <p class="text-secondary-gray-orange">Dorong kreativitas dan inovasi dalam mengembangkan produk dan strategi bisnis</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-book-read-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Pengembangan Diri</h4>
                <p class="text-secondary-gray-orange">Program training dan pengembangan keterampilan untuk meningkatkan potensi karyawan</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-heart-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Work-Life Balance</h4>
                <p class="text-secondary-gray-orange">Keseimbangan antara kehidupan pribadi dan profesional yang sehat</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-gift-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Benefit Menarik</h4>
                <p class="text-secondary-gray-orange">Paket kompensasi dan benefit yang kompetitif serta program reward karyawan</p>
            </div>
        </div>
    </div>
</section>

<!-- Employee Benefits -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Program Magang</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Benefit Program Magang Gen Z
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Program magang yang dirancang khusus untuk Gen Z dengan berbagai fasilitas dan benefit menarik
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Networking -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-global-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Networking</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Networking dengan para Business owner dan profesional dari segala bidang industri.
                </p>
            </div>

            <!-- Monthly Fee -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-money-dollar-circle-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Monthly Fee</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Mendapatkan kompensasi sebagai bentuk apresiasi atas kontribusi yang diberikan selama program.
                </p>
            </div>

            <!-- Gen Z Partner -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-group-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Gen Z Partner</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Dikelilingi partner sesama Gen Z yang sefrekuensi. Buat proses kerja jadi lebih seru, terbuka, dan suportif.
                </p>
            </div>

            <!-- Boardgame Session -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-gamepad-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Boardgame Session</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Sesi boardgame sebagai media interaktif yang mendorong kolaborasi tim, strategi, bonding antar peserta.
                </p>
            </div>

            <!-- Kelas Pengembangan -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-graduation-cap-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Kelas Pengembangan</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Tidak hanya "Ikut Kerja" tapi juga "Bertumbuh Bersama". Belajar langsung dari lingkungan profesional dan memahami bagaimana teori diterapkan dalam praktik.
                </p>
            </div>

            <!-- Mentoring Bisnis -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-user-star-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Mentoring Bisnis</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Mendapat kesempatan untuk mengikuti sesi mentoring bersama praktisi berpengalaman dari luar kantor. Memberikan wawasan industri yang lebih luas, perspektif baru, serta arahan pengembangan Karir secara nyata dan aplikatif.
                </p>
            </div>

            <!-- Sesi Konseling -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-mental-health-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Sesi Konseling</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Konseling langsung terkait dengan masalah pribadi ataupun keluhan selama magang bebas dengan HR.
                </p>
            </div>

            <!-- Makan Bersama -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-restaurant-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Makan Bersama</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Momen makan bersama untuk mempererat relasi, menciptakan lingkungan kerja yang hangat dan inklusif.
                </p>
            </div>

            <!-- Bonding -->
            <div class="bg-light rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-team-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Bonding</h4>
                <p class="text-secondary-gray-orange mb-6">
                    Kegiatan bonding untuk memperkuat kerja sama tim, refreshing, dan menjaga semangat kerja.
                </p>
            </div>
        </div>

        <!-- Additional Benefits -->
        <div class="mt-16 bg-secondary-dark-brown rounded-2xl p-8 lg:p-12 text-white">
            <h4 class="text-2xl font-bold text-center mb-8">Program Magang Gen Z</h4>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="text-center">
                    <i class="ri-calendar-check-line text-3xl text-primary-gold mb-3"></i>
                    <h5 class="font-bold mb-2">Fleksibel</h5>
                    <p class="text-sm text-gray-300">Jadwal kerja yang fleksibel menyesuaikan kebutuhan</p>
                </div>

                <div class="text-center">
                    <i class="ri-road-map-line text-3xl text-primary-gold mb-3"></i>
                    <h5 class="font-bold mb-2">Carrier Path</h5>
                    <p class="text-sm text-gray-300">Jalur Karir yang jelas dan terstruktur</p>
                </div>

                <div class="text-center">
                    <i class="ri-home-wifi-line text-3xl text-primary-gold mb-3"></i>
                    <h5 class="font-bold mb-2">Hybrid Working</h5>
                    <p class="text-sm text-gray-300">Kombinasi work from home dan on site</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Openings -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Lowongan Kerja</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Posisi Terbuka
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Temukan posisi yang sesuai dengan keahlian dan passion Anda di Renjana Cashew
            </p>
        </div>

        <!-- Filter Kategori Jabatan -->
        <div class="mb-12">
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('carrier') }}" class="filter-btn {{ !request('type') ? 'active bg-gradient-gold text-white' : 'bg-white border-2 border-primary-gold text-primary-gold' }} px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-all">
                    Semua Posisi
                </a>
                <a href="{{ route('carrier', ['type' => 'full-time']) }}" class="filter-btn {{ request('type') == 'full-time' ? 'active bg-gradient-gold text-white' : 'bg-white border-2 border-primary-gold text-primary-gold' }} px-6 py-3 rounded-full font-semibold hover:bg-primary-gold hover:text-white transition-all">
                    Full-time
                </a>
                <a href="{{ route('carrier', ['type' => 'part-time']) }}" class="filter-btn {{ request('type') == 'part-time' ? 'active bg-gradient-gold text-white' : 'bg-white border-2 border-primary-gold text-primary-gold' }} px-6 py-3 rounded-full font-semibold hover:bg-primary-gold hover:text-white transition-all">
                    Part-time
                </a>
                <a href="{{ route('carrier', ['type' => 'internship']) }}" class="filter-btn {{ request('type') == 'internship' ? 'active bg-gradient-gold text-white' : 'bg-white border-2 border-primary-gold text-primary-gold' }} px-6 py-3 rounded-full font-semibold hover:bg-primary-gold hover:text-white transition-all">
                    Internship
                </a>
                <a href="{{ route('carrier', ['type' => 'freelance']) }}" class="filter-btn {{ request('type') == 'freelance' ? 'active bg-gradient-gold text-white' : 'bg-white border-2 border-primary-gold text-primary-gold' }} px-6 py-3 rounded-full font-semibold hover:bg-primary-gold hover:text-white transition-all">
                    Freelance
                </a>
            </div>
        </div>

        <!-- Job Listings -->
        <div id="jobsContainer" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @forelse($carriers as $carrier)
            <div class="job-card bg-white rounded-2xl p-8 hover:shadow-xl transition-shadow" data-category="{{ str_replace('-', '', $carrier->type) }}">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h4 class="text-2xl font-bold text-secondary-dark-brown mb-2">{{ $carrier->job_title }}</h4>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gradient-gold text-white px-3 py-1 rounded-full text-sm">{{ ucfirst($carrier->type) }}</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">{{ $carrier->division }}</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">{{ $carrier->city }}</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg font-bold text-primary-gold">{{ $carrier->range_salary }}</div>
                        <div class="text-sm text-secondary-gray-orange">/bulan</div>
                    </div>
                </div>

                <div class="space-y-4 mb-6">
                    <div>
                        <h5 class="font-bold text-secondary-dark-brown mb-2">Deskripsi:</h5>
                        <div class="text-secondary-gray-orange text-sm">
                            {!! Str::limit(nl2br(e($carrier->description)), 150) !!}
                        </div>
                    </div>

                    <div>
                        <h5 class="font-bold text-secondary-dark-brown mb-2">Kualifikasi:</h5>
                        <div class="text-secondary-gray-orange text-sm">
                            {!! Str::limit(nl2br(e($carrier->qualification)), 150) !!}
                        </div>
                    </div>
                </div>

                <div class="flex gap-3">
                    <a href="{{ route('carrier.detail', $carrier->id) }}" class="flex-1 bg-gradient-gold text-white py-3 rounded-full font-semibold hover:opacity-90 transition-opacity text-center">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-2 text-center py-12">
                <div class="text-6xl text-gray-300 mb-4">
                    <i class="ri-file-search-line"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary-dark-brown mb-2">Tidak Ada Lowongan Tersedia</h3>
                <p class="text-secondary-gray-orange">Saat ini tidak ada lowongan kerja yang tersedia. Silakan cek kembali nanti.</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <p class="text-secondary-gray-orange mb-6">
                Tidak menemukan posisi yang sesuai? Kirimkan CV dan surat lamaran untuk posisi lainnya.
            </p>
            <a href="mailto:hr@renjanacashew.com" class="inline-block bg-gradient-gold text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                Kirim Lamaran Umum
            </a>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-20 bg-secondary-dark-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Mulai Karir Impian Anda Bersama Renjana
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Bergabunglah dengan tim yang passionate dan berkembang bersama perusahaan yang terus tumbuh
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="mailto:hr@renjanacashew.com" class="inline-block bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                <i class="ri-mail-line mr-2"></i>
                Email HR Team
            </a>
            <a href="https://wa.me/6281234567890?text=Halo, saya ingin mengetahui informasi lowongan kerja di Renjana Cashew" target="_blank" class="inline-block border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-secondary-dark-brown transition-colors">
                <i class="ri-whatsapp-line mr-2"></i>
                WhatsApp HR
            </a>
        </div>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .job-card {
        transition: all 0.3s ease-in-out;
        animation: fadeIn 0.5s ease-in-out;
    }

    .filter-btn {
        transition: all 0.3s ease-in-out;
    }
</style>
@endsection