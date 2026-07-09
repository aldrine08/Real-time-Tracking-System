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

            RideSeeder::class,

            ShipmentSeeder::class,

            TrackingSeeder::class,

            VehicleSeeder::class,

            WarehouseSeeder::class,

            SubscriptionPlanSeeder::class,





        ]);
    }
}