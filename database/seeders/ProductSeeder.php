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
        $data = array(
            array ('name' => 'iphone 12', 'price' => '1,20,000',"category"=>"mobile","description"=>"iphone 12 128gb 5G","gallery"=>"https://static.digit.in/product/284c81498a93a82db7b5db6600494c20bee4f18e.jpeg?tr=w-1200"),
            array ('name' => 'iphone 12 mini', 'price' => '1,50,000',"category"=>"mobile","description"=>"iphone 12 128gb 5G","gallery"=>"https://cdn.dnaindia.com/sites/default/files/styles/third/public/2021/02/06/955555-iphone-new.jpg?itok=rP0VtMgL"),
            array ('name' => 'oneplus 8', 'price' => '35,000',"category"=>"mobile","description"=>"iphone 12 128gb 5G","gallery"=>"https://www.91-img.com/pictures/138581-v4-oneplus-8t-mobile-phone-large-1.jpg?tr=q-60")
        );
        DB::table('products')->insert($data);
    }
}
