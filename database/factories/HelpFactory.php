<?php

namespace Database\Factories;

use App\Models\Help;
use Illuminate\Database\Eloquent\Factories\Factory;

class HelpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Help::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status_help_id' => $this->faker->randomDigitNotNull,
        'user_id' => $this->faker->word,
        'help_type' => $this->faker->word,
        'description' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
