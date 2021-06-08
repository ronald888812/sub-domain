<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\models\Product;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Product::insert([
            [
                'id'  => 1 ,
                'title_en'=> 'title en 1',
                'title_id'=> 'title id 1',
                'desc_id'=> 'description id 1' ,
                'desc_en'=> 'description en 1',
            ],
            [
                'id'  => 2,
                'title_en'=> 'title en 2',
                'title_id'=> 'title id 2',
                'desc_id'=> 'description id 2' ,
                'desc_en'=> 'description en 2' 
            ],
        ]);
    }
}
