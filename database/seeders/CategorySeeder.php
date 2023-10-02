<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    
    public function run()
    {

        // Insert new data
        DB::table('categories')->insert([
            [
                'id'=>1,
            'name' => 'Kids',
                'description' => 'Kids',
            'img' => 'images/kidscategory.webp',
        ],
            [
                'id' => 2,

                'name' => 'Employee',
                'description' => 'Employee',
                'img' => 'images/employcate.jpg',
            ],
        
    ]);

    }

    }

