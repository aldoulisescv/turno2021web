<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(EstablishmentSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ResourceSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(RelationResourceSessionSeeder::class);
        $this->call(StatusTurnoSeeder::class);
    }
}
