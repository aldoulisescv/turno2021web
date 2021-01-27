<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'enabled' => $this->faker->word,
        'resource_id' => $this->faker->randomDigitNotNull,
        'start_hour' => $this->faker->word,
        'end_hour' => $this->faker->word,
        'sunday' => $this->faker->word,
        'monday' => $this->faker->word,
        'tuesday' => $this->faker->word,
        'wednesday' => $this->faker->word,
        'thrusday' => $this->faker->word,
        'friday' => $this->faker->word,
        'saturday' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
