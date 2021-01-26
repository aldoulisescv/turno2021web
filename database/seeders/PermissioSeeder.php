<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PermissioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array=[];
        array_push($permissions_array,  Permission::create(['name' => 'creteusers']));
        array_push($permissions_array,  Permission::create(['name' => 'editusers']));
        array_push($permissions_array,  Permission::create(['name' => 'deleteusers']));
        array_push($permissions_array,  Permission::create(['name' => 'viewusers']));
        $role = Role::create(['name' => 'super_admin']);
        $role->syncPermissions($permissions_array);
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567890'),
        ]);
        $user->assignRole('super_admin');
    }
}
