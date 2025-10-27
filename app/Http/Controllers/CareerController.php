<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('career');
    }
    
    public function detail($slug)
    {
        // Untuk demo, kita akan menampilkan halaman yang sama untuk semua slug
        // Dalam implementasi nyata, Anda bisa query database berdasarkan slug
        return view('career-detail', compact('slug'));
    }
}