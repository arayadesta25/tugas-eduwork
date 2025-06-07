<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
            [ 'name' => 'macbook',
              'description' => 'Macbook Pro 16 inch M1 Pro',
              'price' => 5.000,
              'stock' => '10',
              'image' => 'https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWFjYm9va3xlbnwwfHwwfHx8MA%3D%3D',
                'product_category_id' => 1,
             ],
            [ 'name' => 'fried chicken',
              'description' => 'enak murah meriah',
              'price' => 5.000,
              'stock' => '100',
              'image' => 'https://media.istockphoto.com/id/2182219891/photo/ayam-goreng-lengkuas-or-galangal-fried-chicken.webp?a=1&b=1&s=612x612&w=0&k=20&c=UuD_V8Y0JYW8JEbJehkNLdC3FtytzuKhQlxHGbzwvtg=',
                'product_category_id' => 2,
              ],
              [ 'name' => 'es degan',
              'description' => 'es degan mudaa',
              'price' => 15.000,
              'stock' => '10',
              'image' => 'https://media.istockphoto.com/id/2189180465/photo/beverage-made-from-chilled-or-iced-coconut-water-and-young-coconut-flesh-isolated-on-white.webp?a=1&b=1&s=612x612&w=0&k=20&c=9YcsaLDpTrsNtGgkbsJ-BDUDDjcmZTACSyoiavpB28o=',
                'product_category_id' => 3,
            ],

        ]);
    }
}
