<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('reviews')->insert(
            ['star'=>1,
                'description'=>'WOOOOOW THATS COOL MAN',
                'productId'=>1,
                'userId'=>1,
                'image'=>'images/defultimg.jpg'
        ]);
    }
}
