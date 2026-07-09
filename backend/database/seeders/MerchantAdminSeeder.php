<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Enums\UserStatus;
use App\Enums\RoleType;

class MerchantAdminSeeder extends Seeder
{
    public function run(): void
    {
        $company = Company::first();

        $role = Role::where(
            'name',
            RoleType::MERCHANT_ADMIN->value
        )->first();

        if (!$company || !$role) {
            return;
        }

        User::updateOrCreate(

            [
                'email' => 'admin@realtrack.test',
            ],

            [

                'company_id' => $company->id,

                'role_id' => $role->id,

                'name' => 'Aldrine Admin',

'first_name' => 'Aldrine',

'last_name' => 'Admin',

                'phone' => '+254700000000',

                'password' => Hash::make('password'),

                'status' => UserStatus::ACTIVE,

            ]

        );
    }
}