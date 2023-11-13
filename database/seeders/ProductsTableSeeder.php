<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Flowers Gift Box XL',
                'category_id' => 1,
                // Replace with actual category ID
                'image' => 'images/flower.jpg',
                'description' => 'Description for Product 1',
                'price' => 35,
                'image1' => 'images/flower.jpg',
                'image2' => 'images/flower.jpg',
                'image3' => 'images/flower.jpg',
                'image4' => 'images/flower.jpg',
                'image5' => 'images/flower.jpg',

            ],
            [
                'name' => 'Ballon Numbers package',
                'category_id' => 1,
                // Replace with actual category ID
                'image' => 'images/balloons.jpg',
                'description' => 'Description for Product 1',
                'price' => 15,
                'image1' => 'images/balloons.jpg',
                'image2' => 'images/balloons.jpg',
                'image3' => 'images/balloons.jpg',
                'image4' => 'images/balloons.jpg',
                'image5' => 'images/balloons.jpg',
            ],
            [
                'name' => 'Business Men Leather Purse Wallet Billfold',
                'category_id' => 1,
                // Replace with actual category ID
                'image' => 'images/wallet.jpg',
                'description' => 'Description for Product 1',
                'price' => 15,
                'image1' => 'images/wallet.jpg',
                'image2' => 'images/wallet.jpg',
                'image3' => 'images/wallet.jpg',
                'image4' => 'images/wallet.jpg',
                'image5' => 'images/wallet.jpg',

            ],
            [
                'name' => 'Graduation hood box',
                'category_id' => 2,
                // Replace with actual category ID
                'image' => 'images/hoodbox.jpg',
                'description' => 'Description for Product 1',
                'price' => 15,
                'image1' => 'images/hoodbox.jpg',
                'image2' => 'images/hoodbox.jpg',
                'image3' => 'images/hoodbox.jpg',
                'image4' => 'images/hoodbox.jpg',
                'image5' => 'images/hoodbox.jpg',

            ],
            [
                'name' => 'Graduation Bear',
                'category_id' => 2,
                // Replace with actual category ID
                'image' => 'images/Bear.jpg',
                'description' => 'Description for Product 1',
                'price' => 15,
                'image1' => 'images/Bear.jpg',
                'image2' => 'images/Bear.jpg',
                'image3' => 'images/Bear.jpg',
                'image4' => 'images/Bear.jpg',
                'image5' => 'images/Bear.jpg',

            ],
            [
                'name' => 'Graduation Center Piece',
                'category_id' => 2,
                // Replace with actual category ID
                'image' => 'images/Graduation.png',
                'description' => 'Description for Product 1',
                'price' => 15,
                'image1' => 'images/Graduation.png',
                'image2' => 'images/Graduation.png',
                'image3' => 'images/Graduation.png',
                'image4' => 'images/Graduation.png',
                'image5' => 'images/Graduation.png',

            ],
            // Add more categories as needed
        ]);
    }
}
