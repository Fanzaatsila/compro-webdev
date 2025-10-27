@extends('layouts.app')

@section('title', 'Produk - Renjana Cashew')

@section('content')
<!-- Banner Produk -->
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
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Produk Kami</h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto">
            Koleksi lengkap kacang mede premium dengan berbagai varian rasa yang menggugah selera
        </p>
    </div>
</section>

<!-- KATEGORI 1: KACANG METE -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Kategori Produk</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Kacang Mete Premium
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Koleksi lengkap kacang mete premium dengan berbagai varian rasa yang menggugah selera
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($meteProducts as $product)
            <!-- Produk Mete -->
            <div class="bg-light rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
                <div class="relative aspect-square">
                    <img src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->product_name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                    @if($product->is_featured)
                    <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        BEST SELLER
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-secondary-dark-brown mb-2">{{ $product->product_name }}</h4>
                    <p class="text-secondary-gray-orange mb-4">{{ $product->description }}</p>

                    <button onclick="openOrderModal('{{ $product->product_name }}')" class="w-full bg-gradient-gold text-white py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                        <i class="ri-shopping-cart-line mr-2"></i>
                        Pesan Sekarang
                    </button>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Belum ada produk kacang mete yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- KATEGORI 2: KACANG ALMOND -->
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Kacang Almond Premium
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Kacang almond berkualitas tinggi dengan berbagai varian rasa yang kaya nutrisi dan lezat
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($almondProducts as $product)
            <!-- Produk Almond -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
                <div class="relative aspect-square">
                    <img src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->product_name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                    @if($product->is_featured)
                    <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        PREMIUM
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-secondary-dark-brown mb-2">{{ $product->product_name }}</h4>
                    <p class="text-secondary-gray-orange mb-4">{{ $product->description }}</p>
                    <button onclick="openOrderModal('{{ $product->product_name }}')" class="w-full bg-gradient-gold text-white py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                        <i class="ri-shopping-cart-line mr-2"></i>
                        Pesan Sekarang
                    </button>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Belum ada produk kacang almond yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- KATEGORI 3: HAMPERS -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Hampers & Gift Set
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto mb-8"></div>
            <p class="text-xl text-secondary-gray-orange max-w-3xl mx-auto">
                Paket hampers eksklusif untuk berbagai acara spesial, tersaji dalam kemasan premium yang elegan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($hampersProducts as $product)
            <!-- Hampers -->
            <div class="bg-light rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
                <div class="relative aspect-square">
                    <img src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->product_name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                    @if($product->is_featured)
                    <div class="absolute top-4 left-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        BEST GIFT
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-bold text-secondary-dark-brown mb-2">{{ $product->product_name }}</h4>
                    <p class="text-secondary-gray-orange mb-4">{{ $product->description }}</p>

                    @if(strpos($product->description, 'Isi Paket'))
                    <div class="mb-4">
                        <p class="text-sm text-secondary-gray-orange mb-2">Isi Paket:</p>
                        <ul class="text-xs text-secondary-gray-orange space-y-1">
                            @foreach(explode("\n", substr($product->description, strpos($product->description, 'Isi Paket') + 10)) as $item)
                            @if(trim($item))
                            <li>• {{ trim($item) }}</li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <button onclick="openOrderModal('{{ $product->product_name }}')" class="w-full bg-gradient-gold text-white py-3 rounded-full font-semibold hover:opacity-90 transition-opacity">
                        <i class="ri-gift-line mr-2"></i>
                        Pesan Hampers
                    </button>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-8">
                <p class="text-secondary-gray-orange text-lg">Belum ada produk hampers yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Product Features -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-primary-gold tracking-wide uppercase mb-4">Keunggulan Produk</h2>
            <h3 class="text-4xl md:text-5xl font-bold text-secondary-dark-brown mb-6">
                Mengapa Memilih Renjana?
            </h3>
            <div class="w-24 h-1 bg-gradient-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="ri-shield-check-line text-2xl text-white"></i>
                </div>
                <h4 class="text-lg font-bold text-secondary-dark-brown mb-2">100% Natural</h4>
                <p class="text-secondary-gray-orange text-sm">Tanpa pengawet buatan dan bahan kimia berbahaya</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="ri-heart-pulse-line text-2xl text-white"></i>
                </div>
                <h4 class="text-lg font-bold text-secondary-dark-brown mb-2">Kaya Nutrisi</h4>
                <p class="text-secondary-gray-orange text-sm">Sumber protein, vitamin E, dan magnesium yang baik</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="ri-leaf-line text-2xl text-white"></i>
                </div>
                <h4 class="text-lg font-bold text-secondary-dark-brown mb-2">Fresh & Crispy</h4>
                <p class="text-secondary-gray-orange text-sm">Dipanggang fresh dengan tekstur renyah sempurna</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="ri-truck-line text-2xl text-white"></i>
                </div>
                <h4 class="text-lg font-bold text-secondary-dark-brown mb-2">Fast Delivery</h4>
                <p class="text-secondary-gray-orange text-sm">Pengiriman cepat ke seluruh Indonesia</p>
            </div>
        </div>
    </div>
</section>

<!-- Order Modal -->
<div id="orderModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 items-center justify-center">
    <div class="bg-white rounded-2xl p-6 max-w-sm w-full mx-4">
        <div class="text-center mb-6">
            <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="ri-shopping-cart-2-line text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-bold text-secondary-dark-brown mb-2">Belanja Renjana Cashew makin mudah!</h3>
            <p class="text-secondary-gray-orange text-sm">Pilih platform favoritmu</p>
        </div>
        
        <div class="space-y-3">
            <button onclick="redirectToShop('shopee')" class="w-full flex items-center justify-center py-3 px-4 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition-colors">
                <i class="ri-shopping-bag-line mr-2"></i>
                <span class="font-semibold">Shopee</span>
            </button>
            
            <button onclick="redirectToShop('tokopedia')" class="w-full flex items-center justify-center py-3 px-4 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
                <i class="ri-store-2-line mr-2"></i>
                <span class="font-semibold">Tokopedia</span>
            </button>
            
            <button onclick="redirectToShop('tiktokshop')" class="w-full flex items-center justify-center py-3 px-4 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors">
                <i class="ri-music-2-line mr-2"></i>
                <span class="font-semibold">TikTok Shop</span>
            </button>
            
            <button onclick="redirectToShop('blibli')" class="w-full flex items-center justify-center py-3 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="ri-store-3-line mr-2"></i>
                <span class="font-semibold">Blibli</span>
            </button>
        </div>
        
        <button onclick="closeOrderModal()" class="w-full mt-4 py-2 text-secondary-gray-orange hover:text-secondary-dark-brown transition-colors">
            Tutup
        </button>
    </div>
</div>

<script>
let currentProductName = '';

function openOrderModal(productName) {
    currentProductName = productName;
    const modal = document.getElementById('orderModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeOrderModal() {
    const modal = document.getElementById('orderModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = 'auto';
    currentProductName = '';
}

function redirectToShop(platform) {
    // URLs untuk setiap platform - ganti dengan URL toko yang sebenarnya
    const shopUrls = {
        'shopee': 'https://shopee.co.id/search?keyword=renjana+cashew',
        'tokopedia': 'https://www.tokopedia.com/search?st=product&q=renjana+cashew',
        'tiktokshop': 'https://www.tiktok.com/@renjanacashew',
        'blibli': 'https://www.blibli.com/search?s=renjana+cashew'
    };
    
    if (shopUrls[platform]) {
        window.open(shopUrls[platform], '_blank');
        closeOrderModal();
    }
}

// Close modal when clicking outside
document.getElementById('orderModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeOrderModal();
    }
});

// Close modal with ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !document.getElementById('orderModal').classList.contains('hidden')) {
        closeOrderModal();
    }
});
</script>

@endsection