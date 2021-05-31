<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'  => 1 ,
                'name' => 'name1',
                'email' => 'admin@admin.com',
                'password' => Hash::make('secret'),
                'role' => 'product1',
            ],
            [
                'id'  => 2,
                'name' => 'name2',
                'email' => 'admin2@admin.com',
                'password' => Hash::make('secret'),
                'role' => 'product2',
            ],
            [
                'id'  => 3,
                'name' => 'name3',
                'email' => 'admin3@admin.com',
                'password' => Hash::make('secret'),
                'role' => 'product3',
            ],
        ]);
    }
}
