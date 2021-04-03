<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super',
            'email' => 'admin@gmail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('1234567890'),
            'enabled' => 1,
            'lastname' => 'Admin',
            'user_name' => 'superadmin',
            'phone' => '1111111111',
            'terms' => 1,
            'privacy_notice' => 1,
        ]);
        $user->assignRole('super_admin');

        $user = User::create([
            'name' => 'Pre',
            'email' => 'preadmin@gmail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('1234567890'),
            'enabled' => 1,
            'lastname' => 'Admin',
            'user_name' => 'preadmin',
            'phone' => '2222222222',
            'terms' => 1,
            'privacy_notice' => 1,
        ]);
        $user->assignRole('preadmin');
        $user = User::create([
            'name' => 'Admin',
            'email' => 'adminadmin@gmail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('1234567890'),
            'enabled' => 1,
            'establishment_id' => 1,
            'lastname' => 'Admin',
            'user_name' => 'adminadmin',
            'phone' => '3333333333',
            'terms' => 1,
            'privacy_notice' => 1,
        ]);
        $user->assignRole('admin');
        $user = User::create([
            'name' => 'User',
            'email' => 'user1@gmail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('1234567890'),
            'enabled' => 1,
            'establishment_id' => 1,
            'lastname' => 'Uno',
            'user_name' => 'useruno',
            'phone' => '44444444444',
            'terms' => 1,
            'privacy_notice' => 1,
        ]);
        $user->assignRole('user');
        $user = User::create([
            'name' => 'User',
            'email' => 'user2@gmail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('1234567890'),
            'enabled' => 1,
            'establishment_id' => 1,
            'lastname' => 'Dos',
            'user_name' => 'userdos',
            'phone' => '5555555555',
            'terms' => 1,
            'privacy_notice' => 1,
        ]);
        $user->assignRole('user');
        $user = User::create([
            'name' => 'Cliente',
            'email' => 'cliente1@gmail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('1234567890'),
            'enabled' => 1,
            'lastname' => 'Uno',
            'user_name' => 'cliente1',
            'phone' => '66666666666',
            'terms' => 1,
            'privacy_notice' => 1,
        ]);
        $user->assignRole('client');
    }
}
