<?php

namespace Database\Seeders;

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
           [ 'name'=>'LG mobile1',
           'price'=>'200',
           'category'=>'mobile',
           'description'=>'test text',
           'gallery'=>'https://www.lg.com/ru/images/plp-b2c/b2c-4/ru-tvaudiovideo-hero-6-d.jpg'
           ],
           [ 'name'=>'LG mobile2',
           'price'=>'200',
           'category'=>'mobile',
           'description'=>'test text',
           'gallery'=>'https://www.lg.com/ru/images/plp-b2c/b2c-4/ru-tvaudiovideo-hero-6-d.jpg'
           ],
           [ 'name'=>'LG mobile3',
           'price'=>'200',
           'category'=>'mobile',
           'description'=>'test text',
           'gallery'=>'https://www.lg.com/ru/images/plp-b2c/b2c-4/ru-tvaudiovideo-hero-6-d.jpg'
           ],
           [ 'name'=>'LG mobile4',
           'price'=>'200',
           'category'=>'mobile',
           'description'=>'test text',
           'gallery'=>'https://www.lg.com/ru/images/plp-b2c/b2c-4/ru-tvaudiovideo-hero-6-d.jpg'
           ] 
        ]);
    }
}
