<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Birthday',
                'image' => 'images/birthday.png',

            ],
            [
                'name' => 'Graduation',
                'image' => 'images/graduation.jpg',

            ],
            [
                'name' => 'Wedding',
                'image' => 'images/wedding.jpg',

            ],
            // Add more categories as needed
        ]);
    }
}
