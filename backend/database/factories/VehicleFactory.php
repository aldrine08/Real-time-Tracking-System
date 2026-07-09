<?php

namespace Database\Factories;

use App\Enums\VehicleStatus;
use App\Enums\VehicleType;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VehicleFactory extends Factory
{
    public function definition(): array
    {
        $types = VehicleType::cases();

        return [

            'uuid' => Str::uuid(),

            'company_id' => Company::inRandomOrder()->first()?->id,

            'registration_number' =>
                strtoupper(fake()->bothify('K?? ###?')),

            'fleet_number' =>
                'FLT-' . fake()->unique()->numberBetween(1000,9999),

            'type' =>
                fake()->randomElement($types),

            'brand' =>
                fake()->randomElement([

                    'Toyota',

                    'Isuzu',

                    'Mercedes',

                    'Bajaj',

                    'TVS',

                    'Yamaha'

                ]),

            'model' =>
                fake()->randomElement([

                    'Hiace',

                    'Canter',

                    'Boxer',

                    'Actros',

                    'FH',

                    'NQR'

                ]),

            'color' =>
                fake()->safeColorName(),

            'manufacture_year' =>
                fake()->numberBetween(2018,2025),

            'capacity_kg' =>
                fake()->numberBetween(80,15000),

            'fuel_type' =>
                fake()->randomElement([

                    'Petrol',

                    'Diesel',

                    'Electric'

                ]),

            'status' =>
                fake()->randomElement(VehicleStatus::cases()),

            'current_odometer' =>
                fake()->numberBetween(1000,200000),

            'insurance_expiry' =>
                fake()->dateTimeBetween('now', '+2 years'),

            'inspection_expiry' =>
                fake()->dateTimeBetween('now', '+1 year'),

            'notes' =>
                fake()->optional()->sentence(),

        ];
    }
}