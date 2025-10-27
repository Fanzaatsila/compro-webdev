<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'banner_key' => 'home',
                'banner_file' => '-',
            ],
            [
                'banner_key' => 'about',
                'banner_file' => '-',
            ],
            [
                'banner_key' => 'product',
                'banner_file' => '-',
            ],
            [
                'banner_key' => 'campaign',
                'banner_file' => '-',
            ],
            [
                'banner_key' => 'contact',
                'banner_file' => '-',
            ],
            [
                'banner_key' => 'shop',
                'banner_file' => '-',
            ],
            [
                'banner_key' => 'carrier',
                'banner_file' => '-',
            ],
            [
                'banner_key' => 'collaboration',
                'banner_file' => '-',
            ],
        ];

        foreach ($banners as $banner) {
            Banner::firstOrCreate(
                ['banner_key' => $banner['banner_key']],
                $banner
            );
        }
    }
}
