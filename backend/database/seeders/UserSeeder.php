<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\UserStatus;
use App\Models\User;
use App\Models\Company;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Enums\RoleType;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserStatus::ACTIVE->value;
        UserStatus::INACTIVE->value;
        UserStatus::SUSPENDED->value;
        UserStatus::PENDING->value;
        
    }
}
