<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([

            CompanySeeder::class,

            RoleSeeder::class,

            PermissionSeeder::class,

            PermissionRoleSeeder::class,

            UserSeeder::class,

            MerchantAdminSeeder::class,

            SubscriptionPlanSeeder::class,

            VehicleSeeder::class,





        ]);
    }
}