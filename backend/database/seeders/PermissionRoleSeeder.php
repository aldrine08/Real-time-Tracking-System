<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use App\Enums\RoleType;

class PermissionRoleSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Role::where(
            'name',
            RoleType::SUPER_ADMIN->value
        )->first();

        if (!$superAdmin) {
            return;
        }

        $superAdmin->permissions()->sync(
            Permission::pluck('id')->toArray()
        );
    }
}