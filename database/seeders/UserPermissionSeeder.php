<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
            $super = User::create(array_merge([
                'email' => 'super@gmail.com',
                'name' => 'dimaz ivan super',
            ], $default_user_value));

            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'dimaz ivan admin',
            ], $default_user_value));

            $user = User::create(array_merge([
                'email' => 'user@gmail.com',
                'name' => 'dimaz ivan user',
            ], $default_user_value));

            $role_super = Role::create(['name' => 'super']);
            $role_admin = Role::create(['name' => 'admin']);
            $role_user = Role::create(['name' => 'user']);

            // Basic Role
            $permission = Permission::create(['name' => 'roleRead']);
            $permission = Permission::create(['name' => 'roleCreate']);
            $permission = Permission::create(['name' => 'roleUpdate']);
            $permission = Permission::create(['name' => 'roleDelete']);

            // Data Role
            $permission = Permission::create(['name' => 'roleDataUser']);

            $role_super->givePermissionTo('roleRead');
            $role_super->givePermissionTo('roleCreate');
            $role_super->givePermissionTo('roleUpdate');
            $role_super->givePermissionTo('roleDelete');
            $role_super->givePermissionTo('roleDataUser');

            $super->assignRole('super');
            $admin->assignRole('admin');
            $user->assignRole('user');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
}
