<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
          [
            [
                'name'=>'OPPO Mobile',
                'price'=>'20000',
                'category'=>'Mobile',
                'description'=>'oppo  is with 4gb ram and mush memory ',
                'gallery'=>"https://tse2.mm.bing.net/th?id=OIP.uGmnwS8hJdm0EwkenY6nAAHaG8&pid=Api&P=0&h=220",


            ],
            [
                'name'=>'vivo Mobile',
                'price'=>'30000',
                'category'=>'Mobile',
                'description'=>'vivo  is with 4gb ram and mush memory ',
                'gallery'=>"https://tse3.mm.bing.net/th?id=OIP.htx8iT_QBVYBOe3U7Ly3fgHaHa&pid=Api&P=0&h=220",

            ],
            [
                'name'=>'iphone  Mobile',
                'price'=>'200000',
                'category'=>'Mobile',
                'description'=>'iphone phone   is with 4gb ram and mush memory ',
                'gallery'=>"https://tse1.mm.bing.net/th?id=OIP.ljC6onIipoGype1azOmXagHaJU&pid=Api&P=0&h=220",

            ],

          ]
        );
    }
}
