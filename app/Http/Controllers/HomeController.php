<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Campaign;
use App\Models\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get home banners
        $banners = Banner::where('banner_key', 'home')
            ->first();

        // Get featured products
        $featuredProducts = Product::where('is_featured', true)
            ->latest()
            ->get();

        // Get testimonials
        $testimonials = Testimonial::latest()
            ->get();

        // Get FAQs of all types
        $faqs = Faq::all();

        // Get active promos (limit to 1)
        $activePromo = Campaign::active()->promo()->latest()->first();

        // Get upcoming event (limit to 1)
        $upcomingEvent = Campaign::upcoming()->event()->latest()->first();

        // Get the latest ad
        $latestAd = Ad::latest()->first();

        return view('home', compact(
            'banners',
            'featuredProducts',
            'testimonials',
            'faqs',
            'activePromo',
            'upcomingEvent',
            'latestAd'
        ));
    }
}
