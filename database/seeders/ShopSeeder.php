<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shops = [
            [
                'shop_name' => 'Shopee',
                'shop_logo' => '-',
                'description' => 'Belanja mudah dengan berbagai promo menarik dan cashback',
                'rating' => 4.9,
                'shop_url' => 'https://shopee.co.id/search?keyword=renjana%20cashew',
            ],
            [
                'shop_name' => 'Tokopedia',
                'shop_logo' => '-',
                'description' => 'Pilihan produk lengkap dengan pengiriman cepat',
                'rating' => 4.8,
                'shop_url' => 'https://www.tokopedia.com/search?st=product&q=renjana%20cashew',
            ],
            [
                'shop_name' => 'Lazada',
                'shop_logo' => '',
                'description' => 'Pengalaman berbelanja online dengan penawaran terbaik',
                'rating' => 4.6,
                'shop_url' => 'https://www.lazada.co.id/catalog/?q=renjana+cashew',
            ],
            [
                'shop_name' => 'TikTok Shop',
                'shop_logo' => '-',
                'description' => 'Temukan produk viral dengan harga spesial',
                'rating' => 4.7,
                'shop_url' => 'https://shop.tiktok.com/search?q=renjana%20cashew',
            ],
        ];

        foreach ($shops as $shop) {
            Shop::updateOrCreate(
                ['shop_name' => $shop['shop_name']],
                $shop
            );
        }
    }
}
