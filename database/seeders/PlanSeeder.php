<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Kids Standard Plan',
                'slug' => 'KidsStandard',
                'stripe_plan' => 'price_1NvjMDKjD3e5Hnk5PSLJfOPS',
                'price' => 10,
                'description' => 'Business Plan'
            ],
            [
                'name' => 'Kids Premium plan',
                'slug' => 'kidsPremium',
                'stripe_plan' => 'price_1NvjO0KjD3e5Hnk5XCnxIsTf',
                'price' => 30,
                'description' => 'Premium'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
