<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'image'];

    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }
}
