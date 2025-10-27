<!-- Product & Quality FAQ -->
<div id="product-quality-faq" class="mb-16">
    <div class="text-center mb-12">
        <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="ri-product-hunt-line text-2xl text-white"></i>
        </div>
        <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Produk & Kualitas</h2>
        <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
    </div>

    <div class="space-y-4 max-w-4xl mx-auto">
        @forelse($faqs->where('type', 'product-quality') as $faq)
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
        <div class="text-center py-8">
            <p class="text-secondary-gray-orange">Belum ada FAQ untuk kategori ini.</p>
        </div>
        @endforelse
    </div>
</div>

<!-- Order & Shipping FAQ -->
<div id="order-shipping-faq" class="mb-16">
    <div class="text-center mb-12">
        <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="ri-truck-line text-2xl text-white"></i>
        </div>
        <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Pemesanan & Pengiriman</h2>
        <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
    </div>

    <div class="space-y-4 max-w-4xl mx-auto">
        @forelse($faqs->where('type', 'order-delivery') as $faq)
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
        <div class="text-center py-8">
            <p class="text-secondary-gray-orange">Belum ada FAQ untuk kategori ini.</p>
        </div>
        @endforelse
    </div>
</div>

<!-- Partnership FAQ -->
<div id="partnership-business-faq" class="mb-16">
    <div class="text-center mb-12">
        <div class="w-16 h-16 bg-gradient-gold rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="ri-handshake-line text-2xl text-white"></i>
        </div>
        <h2 class="text-3xl font-bold text-secondary-dark-brown mb-4">Kemitraan & Bisnis</h2>
        <div class="w-16 h-1 bg-gradient-gold mx-auto"></div>
    </div>

    <div class="space-y-4 max-w-4xl mx-auto">
        @forelse($faqs->where('type', 'partnership-business') as $faq)
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
        <div class="text-center py-8">
            <p class="text-secondary-gray-orange">Belum ada FAQ untuk kategori ini.</p>
        </div>
        @endforelse
    </div>
</div>