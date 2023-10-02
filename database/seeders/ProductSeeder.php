<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['id'=>1,
                'name' => 'Pandora',
                'categoryId'=>1,
                'discountId'=>1,
                'shortDescription' => 'As a volunteer in our Front-End Foundations project, you will empower individuals with the essential web development skills—HTML, CSS, and JavaScript. Our mentorship program guides you in nurturing talent, from basics to responsive design. 
                ',
                'longDescription' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'cartDescription' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'img' => 'images/defultimg.jpg',
                'img1' => 'images/defultimg.jpg',
                'img2' => 'images/defultimg.jpg',
                'img3' => 'images/defultimg.jpg',
                'cla' => 14,
                'price' => 140,
                'prot' => ' sun mon thu , for two weeks' ,
                     
            ],
            ['id'=>2,
                'name' => 'Pandora',
                'categoryId'=>1,
                'discountId'=>1,
                'shortDescription' => 'As a volunteer in our Front-End Foundations project, you will empower individuals with the essential web development skills—HTML, CSS, and JavaScript. Our mentorship program guides you in nurturing talent, from basics to responsive design. 
                ',
                'longDescription' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'cartDescription' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'img' => 'images/defultimg.jpg' ,
                'img1' => 'images/defultimg.jpg',
                'img2' => 'images/defultimg.jpg',
                'img3' => 'images/defultimg.jpg',
                'cla' => 184,
                'price' => 180,

                'prot' => ' sun mon thu , for two weeks' ,
                     
            ],
                   
            
       ] );
    }
    
}
