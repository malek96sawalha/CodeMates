<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('discounts')->insert(
        [
            ['id'=>1,
                    'description'=>'re',
                    'discountPercent'=>1,
                    'active'=>1,

            ]
        ]
        );
    }
}
