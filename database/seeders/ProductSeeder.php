<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Plakat Acara',
                'slug' => Str::slug('Plakat Acara'),
                'subcategory_id' => 1,
                'description' => 'Plakat yang dirancang untuk acara khusus.',
                'image' => 'products/plakat-acara.jpg',
                'tags' => 'plakat, plakat acara, plakat seminar, plakat penghargaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Seminar Kit',
                'slug' => Str::slug('Seminar Kit'),
                'subcategory_id' => 1,
                'description' => 'Kit lengkap untuk seminar dengan berbagai perlengkapan.',
                'image' => 'products/seminar-kit.jpg',
                'tags' => 'seminar kit, perlengkapan seminar, seminar package',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desain Custom',
                'slug' => Str::slug('Desain Custom'),
                'subcategory_id' => 2,
                'description' => 'Desain produk yang dapat disesuaikan dengan permintaan.',
                'image' => 'products/desain-custom.jpg',
                'tags' => 'desain custom, desain plakat, desain souvenir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Event Celebration',
                'slug' => Str::slug('Event Celebration'),
                'subcategory_id' => 2,
                'description' => 'Layanan untuk merayakan berbagai acara penting.',
                'image' => 'products/event-celebration.jpg',
                'tags' => 'event celebration, jasa event, perayaan acara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}