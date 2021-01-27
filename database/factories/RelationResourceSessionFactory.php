<?php

namespace Database\Factories;

use App\Models\RelationResourceSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class RelationResourceSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RelationResourceSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'resource_id' => $this->faker->randomDigitNotNull,
        'session_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
