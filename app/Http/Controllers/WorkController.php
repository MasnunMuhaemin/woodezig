<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;

class WorkController extends Controller
{
    public function index(Subcategory $subcategory = null)
    {
        $category = Category::with('subcategories')
            ->where('name', 'like', '%karya%')
            ->firstOrFail();

        $subcategories = $category->subcategories;

        $products = Product::with('subcategory')
            ->whereIn('subcategory_id', $subcategories->pluck('id'))
            ->when($subcategory, function ($query) use ($subcategory) {
                $query->where('subcategory_id', $subcategory->id);
            })
            ->latest()
            ->get();

        return view('pages.works.index', compact(
            'subcategories',
            'products',
            'subcategory'
        ));
    }

    public function show($slug)
    {
        $product = Product::with(['subcategory', 'images'])
            ->where('slug', $slug)
            ->firstOrFail();
            
        return view('pages.works.show', compact('product'));
    }
}
