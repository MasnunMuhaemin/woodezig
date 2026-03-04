<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategories')->insert([
            ['category_id' => 1, 'name' => 'Plakat'],
            ['category_id' => 1, 'name' => 'Seminar Kit'],
            ['category_id' => 2, 'name' => 'Desain'],
            ['category_id' => 2, 'name' => 'Event'],
        ]);
    }
}
