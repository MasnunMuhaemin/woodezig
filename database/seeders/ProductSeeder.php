<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'subcategory_id' => 1, // ID subkategori Plakat
                'description' => 'Plakat yang dirancang untuk acara khusus.',
                'image' => 'path/to/image.jpg',
            ],
            [
                'name' => 'Seminar Kit',
                'slug' => Str::slug('Seminar Kit'),
                'subcategory_id' => 1, // ID subkategori Seminar Kit
                'description' => 'Kit lengkap untuk seminar dengan berbagai perlengkapan.',
                'image' => 'path/to/image.jpg',
            ],
            [
                'name' => 'Desain Custom',
                'slug' => Str::slug('Desain Custom'),
                'subcategory_id' => 2, // ID subkategori Desain
                'description' => 'Desain produk yang dapat disesuaikan dengan permintaan.',
                'image' => 'path/to/image.jpg',
            ],
            [
                'name' => 'Event Celebration',
                'slug' => Str::slug('Event Celebration'),
                'subcategory_id' => 2, // ID subkategori Event
                'description' => 'Layanan untuk merayakan berbagai acara penting.',
                'image' => 'path/to/image.jpg',
            ],
        ]);
    }
}
