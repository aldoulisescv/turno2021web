<?php

namespace Database\Factories;

use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Session::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'enabled' => $this->faker->word,
        'establishment_id' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'duration' => $this->faker->word,
        'cost' => $this->faker->randomDigitNotNull,
        'max_days_schedule' => $this->faker->randomDigitNotNull,
        'max_hours_schedule' => $this->faker->randomDigitNotNull,
        'max_minutes_schedule' => $this->faker->randomDigitNotNull,
        'min_days_schedule' => $this->faker->randomDigitNotNull,
        'min_hours_schedule' => $this->faker->randomDigitNotNull,
        'min_minutes_schedule' => $this->faker->randomDigitNotNull,
        'standby_time' => $this->faker->word,
        'time_btwn_session' => $this->faker->word,
        'end_date' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
