<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {

            $articleId = DB::table('articles')->insertGetId([
                'title' => 'Sample Article '.$i,
                'slug' => Str::slug('Sample Article '.$i),
                'content' => 'Ini adalah contoh konten artikel ke '.$i.' untuk kebutuhan seeding database.',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // tambah beberapa gambar untuk artikel
            for ($j = 1; $j <= 3; $j++) {

                DB::table('article_images')->insert([
                    'article_id' => $articleId,
                    'image' => 'articles/sample-'.$j.'.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

            }
        }
    }
}