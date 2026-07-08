<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Role::where('name', 'Super Admin')->first();

        $superAdmin->permissions()->sync(
            Permission::pluck('id')
        );
    }
}