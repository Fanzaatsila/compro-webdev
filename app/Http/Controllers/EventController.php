<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Campaign;

class EventController extends Controller
{
    public function index()
    {
        $banners = Banner::where('banner_key', 'campaign')
            ->first();

        // Get active events
        $activeEvents = Campaign::active()
            ->event()
            ->latest()
            ->get();

        // Get upcoming events
        $upcomingEvents = Campaign::upcoming()
            ->event()
            ->latest()
            ->get();

        // Get past/inactive events
        $pastEvents = Campaign::inactive()
            ->event()
            ->latest()
            ->get();

        // Get active promos
        $activePromos = Campaign::active()
            ->promo()
            ->latest()
            ->get();

        // Get upcoming promos
        $upcomingPromos = Campaign::upcoming()
            ->promo()
            ->latest()
            ->get();

        return view('event', compact(
            'banners',
            'activeEvents',
            'upcomingEvents',
            'pastEvents',
            'activePromos',
            'upcomingPromos'
        ));
    }
}
