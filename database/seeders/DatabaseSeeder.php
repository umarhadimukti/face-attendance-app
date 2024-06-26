<?php

namespace Database\Seeders;

use App\Constants\Roles;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\RolePermissionSeeder;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolePermissionSeeder::class);

        $users = User::factory(10)->create();

        $userRole = Role::findByName(Roles::USER);
        $userRole->users()->attach($users);

        $admin = User::create([
            'name' => 'Umar Hadi Mukti',
            'username' => 'umarhadimukti',
            'email' => 'umarhadimukti@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12344321'),
        ]);
        $admin->assignRole(Roles::ADMIN);
    }
}
