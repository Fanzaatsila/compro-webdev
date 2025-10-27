<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Banner;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        $banners = Banner::where('banner_key', 'contact')
            ->first();

        // Office and factory information
        $offices = [
            [
                'type' => 'head_office',
                'name' => 'Kantor Pusat',
                'icon' => 'ri-building-line',
                'address' => 'Jl. Raya Surabaya No. 123
Gedung Renjana Center, Lt. 5-7
Surabaya, Jawa Timur 60271',
                'hours' => 'Senin - Jumat: 08:00 - 17:00 WIB
Sabtu: 08:00 - 15:00 WIB
Minggu & Hari Libur: Tutup',
                'phone' => '+62 31-7890-123',
                'fax' => '+62 31-7890-124',
                'map_url' => 'https://maps.google.com/?q=Jl.+Raya+Surabaya+No.+123+Surabaya',
                'whatsapp' => '+62 812-3456-789',
            ],
            [
                'type' => 'factory',
                'name' => 'Pabrik Produksi',
                'icon' => 'ri-factory-line',
                'address' => 'Jl. Industri Raya No. 45
Kawasan Industri Surabaya
Sidoarjo, Jawa Timur 61256',
                'hours' => 'Senin - Jumat: 07:00 - 16:00 WIB
Sabtu: 07:00 - 14:00 WIB
Minggu & Hari Libur: Tutup',
                'phone' => '+62 31-8765-432',
                'email' => 'factory@renjanacashew.com',
                'map_url' => 'https://maps.google.com/?q=Jl.+Industri+Raya+No.+45+Sidoarjo',
                'tour_info' => 'Kami menerima kunjungan pabrik untuk edukasi dan wisata. Reservasi minimal 3 hari sebelum jadwal kunjungan.',
            ]
        ];

        // Social media information
        $socialMedia = [
            [
                'platform' => 'Instagram',
                'icon' => 'ri-instagram-line',
                'username' => '@renjanacashew',
                'url' => 'https://instagram.com/renjanacashew',
                'color_from' => 'purple-600',
                'color_to' => 'pink-600',
                'followers' => '25.5K followers',
            ],
            [
                'platform' => 'TikTok',
                'icon' => 'ri-tiktok-line',
                'username' => '@renjanacashew',
                'url' => 'https://tiktok.com/@renjanacashew',
                'color_from' => 'black',
                'color_to' => 'black',
                'followers' => '15.2K followers',
            ],
            [
                'platform' => 'Facebook',
                'icon' => 'ri-facebook-line',
                'username' => 'Renjana Cashew',
                'url' => 'https://facebook.com/renjanacashew',
                'color_from' => 'blue-600',
                'color_to' => 'blue-600',
                'followers' => '12.8K followers',
            ],
            [
                'platform' => 'YouTube',
                'icon' => 'ri-youtube-line',
                'username' => 'Renjana Cashew',
                'url' => 'https://youtube.com/@renjanacashew',
                'color_from' => 'red-600',
                'color_to' => 'red-600',
                'followers' => '8.7K subscribers',
            ]
        ];

        return view('contact', compact('contacts', 'offices', 'socialMedia', 'banners'));
    }
}
