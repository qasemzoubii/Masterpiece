<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            //admin

            [

            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'admin'

            ],

            [

            //user

            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'user'

            ],


        ]);
    }
}
