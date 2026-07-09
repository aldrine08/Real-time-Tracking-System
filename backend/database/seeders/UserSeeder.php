<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Company;
use Illuminate\Database\Seeder;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $roles = Role::all();

        foreach (Company::all() as $company) {

            foreach ($roles as $role) {

                User::factory()->create([

                    'company_id' => $company->id,

                    'role_id' => $role->id,

                    'password' => Hash::make('password'),

                    'status' => UserStatus::ACTIVE,

                ]);

            }

        }
    }
}