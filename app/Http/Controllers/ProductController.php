<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $banners = Banner::where('banner_key', 'product')
            ->first();

        // Get products by category and type
        $meteProducts = Product::where('category', 'kacang-mete')
            ->where('type', 'individual')
            ->latest()
            ->get();

        $almondProducts = Product::where('category', 'kacang-almond')
            ->where('type', 'individual')
            ->latest()
            ->get();

        $hampersProducts = Product::where('type', 'hampers')
            ->latest()
            ->get();

        return view('product', compact(
            'banners',
            'meteProducts',
            'almondProducts',
            'hampersProducts'
        ));
    }
}
