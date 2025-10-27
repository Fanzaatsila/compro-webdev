<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Collaboration;
use Illuminate\Http\Request;

class CollaborationController extends Controller
{
    public function index()
    {
        // Get collaboration banners
        $banners = Banner::where('banner_key', 'collaboration')
            ->first();

        // Get collaborations
        $collaborations = Collaboration::latest()->get();

        return view('collaboration', compact(
            'banners',
            'collaborations'
        ));
    }
}
