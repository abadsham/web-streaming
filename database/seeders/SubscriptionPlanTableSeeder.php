<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptionPlans = [
            [
                'name' => 'Basic',
                'price' => 2000,
                'active_period_in_months' => 3,
                'features' => json_encode(['feature1', 'feature2']),
            ], 
            [
                'name' => 'premium',
                'price' => 5000,
                'active_period_in_months' => 6,
                'features' => json_encode(['feature1', 'feature2', 'feature2', 'feature2']),
            ],
        ];

        SubscriptionPlan::insert($subscriptionPlans);
    }
}
