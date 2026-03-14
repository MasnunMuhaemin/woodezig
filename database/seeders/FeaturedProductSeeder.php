<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class FeaturedProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->update([
            'is_featured' => false
        ]);

        Product::inRandomOrder()
            ->take(6)
            ->update([
                'is_featured' => true
            ]);
    }
}