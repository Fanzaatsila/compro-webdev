<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class AboutController extends Controller
{
    public function index()
    {
        $banners = Banner::where('banner_key', 'about')
            ->first();

        return view('about', compact(
            'banners',
        ));
    }
}
