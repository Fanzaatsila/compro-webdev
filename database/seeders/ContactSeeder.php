<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'title' => 'Customer Service',
                'description' => 'Untuk pertanyaan umum, keluhan, saran, atau informasi produk',
                'number' => '+62 812-3456-789',
                'email' => 'cs@renjanacashew.com',
                'operational_time' => 'Senin-Jumat: 08:00-17:00 WIB
Sabtu: 08:00-15:00 WIB',
            ],
            [
                'title' => 'Business & Partnership',
                'description' => 'Untuk kerjasama bisnis, partnership, atau informasi investasi',
                'number' => '+62 821-9876-5432',
                'email' => 'partnership@renjanacashew.com',
                'operational_time' => 'Senin-Jumat: 09:00-16:00 WIB',
            ],
            [
                'title' => 'Media & PR',
                'description' => 'Untuk keperluan media, pers, atau public relations',
                'number' => '+62 857-3210-9876',
                'email' => 'media@renjanacashew.com',
                'operational_time' => 'Senin-Jumat: 09:00-17:00 WIB',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::updateOrCreate(
                ['title' => $contact['title']],
                $contact
            );
        }
    }
}
