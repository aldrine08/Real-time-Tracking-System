<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\SubscriptionPlan;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SubscriptionPlan::FREE->value;
        SubscriptionPlan::STARTER->value;
        SubscriptionPlan::BUSINESS->value;
        SubscriptionPlan::ENTERPRISE->value;
    }
}
