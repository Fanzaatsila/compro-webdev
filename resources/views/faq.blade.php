@extends('layouts.app')

@section('title', 'FAQ - Renjana Cashew')

@section('content')
<!-- Banner FAQ -->
<section class="relative h-96 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-gold opacity-90"></div>
    <div class="absolute inset-0 bg-black opacity-20"></div>
    
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1434494878577-86c23bcb06b9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
    </div>
    
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">FAQ</h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto">
            Frequently Asked Questions - Temukan jawaban atas pertanyaan yang sering diajukan
        </p>
    </div>
</section>

<!-- FAQ Search -->
<section class="py-12 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-secondary-dark-brown mb-4">
                Cari Jawaban yang Anda Butuhkan
            </h2>
            <p class="text-secondary-gray-orange mb-6">
                Gunakan kotak pencarian untuk menemukan informasi dengan cepat
            </p>
        </div>
        
        <div class="relative max-w-2xl mx-auto">
            <input type="text" 
                   id="faqSearch"
                   placeholder="Cari pertanyaan atau topik..." 
                   class="w-full px-6 py-4 pl-12 pr-6 border border-gray-300 rounded-full text-lg focus:ring-2 focus:ring-primary-gold focus:border-transparent">
            <i class="ri-search-line absolute left-4 top-1/2 transform -translate-y-1/2 text-2xl text-primary-gold"></i>
        </div>
    </div>
</section>

<!-- FAQ Categories -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Kategori FAQ</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Pilih Kategori Pertanyaan
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Temukan jawaban berdasarkan kategori yang sesuai dengan kebutuhan Anda
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product & Quality -->
            <div class="bg-light rounded-2xl p-8 text-center hover:shadow-xl transition-shadow cursor-pointer" 
                 onclick="scrollToSection('product-quality')">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-product-hunt-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Produk & Kualitas</h4>
                <p class="text-secondary-gray-orange mb-4 text-sm">
                    Pertanyaan seputar produk, kualitas, sertifikasi, dan spesifikasi kacang mede
                </p>
                <div class="text-primary-gold font-semibold">8 Pertanyaan</div>
            </div>

            <!-- Order & Shipping -->
            <div class="bg-light rounded-2xl p-8 text-center hover:shadow-xl transition-shadow cursor-pointer" 
                 onclick="scrollToSection('order-shipping')">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-truck-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Pemesanan & Pengiriman</h4>
                <p class="text-secondary-gray-orange mb-4 text-sm">
                    Cara pemesanan, metode pembayaran, ongkos kirim, dan tracking pengiriman
                </p>
                <div class="text-primary-gold font-semibold">12 Pertanyaan</div>
            </div>

            <!-- Partnership & Business -->
            <div class="bg-light rounded-2xl p-8 text-center hover:shadow-xl transition-shadow cursor-pointer" 
                 onclick="scrollToSection('partnership-business')">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-handshake-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Kemitraan & Bisnis</h4>
                <p class="text-secondary-gray-orange mb-4 text-sm">
                    Program reseller, partnership, affiliate, dan kerjasama bisnis lainnya
                </p>
                <div class="text-primary-gold font-semibold">6 Pertanyaan</div>
            </div>

            <!-- Company Info -->
            <div class="bg-light rounded-2xl p-8 text-center hover:shadow-xl transition-shadow cursor-pointer" 
                 onclick="scrollToSection('company-info')">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-building-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Informasi Perusahaan</h4>
                <p class="text-secondary-gray-orange mb-4 text-sm">
                    Sejarah perusahaan, lokasi, sertifikasi, dan informasi umum lainnya
                </p>
                <div class="text-primary-gold font-semibold">5 Pertanyaan</div>
            </div>

            <!-- Health & Nutrition -->
            <div class="bg-light rounded-2xl p-8 text-center hover:shadow-xl transition-shadow cursor-pointer" 
                 onclick="scrollToSection('health-nutrition')">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-heart-pulse-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Kesehatan & Nutrisi</h4>
                <p class="text-secondary-gray-orange mb-4 text-sm">
                    Manfaat kesehatan, nilai nutrisi, alergi, dan konsumsi yang disarankan
                </p>
                <div class="text-primary-gold font-semibold">7 Pertanyaan</div>
            </div>

            <!-- Technical Support -->
            <div class="bg-light rounded-2xl p-8 text-center hover:shadow-xl transition-shadow cursor-pointer" 
                 onclick="scrollToSection('technical-support')">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-customer-service-line text-2xl text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-secondary-dark-brown mb-4">Dukungan Teknis</h4>
                <p class="text-secondary-gray-orange mb-4 text-sm">
                    Website, aplikasi, akun, password, dan masalah teknis lainnya
                </p>
                <div class="text-primary-gold font-semibold">4 Pertanyaan</div>
            </div>
        </div>
    </div>
</section>

<!-- Product & Quality FAQ -->
<section id="product-quality" class="py-20 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="ri-product-hunt-line text-2xl text-white"></i>
            </div>
            <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Produk & Kualitas</h2>
            <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
        </div>
        
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Apa yang membedakan kacang mede Renjana dengan produk lain di pasaran?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Kacang mede Renjana dipilih dari bahan baku premium dengan standar kualitas internasional. Kami menggunakan proses roasting yang tepat untuk menghasilkan tekstur renyah dan rasa gurih alami. Produk kami telah tersertifikasi HACCP, ISO 22000, dan mendapat sertifikat halal MUI. Selain itu, kami tidak menggunakan MSG, pengawet buatan, atau bahan kimia berbahaya.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Berapa lama masa simpan produk kacang mede Renjana?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Masa simpan kacang mede Renjana adalah 12 bulan dari tanggal produksi jika disimpan dalam kondisi yang tepat (tempat sejuk, kering, dan tertutup rapat). Setelah kemasan dibuka, disarankan untuk menghabiskan dalam waktu 1-2 bulan untuk menjaga kualitas rasa dan tekstur optimal. Simpan dalam wadah kedap udara setelah dibuka.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Apakah kacang mede Renjana aman untuk penderita diabetes?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Kacang mede Renjana memiliki indeks glikemik yang rendah sehingga relatif aman untuk penderita diabetes jika dikonsumsi dalam porsi yang wajar. Namun, kami tetap menyarankan untuk berkonsultasi dengan dokter atau ahli gizi terlebih dahulu. Disarankan konsumsi maksimal 15-20 butir per hari untuk penderita diabetes. Produk Original tanpa perasa adalah pilihan terbaik.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Bagaimana cara menyimpan kacang mede agar tetap renyah?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Untuk menjaga kerenyahan, simpan kacang mede dalam wadah kedap udara di tempat yang sejuk dan kering. Hindari paparan sinar matahari langsung dan tempat lembab. Jika tinggal di daerah tropis, Anda bisa menyimpannya di kulkas. Jangan campurkan dengan makanan yang memiliki aroma kuat karena kacang mede mudah menyerap bau.
                    </p>
                </div>
            </div>

            <!-- Add 4 more FAQ items for this category -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Apakah semua produk Renjana sudah bersertifikat halal?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Ya, semua produk kacang mede Renjana telah memiliki sertifikat halal dari MUI (Majelis Ulama Indonesia). Kami juga memiliki sertifikasi internasional lainnya seperti HACCP, ISO 22000 untuk keamanan pangan, dan GMP (Good Manufacturing Practice) untuk memastikan proses produksi yang higienis dan berkualitas.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Dari mana asal kacang mede yang digunakan Renjana?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Kacang mede Renjana berasal dari perkebunan terpilih di Indonesia, khususnya dari daerah Wonogiri (Jawa Tengah), NTT, dan Sulawesi yang terkenal dengan kualitas kacang mede terbaik. Kami juga mengimpor dari Vietnam dan India untuk varian premium tertentu. Semua supplier telah melewati audit ketat untuk memastikan kualitas dan keberlanjutan.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Bagaimana proses quality control di Renjana?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Kami menerapkan sistem quality control berlapis mulai dari seleksi bahan baku, proses produksi, hingga packaging. Setiap batch produk melalui tes laboratorium untuk memastikan keamanan mikrobiologi, kadar air, dan kandungan nutrisi. Tim QC kami melakukan pemeriksaan visual, tekstur, dan rasa sebelum produk dikemas dan didistribusikan.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Apakah ada kemasan ukuran kecil untuk coba-coba?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Ya, kami menyediakan kemasan trial pack 50 gram untuk semua varian rasa agar customer bisa mencoba terlebih dahulu. Tersedia juga kemasan 100g, 200g, 500g, dan 1kg. Untuk pembelian pertama, kami merekomendasikan paket trial mix yang berisi 4 varian rasa populer dalam kemasan 50g masing-masing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Order & Shipping FAQ -->
<section id="order-shipping" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="ri-truck-line text-2xl text-white"></i>
            </div>
            <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Pemesanan & Pengiriman</h2>
            <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
        </div>
        
        <div class="space-y-4">
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Bagaimana cara memesan produk Renjana Cashew?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Anda bisa memesan melalui: 1) Website resmi renjanacashew.com, 2) Marketplace (Shopee, Tokopedia, Blibli), 3) WhatsApp Business di +62 812-3456-789, 4) Datang langsung ke outlet Pakuwon Mall. Untuk pemesanan grosir/dalam jumlah besar, hubungi tim sales kami untuk mendapatkan harga khusus.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Metode pembayaran apa saja yang tersedia?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Kami menerima: Transfer bank (BCA, Mandiri, BRI, BNI), E-wallet (GoPay, OVO, DANA, ShopeePay), Kartu kredit/debit (Visa, MasterCard), COD untuk area tertentu, dan QRIS. Untuk pembelian di marketplace, pembayaran mengikuti sistem masing-masing platform.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Berapa ongkos kirim ke seluruh Indonesia?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Ongkos kirim bervariasi berdasarkan lokasi dan berat paket. Untuk pembelian minimal Rp 150.000, kami berikan free ongkir ke seluruh Java. Estimasi biaya: Jabodetabek (Rp 15.000), Jawa (Rp 20.000), Sumatra/Kalimantan (Rp 30.000), Sulawesi/Papua (Rp 40.000). Gunakan kurir terpercaya: JNE, J&T, SiCepat, atau Anteraja.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Berapa lama waktu pengiriman?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Estimasi pengiriman: Jabodetabek (1-2 hari), Jawa (2-3 hari), Sumatra/Kalimantan (3-5 hari), Indonesia Timur (4-7 hari). Pesanan diproses maksimal 1 hari kerja setelah pembayaran dikonfirmasi. Untuk pemesanan hari Jumat sore atau weekend, akan diproses pada hari kerja berikutnya.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Bagaimana cara tracking pengiriman?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Setelah paket dikirim, Anda akan menerima nomor resi melalui WhatsApp/email. Tracking bisa dilakukan di: 1) Website/aplikasi kurir yang bersangkutan, 2) Website kami di menu "Track Order", 3) Chat customer service untuk update status. Kami juga akan mengirim notifikasi otomatis di setiap update status pengiriman.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnership FAQ -->
<section id="partnership-business" class="py-20 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="ri-handshake-line text-2xl text-white"></i>
            </div>
            <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Kemitraan & Bisnis</h2>
            <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
        </div>
        
        <div class="space-y-4">
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Bagaimana cara bergabung menjadi reseller Renjana?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Daftar melalui email sales@renjanacashew.com atau WhatsApp +62 823-4567-890. Syarat: memiliki toko fisik/online, komitmen minimum order, dan mengikuti training produk. Benefit: margin 15-35%, support marketing, training gratis, dan sistem dropship. Ada 3 level: Silver (15%), Gold (25%), dan Platinum (35%) dengan syarat berbeda.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Berapa minimal order untuk reseller?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Silver Reseller: 50 pcs/bulan, Gold Reseller: 150 pcs/bulan, Platinum Reseller: 300 pcs/bulan. Order pertama minimal 20 pcs untuk trial. Tersedia sistem konsinyasi untuk reseller berpengalaman. Payment terms: COD untuk local area, transfer untuk luar kota dengan credit limit tertentu.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Apakah ada program affiliate marketing?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transformation"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Ya, kami memiliki program affiliate dengan komisi 10% dari setiap penjualan. Cocok untuk content creator, blogger, dan influencer. Benefit: link tracking khusus, dashboard analytics, payment bulanan, dan bonus tier untuk top performer. Minimum payout Rp 100.000 dengan cookie duration 30 hari.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Info FAQ -->
<section id="company-info" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="ri-building-line text-2xl text-white"></i>
            </div>
            <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Informasi Perusahaan</h2>
            <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
        </div>
        
        <div class="space-y-4">
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Kapan Renjana Cashew didirikan?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Renjana Cashew didirikan pada tahun 2018 oleh Bapak Ahmad Sutanto dengan visi menghadirkan kacang mede premium berkualitas tinggi ke seluruh Indonesia. Berawal dari usaha rumahan di Surabaya, kini telah berkembang menjadi brand terpercaya dengan distribusi nasional dan outlet retail di berbagai kota.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Dimana lokasi kantor pusat dan pabrik Renjana?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Kantor pusat: Jl. Raya Surabaya No. 123, Gedung Renjana Center Lt. 5-7, Surabaya. Pabrik produksi: Jl. Industri Raya No. 45, Kawasan Industri Surabaya, Sidoarjo. Outlet retail: Pakuwon Mall Surabaya Lt. 2 Unit 2A-15. Jam operasional kantor: Senin-Jumat 08:00-17:00, Sabtu 08:00-15:00.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Sertifikasi apa saja yang dimiliki Renjana?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Kami memiliki sertifikasi lengkap: Halal MUI, HACCP (Hazard Analysis Critical Control Point), ISO 22000 (Food Safety Management), GMP (Good Manufacturing Practice), BPOM, dan PIRT. Untuk ekspor, kami juga memiliki sertifikat FDA, organic certification untuk produk tertentu, dan fair trade certification.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Health & Nutrition FAQ -->
<section id="health-nutrition" class="py-20 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="ri-heart-pulse-line text-2xl text-white"></i>
            </div>
            <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Kesehatan & Nutrisi</h2>
            <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
        </div>
        
        <div class="space-y-4">
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Apa manfaat kesehatan dari mengonsumsi kacang mede?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Kacang mede kaya protein, lemak sehat, vitamin E, magnesium, dan zinc. Manfaatnya: menjaga kesehatan jantung, meningkatkan massa otot, mendukung fungsi otak, memperkuat tulang, meningkatkan sistem imun, dan membantu mengontrol berat badan. Kandungan tryptophan juga membantu produksi serotonin untuk mood yang baik.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Berapa porsi ideal konsumsi kacang mede per hari?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Porsi ideal adalah 15-20 butir (sekitar 30 gram) per hari untuk orang dewasa sehat. Ini setara dengan sekitar 150-180 kalori. Konsumsi berlebihan dapat menyebabkan kenaikan berat badan karena tinggi kalori. Untuk anak-anak di bawah 5 tahun, disarankan maksimal 5-8 butir per hari setelah dihaluskan untuk menghindari choking hazard.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Apakah kacang mede aman untuk ibu hamil dan menyusui?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Ya, kacang mede aman dan baik untuk ibu hamil dan menyusui karena mengandung asam folat, protein, dan lemak sehat yang penting untuk perkembangan janin dan produksi ASI. Namun, konsumsi harus moderat (10-15 butir/hari) dan pastikan tidak ada riwayat alergi. Konsultasikan dengan dokter kandungan untuk rekomendasi personal.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Support FAQ -->
<section id="technical-support" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="ri-customer-service-line text-2xl text-white"></i>
            </div>
            <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Dukungan Teknis</h2>
            <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
        </div>
        
        <div class="space-y-4">
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Bagaimana cara reset password akun saya?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Klik "Forgot Password" di halaman login, masukkan email terdaftar, cek inbox email untuk link reset (cek spam folder juga). Klik link dan buat password baru (minimal 8 karakter dengan kombinasi huruf, angka, dan simbol). Jika tidak berhasil, hubungi technical support di tech@renjanacashew.com atau WhatsApp +62 845-6789-012.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button class="w-full px-6 py-4 text-left hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                        onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center">
                        <h4 class="text-lg font-semibold text-secondary-dark-brown pr-4">
                            Website tidak bisa diakses, kenapa?
                        </h4>
                        <i class="ri-arrow-down-s-line text-2xl text-primary-gold transform transition-transform"></i>
                    </div>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-secondary-gray-orange">
                        Coba langkah berikut: 1) Refresh halaman atau clear cache browser, 2) Cek koneksi internet, 3) Coba browser lain atau mode incognito, 4) Restart router/modem. Jika masih bermasalah, kemungkinan maintenance server (cek social media kami untuk update) atau hubungi technical support. Alternatif: gunakan aplikasi mobile atau marketplace.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Still Have Questions -->
<section class="py-20 bg-secondary-dark-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Masih Punya Pertanyaan?
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Tim customer service kami siap membantu Anda 24/7 melalui berbagai channel komunikasi
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <a href="https://wa.me/628123456789" target="_blank" class="bg-white bg-opacity-10 rounded-xl p-6 hover:bg-opacity-20 transition-all">
                <i class="ri-whatsapp-line text-3xl text-green-400 mb-3"></i>
                <h4 class="font-bold mb-2">WhatsApp</h4>
                <p class="text-sm text-gray-300">Response time: < 5 menit</p>
            </a>
            
            <a href="mailto:cs@renjanacashew.com" class="bg-white bg-opacity-10 rounded-xl p-6 hover:bg-opacity-20 transition-all">
                <i class="ri-mail-line text-3xl text-blue-400 mb-3"></i>
                <h4 class="font-bold mb-2">Email</h4>
                <p class="text-sm text-gray-300">Response time: < 24 jam</p>
            </a>
            
            <a href="tel:+628123456789" class="bg-white bg-opacity-10 rounded-xl p-6 hover:bg-opacity-20 transition-all">
                <i class="ri-phone-line text-3xl text-primary-gold mb-3"></i>
                <h4 class="font-bold mb-2">Phone Call</h4>
                <p class="text-sm text-gray-300">Senin-Sabtu: 08:00-17:00</p>
            </a>
        </div>
        
        <div class="bg-white bg-opacity-10 rounded-2xl p-8">
            <h3 class="text-xl font-bold mb-4">Suggesstion Box</h3>
            <p class="text-gray-300 mb-6">
                Punya saran untuk meningkatkan layanan kami? Kami sangat menghargai feedback Anda
            </p>
            <a href="mailto:suggestion@renjanacashew.com" class="inline-block bg-gradient-gold text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                Kirim Saran
            </a>
        </div>
    </div>
</section>

<script>
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

// FAQ Search functionality
document.getElementById('faqSearch').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const faqItems = document.querySelectorAll('.bg-white.rounded-xl.border');
    
    faqItems.forEach(item => {
        const question = item.querySelector('h4').textContent.toLowerCase();
        const answer = item.querySelector('.px-6.pb-4 p').textContent.toLowerCase();
        
        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
            item.style.display = 'block';
        } else {
            item.style.display = searchTerm === '' ? 'block' : 'none';
        }
    });
});
</script>
@endsection