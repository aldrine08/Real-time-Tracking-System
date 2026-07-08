<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [

            [
                'name' => 'Super Admin',
                'description' => 'Platform administrator'
            ],

            [
                'name' => 'Merchant Admin',
                'description' => 'Company administrator'
            ],

            [
                'name' => 'Dispatcher',
                'description' => 'Assigns riders and manages deliveries'
            ],

            [
                'name' => 'Rider',
                'description' => 'Performs deliveries'
            ],

            [
                'name' => 'Warehouse Staff',
                'description' => 'Manages warehouse operations'
            ],

            [
                'name' => 'Customer Support',
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