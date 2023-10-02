<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        
        // Insert new data
        DB::table('admins')->insert([
            'name' => 'Admin',
                'last_name' => 'admin',
                'email' => 'admin@admin.com',
                'password' =>Hash::make('admin123456$$') ,
                'image' =>   'https://i.pinimg.com/564x/e4/ae/91/e4ae913770319fc3230da7b28530d82c.jpg'


            ],

    );




            // Admin::factory()->count(1)->create();
    }

    }

