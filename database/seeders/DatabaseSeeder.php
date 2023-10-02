<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Stripe\Product;
use Faker\Factory as FakerFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
// Create an instance of the Faker library
        $faker = FakerFactory::create();

        // Seed the 'products' table with 50 sample products
       
            // Product::create([
            //     'name' => $faker->sentence(3),
            //     'description' => $faker->paragraph(3),
            //     'price' => $faker->randomFloat(2, 10, 100),
            //     'created_at' => now(),
            //     'updated_at' => now(),]);
        $this->call([
            User::class,
            CategorySeeder::class,
            DiscountSeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
            PlanSeeder::class,
            AdminSeeder::class,

        ]);
    }
}
