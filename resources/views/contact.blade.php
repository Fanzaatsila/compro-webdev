@extends('layouts.app')

@section('title', 'Contact - Renjana Cashew')

@section('content')
<!-- Banner Contact -->
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
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Hubungi Kami</h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto">
            Kami siap membantu Anda dengan segala kebutuhan dan pertanyaan seputar Renjana Cashew
        </p>
    </div>
</section>

<!-- Contact Categories -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Kontak Kategori</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Pilih Departemen yang Tepat
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Untuk pelayanan yang lebih cepat dan tepat, silakan pilih departemen yang sesuai dengan kebutuhan Anda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($contacts as $contact)
            <!-- {{ $contact->title }} -->
            <div class="bg-light rounded-2xl p-8 text-center hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    @if($contact->title == 'Customer Service')
                    <i class="ri-customer-service-2-line text-2xl text-white"></i>
                    @elseif($contact->title == 'Business & Partnership')
                    <i class="ri-briefcase-line text-2xl text-white"></i>
                    @elseif($contact->title == 'Media & PR')
                    <i class="ri-newspaper-line text-2xl text-white"></i>
                    @else
                    <i class="ri-contacts-line text-2xl text-white"></i>
                    @endif
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">{{ $contact->title }}</h4>
                <p class="text-secondary-gray-orange mb-6 text-sm">
                    {{ $contact->description }}
                </p>

                <div class="space-y-3 mb-6">
                    <div class="flex items-center justify-center">
                        <i class="ri-phone-line text-primary-gold mr-2"></i>
                        <a href="tel:{{ str_replace([' ', '-'], '', $contact->number) }}" class="text-secondary-dark-brown hover:text-primary-gold">
                            {{ $contact->number }}
                        </a>
                    </div>
                    <div class="flex items-center justify-center">
                        <i class="ri-mail-line text-primary-gold mr-2"></i>
                        <a href="mailto:{{ $contact->email }}" class="text-secondary-dark-brown hover:text-primary-gold text-sm">
                            {{ $contact->email }}
                        </a>
                    </div>
                </div>

                <div class="flex gap-2">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->number) }}" target="_blank" class="flex-1 bg-green-500 text-white py-2 px-4 rounded-full text-sm font-semibold hover:bg-green-600 transition-colors">
                        <i class="ri-whatsapp-line mr-1"></i>
                        WhatsApp
                    </a>
                    <a href="mailto:{{ $contact->email }}" class="flex-1 bg-primary-gold text-white py-2 px-4 rounded-full text-sm font-semibold hover:opacity-90 transition-opacity">
                        <i class="ri-mail-line mr-1"></i>
                        Email
                    </a>
                </div>

                <div class="mt-4 text-xs text-secondary-gray-orange">
                    <strong>Jam Operasional:</strong><br>
                    {!! nl2br(e($contact->operational_time)) !!}
                </div>
            </div>
            @empty
            <div class="col-span-full text-center p-8">
                <p class="text-lg text-secondary-gray-orange">Belum ada kontak yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Head Office & Factory -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Lokasi Kami</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Kantor Pusat & Pabrik
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Kunjungi langsung kantor pusat dan fasilitas produksi kami untuk melihat proses pembuatan kacang mede premium
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            @foreach($offices as $office)
            <!-- {{ $office['name'] }} -->
            <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-xl">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-gold rounded-full flex items-center justify-center mr-4">
                        <i class="{{ $office['icon'] }} text-xl text-white"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-secondary-dark-brown">{{ $office['name'] }}</h4>
                </div>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <i class="ri-map-pin-line text-primary-gold text-xl mr-3 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-secondary-dark-brown mb-1">Alamat:</h5>
                            <p class="text-secondary-gray-orange">
                                {!! nl2br(e($office['address'])) !!}
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <i class="ri-time-line text-primary-gold text-xl mr-3 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-secondary-dark-brown mb-1">Jam Operasional:</h5>
                            <p class="text-secondary-gray-orange">
                                {!! nl2br(e($office['hours'])) !!}
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <i class="ri-phone-line text-primary-gold text-xl mr-3 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-secondary-dark-brown mb-1">Kontak:</h5>
                            <p class="text-secondary-gray-orange">
                                @if(isset($office['phone']))
                                <a href="tel:{{ str_replace([' ', '-'], '', $office['phone']) }}" class="hover:text-primary-gold transition-colors">
                                    Telp: {{ $office['phone'] }}
                                </a><br>
                                @endif

                                @if(isset($office['fax']))
                                <a href="tel:{{ str_replace([' ', '-'], '', $office['fax']) }}" class="hover:text-primary-gold transition-colors">
                                    Fax: {{ $office['fax'] }}
                                </a>
                                @endif

                                @if(isset($office['email']))
                                <a href="mailto:{{ $office['email'] }}" class="hover:text-primary-gold transition-colors">
                                    Email: {{ $office['email'] }}
                                </a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex gap-3">
                    <a href="{{ $office['map_url'] }}" target="_blank"
                        class="flex-1 bg-gradient-gold text-white py-3 px-4 rounded-full font-semibold text-center hover:opacity-90 transition-opacity">
                        <i class="ri-navigation-line mr-2"></i>
                        Petunjuk Arah
                    </a>

                    @if(isset($office['whatsapp']))
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $office['whatsapp']) }}" target="_blank"
                        class="px-4 py-3 border-2 border-primary-gold text-primary-gold rounded-full hover:bg-primary-gold hover:text-white transition-colors">
                        <i class="ri-whatsapp-line"></i>
                    </a>
                    @endif

                    @if(isset($office['email']) && !isset($office['whatsapp']))
                    <a href="mailto:{{ $office['email'] }}"
                        class="px-4 py-3 border-2 border-primary-gold text-primary-gold rounded-full hover:bg-primary-gold hover:text-white transition-colors">
                        <i class="ri-mail-line"></i>
                    </a>
                    @endif
                </div>

                @if(isset($office['tour_info']))
                <!-- Factory Tour Info -->
                <div class="mt-6 p-4 bg-light rounded-xl">
                    <h5 class="font-bold text-secondary-dark-brown mb-2 flex items-center">
                        <i class="ri-information-line text-primary-gold mr-2"></i>
                        Info Kunjungan Pabrik
                    </h5>
                    <p class="text-sm text-secondary-gray-orange">
                        {{ $office['tour_info'] }}
                    </p>
                </div>
                @endif
            </div>
            @endforeach

            <div class="flex items-start">
                <i class="ri-time-line text-primary-gold text-xl mr-3 mt-1"></i>
                <div>
                    <h5 class="font-bold text-secondary-dark-brown mb-1">Jam Operasional:</h5>
                    <p class="text-secondary-gray-orange">
                        Senin - Jumat: 07:00 - 16:00 WIB<br>
                        Sabtu: 07:00 - 12:00 WIB<br>
                        Minggu & Hari Libur: Tutup
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <i class="ri-phone-line text-primary-gold text-xl mr-3 mt-1"></i>
                <div>
                    <h5 class="font-bold text-secondary-dark-brown mb-1">Kontak:</h5>
                    <p class="text-secondary-gray-orange">
                        <a href="tel:+62318901234" class="hover:text-primary-gold transition-colors">
                            Telp: +62 31-8901-234
                        </a><br>
                        <a href="mailto:factory@renjanacashew.com" class="hover:text-primary-gold transition-colors">
                            Email: factory@renjanacashew.com
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="flex gap-3">
            <a href="https://maps.google.com/?q=Jl.+Industri+Raya+No.+45+Sidoarjo" target="_blank"
                class="flex-1 bg-gradient-gold text-white py-3 px-4 rounded-full font-semibold text-center hover:opacity-90 transition-opacity">
                <i class="ri-navigation-line mr-2"></i>
                Petunjuk Arah
            </a>
            <a href="mailto:factory@renjanacashew.com"
                class="px-4 py-3 border-2 border-primary-gold text-primary-gold rounded-full hover:bg-primary-gold hover:text-white transition-colors">
                <i class="ri-mail-line"></i>
            </a>
        </div>

        <!-- Factory Tour Info -->
        <div class="mt-6 p-4 bg-light rounded-xl">
            <h5 class="font-bold text-secondary-dark-brown mb-2 flex items-center">
                <i class="ri-camera-line text-primary-gold mr-2"></i>
                Factory Tour
            </h5>
            <p class="text-sm text-secondary-gray-orange">
                Kunjungi pabrik kami dan lihat proses produksi kacang mede premium.
                <strong>Reservasi diperlukan minimal 3 hari sebelumnya.</strong>
            </p>
        </div>
    </div>
    </div>
    </div>
</section>

<!-- Social Media & Online Presence -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Media Sosial</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Ikuti Kami di Media Sosial
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Tetap terhubung dengan kami melalui berbagai platform media sosial untuk update terbaru, promo menarik, dan konten edukatif
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Instagram -->
            <a href="https://instagram.com/renjanacashew" target="_blank" class="group">
                <div class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl p-8 text-center text-white hover:scale-105 transition-transform">
                    <i class="ri-instagram-line text-4xl mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">Instagram</h4>
                    <p class="text-sm mb-4 opacity-90">@renjanacashew</p>
                    <div class="text-xs opacity-75">
                        <strong>25.8K</strong> Followers<br>
                        Daily content & stories
                    </div>
                </div>
            </a>

            <!-- TikTok -->
            <a href="https://tiktok.com/@renjanacashew" target="_blank" class="group">
                <div class="bg-black rounded-2xl p-8 text-center text-white hover:scale-105 transition-transform">
                    <i class="ri-tiktok-line text-4xl mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">TikTok</h4>
                    <p class="text-sm mb-4 opacity-90">@renjanacashew</p>
                    <div class="text-xs opacity-75">
                        <strong>18.2K</strong> Followers<br>
                        Recipe videos & tips
                    </div>
                </div>
            </a>

            <!-- Facebook -->
            <a href="https://facebook.com/renjanacashew" target="_blank" class="group">
                <div class="bg-blue-600 rounded-2xl p-8 text-center text-white hover:scale-105 transition-transform">
                    <i class="ri-facebook-line text-4xl mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">Facebook</h4>
                    <p class="text-sm mb-4 opacity-90">Renjana Cashew</p>
                    <div class="text-xs opacity-75">
                        <strong>32.5K</strong> Likes<br>
                        News & community
                    </div>
                </div>
            </a>

            <!-- YouTube -->
            <a href="https://youtube.com/@renjanacashew" target="_blank" class="group">
                <div class="bg-red-600 rounded-2xl p-8 text-center text-white hover:scale-105 transition-transform">
                    <i class="ri-youtube-line text-4xl mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">YouTube</h4>
                    <p class="text-sm mb-4 opacity-90">Renjana Cashew</p>
                    <div class="text-xs opacity-75">
                        <strong>12.1K</strong> Subscribers<br>
                        Educational videos
                    </div>
                </div>
            </a>
        </div>

        <!-- Newsletter Subscription -->
        <!-- <div class="mt-16">
            <div class="bg-secondary-dark-brown rounded-2xl p-8 lg:p-12 text-white text-center">
                <h4 class="text-2xl font-bold mb-4">Newsletter Renjana</h4>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                    Berlangganan newsletter kami untuk mendapatkan update produk terbaru, promo eksklusif, dan tips seputar kacang mede
                </p>
                
                <form class="max-w-md mx-auto flex gap-2">
                    <input type="email" 
                           placeholder="Masukkan email Anda" 
                           class="flex-1 px-4 py-3 rounded-full border-0 text-secondary-dark-brown focus:ring-2 focus:ring-primary-gold">
                    <button type="submit" 
                            class="bg-gradient-gold text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                        Subscribe
                    </button>
                </form>
                
                <p class="text-xs text-gray-400 mt-4">
                    Kami menghargai privacy Anda. Email tidak akan dibagikan ke pihak ketiga.
                </p>
            </div>
        </div> -->
    </div>
</section>

<!-- Quick Contact Form -->
<!-- <section class="py-20 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Quick Contact</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-secondary-dark-brown mb-6">
                Kirim Pesan Langsung
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-6"></div>
            <p class="text-lg text-secondary-gray-orange">
                Punya pertanyaan? Kirimkan pesan kepada kami dan kami akan merespons dalam waktu 24 jam
            </p>
        </div>

        <div class="bg-white rounded-2xl p-8 lg:p-12 shadow-xl">
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-bold text-secondary-dark-brown mb-2">Nama Lengkap *</label>
                        <input type="text"
                            id="name"
                            name="name"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-gold focus:border-transparent"
                            placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-bold text-secondary-dark-brown mb-2">Email *</label>
                        <input type="email"
                            id="email"
                            name="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-gold focus:border-transparent"
                            placeholder="Masukkan alamat email Anda">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-bold text-secondary-dark-brown mb-2">Nomor Telepon</label>
                        <input type="tel"
                            id="phone"
                            name="phone"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-gold focus:border-transparent"
                            placeholder="Contoh: +62 812-3456-789">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-bold text-secondary-dark-brown mb-2">Kategori *</label>
                        <select id="subject"
                            name="subject"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-gold focus:border-transparent">
                            <option value="">Pilih kategori...</option>
                            <option value="general">General Inquiry</option>
                            <option value="product">Product Information</option>
                            <option value="order">Order & Shipping</option>
                            <option value="partnership">Partnership</option>
                            <option value="career">Career</option>
                            <option value="complaint">Complaint</option>
                            <option value="suggestion">Suggestion</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-bold text-secondary-dark-brown mb-2">Pesan *</label>
                    <textarea id="message"
                        name="message"
                        rows="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-gold focus:border-transparent"
                        placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>

                <div class="flex items-center">
                    <input type="checkbox"
                        id="consent"
                        name="consent"
                        class="w-4 h-4 text-primary-gold bg-gray-100 border-gray-300 rounded focus:ring-primary-gold focus:ring-2">
                    <label for="consent" class="ml-2 text-sm text-secondary-gray-orange">
                        Saya menyetujui penggunaan data pribadi untuk keperluan komunikasi dengan Renjana Cashew
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-gradient-gold text-white px-12 py-4 rounded-full font-semibold text-lg hover:opacity-90 transition-opacity">
                        <i class="ri-send-plane-line mr-2"></i>
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section> -->

<!-- Map & Address -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Lokasi</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-secondary-dark-brown mb-6">
                Temukan Kami di Peta
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="bg-gray-200 rounded-2xl h-96 flex items-center justify-center">
            <!-- Google Maps Embedded would go here -->
            <div class="text-center">
                <i class="ri-map-pin-line text-6xl text-primary-gold mb-4"></i>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-2">Peta Interaktif</h4>
                <p class="text-secondary-gray-orange mb-4">
                    Temukan lokasi kantor pusat dan pabrik kami
                </p>
                <a href="https://maps.google.com/?q=Renjana+Cashew+Surabaya" target="_blank"
                    class="inline-block bg-gradient-gold text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                    Buka di Google Maps
                </a>
            </div>
        </div>
    </div>
</section>
@endsection