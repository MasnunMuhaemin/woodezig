<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\ArticleImage;

class ArticleImageSeeder extends Seeder
{
    public function run(): void
    {
        $articles = Article::all();

        foreach ($articles as $article) {

            for ($i = 1; $i <= 3; $i++) {
                ArticleImage::create([
                    'article_id' => $article->id,
                    'image' => 'articles/sample-'.$i.'.jpg',
                ]);
            }

        }
    }
}