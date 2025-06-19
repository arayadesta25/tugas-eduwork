<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Nasi Goreng',
                'description' => 'Nasi goreng dengan ayam dan sayuran',
                'price' => 15000,
                'stock' => 100,
                'image' => 'https://asset.kompas.com/crops/U6YxhTLF-vrjgM8PN3RYTHlIxfM=/84x60:882x592/1200x800/data/photo/2021/11/17/61949959e07d3.jpg',
                'product_category_id' => 1,
            ],
            [
                'name' => 'Mie Goreng',
                'description' => 'Mie goreng dengan telur dan sayuran',
                'price' => 12000,
                'stock' => 50,
                'image' => 'https://asset.kompas.com/crops/Uw7qs0cD9gtVobj8zf5OJLNB3jM=/52x28:954x629/1200x800/data/photo/2020/11/19/5fb641f087a66.jpg',
                'product_category_id' => 1,
            ],
            [
                'name' => 'Keripik Kentang',
                'description' => 'Keripik kentang renyah',
                'price' => 5000,
                'stock' => 100,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTX0nBZ-MiUoU4Rf94hrsX0gZTyYT9PEG6qQg&s',
                'product_category_id' => 2,
            ],
            [
                'name' => 'Keripik usus',
                'description' => 'Keripik usus renyah',
                'price' => 5000,
                'stock' => 100,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXFXJJ7jlWdEnODqElMWQQDbKfZxvHO9Absw&s',
                'product_category_id' => 2,
            ],
            
            [
                'name' => 'Teh Manis',
                'description' => 'Teh manis hangat',
                'price' => 4000,
                'stock' => 200,
                'image' => 'https://asset.kompas.com/crops/9iB_ruTEMU7otPYnbCNVng8zhrQ=/0x0:4939x3293/1200x800/data/photo/2022/09/25/63300cfd403f0.jpg',
                'product_category_id' => 3,
            ],
             [
                'name' => 'jeruk Manis',
                'description' => 'jeruk bisa hangat atau es',
                'price' => 4000,
                'stock' => 200,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEcSGU1VLBBSbsoo4RgnNPMTZbt88jFuO6hg&s',
                'product_category_id' => 3,
            ],
        ]);
    }
}
