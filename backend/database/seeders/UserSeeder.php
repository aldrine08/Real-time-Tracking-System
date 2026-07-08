<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\UserStatus;

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
