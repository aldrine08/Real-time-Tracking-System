<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Enums\RoleType;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [

            [
                'name' => RoleType::SUPER_ADMIN->value,
                'description' => 'Platform administrator'
            ],

            [
                'name' => RoleType::MERCHANT_ADMIN->value,
                'description' => 'Company administrator'
            ],

            [
                'name' => RoleType::DISPATCHER->value,
                'description' => 'Assigns riders and manages deliveries'
            ],

            [
                'name' => RoleType::RIDER->value,
                'description' => 'Performs deliveries'
            ],

            [
                'name' => RoleType::WAREHOUSE_STAFF->value,
                'description' => 'Manages warehouse operations'
            ],

            [
                'name' => RoleType::CUSTOMER_SUPPORT->value,
                'description' => 'Supports customers'
            ],

        ];

        foreach ($roles as $role) {

            Role::create([

                'uuid' => Str::uuid(),

                'name' => $role['name'],

                'description' => $role['description']

            ]);
        }
    }
}