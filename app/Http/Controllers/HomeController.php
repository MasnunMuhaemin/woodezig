<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil maksimal 6 produk terbaru berdasarkan kategori "catalog" atau "produk"
        $catalogProducts = Product::with('subCategory.category')
            ->whereHas('subCategory.category', function ($query) {
                $query->where('name', 'like', '%catalog%')
                      ->orWhere('name', 'like', '%produk%');
            })
            ->latest()
            ->take(6)
            ->get();

        // Ambil maksimal 6 produk terbaru berdasarkan kategori "karya"
        $karyaProducts = Product::with('subCategory.category')
            ->whereHas('subCategory.category', function ($query) {
                $query->where('name', 'like', '%karya%');
            })
            ->latest()
            ->take(6)
            ->get();

        // Ambil produk untuk slider (produk pilihan/unggulan)
        $featuredProducts = Product::with('images')
            ->whereHas('subCategory.category', function ($query) {
                $query->where('name', 'like', '%catalog%')
                      ->orWhere('name', 'like', '%produk%');
            })
            ->latest()
            ->take(5)
            ->get();

        // Ambil 3 artikel terbaru
        $articles = Article::latest()->take(3)->get();

        return view('home', compact('catalogProducts', 'karyaProducts', 'articles', 'featuredProducts'));
    }
}
