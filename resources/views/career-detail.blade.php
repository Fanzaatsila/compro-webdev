@extends('layouts.app')

@section('title', 'Detail Karir - {{ $carrier->job_title }} - Renjana Cashew')

@section('content')
<!-- Hero Banner untuk Detail Karir -->
<section class="relative py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <!-- Background Image -->
    @if($banners && $banners->banner_file)
    <img src="{{ asset('storage/' . $banners->banner_file) }}" alt="Event Banner" class="absolute inset-0 w-full h-full object-cover bg-opacity-50">
    @else
    <img src="{{ asset('assets/img/about_us/banner.jpg') }}" alt="Event Banner" class="absolute inset-0 w-full h-full object-cover bg-opacity-50">
    @endif
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <div class="mb-8">
            <span class="bg-white bg-opacity-20 text-white px-4 py-2 rounded-full text-sm font-medium">
                <i class="ri-briefcase-line mr-2"></i>
                Lowongan Kerja
            </span>
        </div>

        <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $carrier->job_title }}</h1>

        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <div class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm font-medium">
                <i class="ri-map-pin-line mr-2"></i>
                {{ $carrier->city }}
            </div>
            <div class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm font-medium">
                <i class="ri-time-line mr-2"></i>
                {{ ucfirst($carrier->type) }}
            </div>
            <div class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm font-medium">
                <i class="ri-calendar-line mr-2"></i>
                Segera
            </div>
        </div>

        <p class="text-xl text-gray-200 max-w-2xl mx-auto mb-8">
            Bergabunglah dengan tim Renjana Cashew sebagai {{ $carrier->job_title }} dan kembangkan skill Anda bersama kami
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <button onclick="scrollToApplication()" class="bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                <i class="ri-send-plane-line mr-2"></i>
                Lamar Sekarang
            </button>
            <button onclick="window.history.back()" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-secondary-dark-brown transition-colors">
                <i class="ri-arrow-left-line mr-2"></i>
                Kembali
            </button>
        </div>
    </div>
</section>

<!-- Detail Informasi Posisi -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Info Singkat -->
            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    <div class="bg-light rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold text-secondary-dark-brown mb-6">Ringkasan Posisi</h3>

                        <div class="space-y-4">
                            <div>
                                <label class="text-sm font-semibold text-secondary-gray-orange">Posisi:</label>
                                <p class="text-secondary-dark-brown font-medium">{{ $carrier->job_title }}</p>
                            </div>

                            <div>
                                <label class="text-sm font-semibold text-secondary-gray-orange">Lokasi:</label>
                                <p class="text-secondary-dark-brown font-medium">{{ $carrier->city }}</p>
                            </div>

                            <div>
                                <label class="text-sm font-semibold text-secondary-gray-orange">Status:</label>
                                <p class="text-secondary-dark-brown font-medium">{{ ucfirst($carrier->type) }}</p>
                            </div>

                            <div>
                                <label class="text-sm font-semibold text-secondary-gray-orange">Departemen:</label>
                                <p class="text-secondary-dark-brown font-medium">{{ $carrier->division }}</p>
                            </div>

                            <div>
                                <label class="text-sm font-semibold text-secondary-gray-orange">Salary Range:</label>
                                <p class="text-secondary-dark-brown font-medium">{{ $carrier->range_salary }}</p>
                            </div>

                            <!-- <div>
                                <label class="text-sm font-semibold text-secondary-gray-orange">Deadline:</label>
                                <p class="text-red-600 font-medium">15 Oktober 2025</p>
                            </div> -->
                        </div>

                        <!-- <div class="mt-8 pt-6 border-t border-gray-200">
                            <h4 class="font-bold text-secondary-dark-brown mb-4">Bagikan Lowongan</h4>
                            <div class="flex gap-3">
                                <button class="flex-1 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                                    <i class="ri-facebook-fill"></i>
                                </button>
                                <button class="flex-1 bg-blue-400 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition-colors">
                                    <i class="ri-twitter-fill"></i>
                                </button>
                                <button class="flex-1 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors">
                                    <i class="ri-whatsapp-fill"></i>
                                </button>
                                <button class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    <i class="ri-linkedin-fill"></i>
                                </button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Detail Content -->
            <div class="lg:col-span-2">
                <div class="space-y-8">
                    <!-- Deskripsi Pekerjaan -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-gold rounded-full flex items-center justify-center mr-4">
                                <i class="ri-file-text-line text-xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-secondary-dark-brown">Deskripsi Pekerjaan</h3>
                        </div>

                        <div class="prose max-w-none text-secondary-gray-orange">
                            {!! nl2br(e($carrier->description)) !!}
                        </div>
                    </div>

                    <!-- Kualifikasi -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-gold rounded-full flex items-center justify-center mr-4">
                                <i class="ri-user-star-line text-xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-secondary-dark-brown">Kualifikasi</h3>
                        </div>

                        <div class="prose max-w-none text-secondary-gray-orange">
                            {!! nl2br(e($carrier->qualification)) !!}
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-gold rounded-full flex items-center justify-center mr-4">
                                <i class="ri-gift-line text-xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-secondary-dark-brown">Benefit</h3>
                        </div>

                        <div class="prose max-w-none text-secondary-gray-orange">
                            {!! nl2br(e($carrier->benefits)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Aplikasi -->
<!-- <section id="application" class="py-20 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-dark-brown mb-4">
                Siap Bergabung dengan Kami?
            </h2>
            <p class="text-xl text-secondary-gray-orange max-w-2xl mx-auto">
                Lengkapi form aplikasi di bawah ini dan mulai perjalanan karir Anda bersama Renjana Cashew
            </p>
        </div>
        
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-secondary-dark-brown mb-2">Nama Lengkap *</label>
                        <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-gold focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-secondary-dark-brown mb-2">Email *</label>
                        <input type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-gold focus:border-transparent">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-secondary-dark-brown mb-2">Nomor WhatsApp *</label>
                        <input type="tel" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-gold focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-secondary-dark-brown mb-2">Lokasi Domisili *</label>
                        <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-gold focus:border-transparent">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-secondary-dark-brown mb-2">Pendidikan Terakhir *</label>
                    <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-gold focus:border-transparent">
                        <option value="">Pilih Pendidikan</option>
                        <option value="sma">SMA/SMK</option>
                        <option value="d3">Diploma 3</option>
                        <option value="s1">Sarjana (S1)</option>
                        <option value="s2">Magister (S2)</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-secondary-dark-brown mb-2">Upload CV (PDF) *</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary-gold transition-colors">
                        <input type="file" accept=".pdf" class="hidden" id="cv-upload">
                        <label for="cv-upload" class="cursor-pointer">
                            <i class="ri-upload-cloud-2-line text-4xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600">Klik untuk upload CV atau drag & drop</p>
                            <p class="text-sm text-gray-400">Format: PDF, Max: 5MB</p>
                        </label>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-secondary-dark-brown mb-2">Portfolio/LinkedIn (Opsional)</label>
                    <input type="url" placeholder="https://" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-gold focus:border-transparent">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-secondary-dark-brown mb-2">Ceritakan mengapa Anda tertarik dengan posisi ini *</label>
                    <textarea required rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-gold focus:border-transparent" placeholder="Tuliskan motivasi dan ekspektasi Anda..."></textarea>
                </div>
                
                <div class="flex items-start">
                    <input type="checkbox" required class="mt-1 mr-3">
                    <label class="text-sm text-secondary-gray-orange">
                        Saya setuju dengan <a href="#" class="text-primary-gold hover:underline">syarat dan ketentuan</a> yang berlaku dan memberikan izin untuk memproses data pribadi saya sesuai dengan <a href="#" class="text-primary-gold hover:underline">kebijakan privasi</a> Renjana Cashew.
                    </label>
                </div>
                
                <div class="text-center pt-6">
                    <button type="submit" class="bg-gradient-gold text-white px-12 py-4 rounded-full font-semibold text-lg hover:opacity-90 transition-opacity">
                        <i class="ri-send-plane-line mr-2"></i>
                        Kirim Aplikasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</section> -->

<!-- Call to Action -->
<!-- <section class="py-20 bg-secondary-dark-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Ada Pertanyaan?
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Tim HR kami siap membantu menjawab pertanyaan Anda tentang posisi ini
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="mailto:hr@renjanacashew.com" class="inline-block bg-gradient-gold text-white px-8 py-4 rounded-full font-semibold hover:opacity-90 transition-opacity">
                <i class="ri-mail-line mr-2"></i>
                Email HR Team
            </a>
            <a href="https://wa.me/6281234567890?text=Halo, saya ingin bertanya tentang posisi Social Media Admin" target="_blank" class="inline-block border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-secondary-dark-brown transition-colors">
                <i class="ri-whatsapp-line mr-2"></i>
                Chat WhatsApp
            </a>
        </div>
    </div>
</section> -->

<script>
    function scrollToApplication() {
        document.getElementById('application').scrollIntoView({
            behavior: 'smooth'
        });
    }

    // File upload handling
    document.getElementById('cv-upload').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const label = e.target.nextElementSibling;
            label.innerHTML = `
            <i class="ri-file-pdf-line text-4xl text-primary-gold mb-2"></i>
            <p class="text-secondary-dark-brown font-medium">${file.name}</p>
            <p class="text-sm text-gray-400">Klik untuk ganti file</p>
        `;
        }
    });

    // Form submission
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();

        // Show success message (replace with actual form handling)
        alert('Aplikasi Anda telah berhasil dikirim! Tim HR akan menghubungi Anda dalam 3-5 hari kerja.');
    });
</script>
@endsection