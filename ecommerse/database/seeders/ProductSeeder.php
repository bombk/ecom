<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
          [
            [
                'name'=>'OPPO Mobile',
                'price'=>'10000',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ],
            [
                'name'=>'VIVO Mobile',
                'price'=>'10000',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ],  [
                'name'=>'Realme Mobile',
                'price'=>'10000',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ],
            [
                'name'=>'Redmi Mobile',
                'price'=>'10000',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ],  [
                'name'=>'Nokia Mobile',
                'price'=>'10000',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ],  [
                'name'=>'iphone Mobile',
                'price'=>'10000',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ],  [
                'name'=>'TV',
                'price'=>'10000',
                'category'=>'tv',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ],  [
                'name'=>'Smart Watch',
                'price'=>'10000',
                'category'=>'watch',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ],  [
                'name'=>'Camera',
                'price'=>'10000',
                'category'=>'camera',
                'gallery'=>'https://www.lg.com/in/mobile-phones',
                'description'=>'a smartphone having ram 4 gb'
                
            ]
          ]
            );
    }
}
