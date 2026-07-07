<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    public function definition(): array
    {
        return [

            'uuid' => Str::uuid(),

            'name' => fake()->company(),

            'email' => fake()->unique()->companyEmail(),

            'phone' => fake()->phoneNumber(),

            'website' => fake()->url(),

            'logo' => null,

            'address' => fake()->address(),

            'city' => fake()->city(),

            'country' => 'Kenya',

            'timezone' => 'Africa/Nairobi',

            'subscription_plan' => fake()->randomElement([
                'Free',
                'Starter',
                'Business',
                'Enterprise'
            ]),

            'subscription_status' => 'Active',

            'status' => true

        ];
    }
}