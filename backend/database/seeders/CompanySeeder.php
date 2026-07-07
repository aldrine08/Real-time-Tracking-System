<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([
            'uuid' => Str::uuid(),
            'name' => 'WRLD SOLUTIONS',
            'email' => 'info@wrldsolutions.com',
            'phone' => '+254700000000',
            'website' => 'https://wrldsolutions.com',
            'city' => 'Nairobi',
            'country' => 'Kenya',
            'timezone' => 'Africa/Nairobi',
            'subscription_plan' => 'Enterprise',
            'subscription_status' => 'Active',
            'status' => true,
        ]);

        Company::factory()->count(10)->create();
    }
}