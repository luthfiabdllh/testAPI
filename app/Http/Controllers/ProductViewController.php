<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductViewController extends Controller
{
    public function index()
    {
        // Ambil data dari API menggunakan HTTP Client
        $response = Http::get(route('product.index')); // Pastikan API Route sudah tersedia
        $products = $response->json('data'); // Ambil bagian 'data' dari respon JSON

        return view('product.index', compact('products'));
    }
}
