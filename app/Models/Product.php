<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'subcategory_id',
        'description',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    /**
     * Get the URL of the first product image.
     * Falls back to a placeholder if no images exist.
     */
    public function getFirstImageUrlAttribute(): string
    {
        $path = $this->images->first()?->image_path;

        if (!$path) {
            return 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=800&auto=format&fit=crop';
        }

        return str_starts_with($path, 'http') ? $path : asset('storage/' . $path);
    }
}