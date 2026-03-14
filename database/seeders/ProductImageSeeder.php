<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_images')->insert([

            // Plakat Acara
            [
                'product_id' => 1,
                'image_path' => 'products/plakat-acara.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'image_path' => 'products/plakat-acara-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Seminar Kit
            [
                'product_id' => 2,
                'image_path' => 'products/seminar-kit.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'image_path' => 'products/seminar-kit-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Desain Custom
            [
                'product_id' => 3,
                'image_path' => 'products/desain-custom.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'image_path' => 'products/desain-custom-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Event Celebration
            [
                'product_id' => 4,
                'image_path' => 'products/event-celebration.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'image_path' => 'products/event-celebration-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}