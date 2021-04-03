<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'enabled' => 1,
            'resource_id' => 1,
            'start_hour' => '10:30',
            'end_hour' => '22:30',
            'sunday' => 0,
            'monday' => 1,
            'tuesday' => 1,
            'wednesday' => 1,
            'thrusday' => 0,
            'friday' => 0,
            'saturday' => 0,
        ]);
        Schedule::create([
            'enabled' => 1,
            'resource_id' => 1,
            'start_hour' => '8:30',
            'end_hour' => '14:30',
            'sunday' => 0,
            'monday' => 0,
            'tuesday' => 0,
            'wednesday' => 0,
            'thrusday' => 1,
            'friday' => 1,
            'saturday' => 1,
        ]);
        Schedule::create([
            'enabled' => 1,
            'resource_id' => 1,
            'start_hour' => '16:00',
            'end_hour' => '21:00',
            'sunday' => 0,
            'monday' => 0,
            'tuesday' => 0,
            'wednesday' => 0,
            'thrusday' => 1,
            'friday' => 1,
            'saturday' => 1,
        ]);
        Schedule::create([
            'enabled' => 1,
            'resource_id' => 2,
            'start_hour' => '10:30',
            'end_hour' => '22:30',
            'sunday' => 1,
            'monday' => 0,
            'tuesday' => 1,
            'wednesday' => 0,
            'thrusday' => 1,
            'friday' => 0,
            'saturday' => 0,
        ]);
        Schedule::create([
            'enabled' => 1,
            'resource_id' => 2,
            'start_hour' => '8:30',
            'end_hour' => '14:30',
            'sunday' => 0,
            'monday' => 1,
            'tuesday' => 0,
            'wednesday' => 1,
            'thrusday' => 0,
            'friday' => 1,
            'saturday' => 1,
        ]);
        Schedule::create([
            'enabled' => 1,
            'resource_id' => 2,
            'start_hour' => '16:00',
            'end_hour' => '21:00',
            'sunday' => 0,
            'monday' => 1,
            'tuesday' => 0,
            'wednesday' => 1,
            'thrusday' => 0,
            'friday' => 1,
            'saturday' => 1,
        ]);
    }
}
