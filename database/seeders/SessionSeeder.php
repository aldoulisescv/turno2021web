<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Session;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Session::create([
            'enabled' => 1,
            'establishment_id' => 1,
            'name' => 'Resina',
            'duration' => '00:30',
            'cost' => 350,
            'max_days_schedule' => 0,
            'max_hours_schedule' => 0,
            'max_minutes_schedule' => 0,
            'min_days_schedule' => 0,
            'min_hours_schedule' => 0,
            'min_minutes_schedule' => 0,
            'standby_time'=>'00:15',
            'time_btwn_session'=>'00:00',
            'end_date'=>null,
            'color' =>'#FF33EC',
        ]);
        Session::create([
            'enabled' => 1,
            'establishment_id' => 1,
            'name' => 'Ajuste Brackets',
            'duration' => '00:15',
            'cost' => 300,
            'max_days_schedule' => 2,
            'max_hours_schedule' => 0,
            'max_minutes_schedule' => 0,
            'min_days_schedule' => 0,
            'min_hours_schedule' => 1,
            'min_minutes_schedule' => 15,
            'standby_time'=>'00:00',
            'time_btwn_session'=>'00:00',
            'end_date'=>null,
            'color' =>'#4133FF',
        ]);
        Session::create([
            'enabled' => 1,
            'establishment_id' => 1,
            'name' => 'Extracción Molar',
            'duration' => '01:00',
            'cost' => 300,
            'max_days_schedule' => 5,
            'max_hours_schedule' => 0,
            'max_minutes_schedule' => 0,
            'min_days_schedule' => 0,
            'min_hours_schedule' => 1,
            'min_minutes_schedule' => 15,
            'standby_time'=>'00:15',
            'time_btwn_session'=>'00:15',
            'end_date'=>null,
            'color' =>'#027802',
        ]);
    }
}
