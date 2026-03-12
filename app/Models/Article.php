<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'content'];

    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }

    public function getFirstImageUrlAttribute(): string
    {
        $path = $this->images->first()?->image;

        if (!$path) {
            return 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=800&auto=format&fit=crop';
        }

        return str_starts_with($path, 'http') ? $path : asset('storage/' . $path);
    }
}
