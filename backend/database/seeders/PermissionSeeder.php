<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {

        $permissions = [

            // Shipments
            'Create Shipment',
            'Edit Shipment',
            'Delete Shipment',
            'View Shipment',

            // Riders
            'Assign Rider',
            'View Rider Location',

            // Vehicles
            'Manage Vehicles',

            // Warehouses
            'Manage Warehouses',

            // Customers
            'Manage Customers',

            // Reports
            'View Reports',
            'Export Reports',

            // Billing
            'Manage Billing',

            // Users
            'Manage Users',

            // Tracking
            'View Live Tracking',

            // Notifications
            'Send Notifications',

        ];

        foreach ($permissions as $permission) {

            Permission::create([

                'uuid' => Str::uuid(),

                'name' => $permission,

                'description' => $permission

            ]);
        }

    }
}