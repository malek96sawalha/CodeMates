<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(
[
    'name'=>'ahmad',
    'email'=>'ahmad@ahmad.com',
    'password'=>'Aa0772659270*++',

]
        );
    }
}
