<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Banner;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $onlineShops = Shop::latest()->get();

        $banners = Banner::where('banner_key', 'shop')
            ->first();

        // Offline shop data
        $offlineShop = [
            'name' => 'Renjana Cashew Store',
            'location' => 'Outlet Resmi Pakuwon Mall',
            'address' => 'Pakuwon Mall, Lantai 2 Unit 2A-15, Jl. Puncak Indah Lontar No. 2, Surabaya, Jawa Timur 60216',
            'hours' => 'Senin - Jumat: 10:00 - 22:00 WIB, Sabtu - Minggu: 10:00 - 23:00 WIB',
            'phone' => '+62 31-7345-6789',
            'whatsapp' => '+62 812-3456-7890',
            'gallery' => [
                [
                    'image' => 'assets/img/outlet-1.jpeg',
                    'title' => 'Tampak Luar Toko',
                    'description' => 'Lokasi strategis di Pakuwon Mall dengan akses mudah'
                ],
                [
                    'image' => 'assets/img/outlet-2.jpeg',
                    'title' => 'Interior Toko',
                    'description' => 'Suasana nyaman dengan display produk yang menarik'
                ],
                [
                    'image' => 'assets/img/outlet-3.jpeg',
                    'title' => 'Display Produk',
                    'description' => 'Berbagai varian kacang mede tersedia lengkap'
                ]
            ],
            'video' => 'assets/img/outlet-arah-1.mov'
        ];

        return view('shop', compact('onlineShops', 'offlineShop', 'banners'));
    }
}
