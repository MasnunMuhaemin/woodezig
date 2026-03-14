<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Catalog Products
        $catalogProducts = Product::with('subCategory.category')
            ->whereHas('subCategory.category', function ($query) {
                $query->where('name', 'like', '%catalog%')
                      ->orWhere('name', 'like', '%produk%');
            })
            ->latest()
            ->take(6)
            ->get();

        // Karya Products
        $karyaProducts = Product::with('subCategory.category')
            ->whereHas('subCategory.category', function ($query) {
                $query->where('name', 'like', '%karya%');
            })
            ->latest()
            ->take(6)
            ->get();

        // Featured Products (dari kolom migration baru)
        $featuredProducts = Product::with('images')
            ->where('is_featured', true)
            ->latest()
            ->get();

        // Articles
        $articles = Article::latest()
            ->take(3)
            ->get();

        return view('home', compact(
            'catalogProducts',
            'karyaProducts',
            'articles',
            'featuredProducts'
        ));
    }
}