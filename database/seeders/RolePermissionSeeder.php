<?php

namespace Database\Seeders;

use App\Constants\Permissions;
use App\Constants\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => Permissions::Dashboard['name'], 'guard_name' => 'web']);
        Permission::create(['name' => Permissions::DaftarUser['name'], 'guard_name' => 'web']);
        Permission::create(['name' => Permissions::TambahUser['name'], 'guard_name' => 'web']);
        Permission::create(['name' => Permissions::UpdateUser['name'], 'guard_name' => 'web']);
        Permission::create(['name' => Permissions::DeleteUser['name'], 'guard_name' => 'web']);
        Permission::create(['name' => Permissions::IndexAbsensi['name'], 'guard_name' => 'web']);

        $admin = Role::create(['name' => Roles::ADMIN]);
        $admin->givePermissionTo(Permissions::Dashboard['name']);
        $admin->givePermissionTo(Permissions::DaftarUser['name']);
        $admin->givePermissionTo(Permissions::TambahUser['name']);
        $admin->givePermissionTo(Permissions::UpdateUser['name']);
        $admin->givePermissionTo(Permissions::DeleteUser['name']);
        $admin->givePermissionTo(Permissions::IndexAbsensi['name']);

        $user = Role::create(['name' => Roles::USER]);
        $user->givePermissionTo(Permissions::IndexAbsensi['name']);
    }
}
