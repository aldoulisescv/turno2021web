<?php

namespace Database\Factories;

use App\Models\Prospect;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProspectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prospect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'owner' => $this->faker->word,
        'image' => $this->faker->word,
        'latitude' => $this->faker->word,
        'longitude' => $this->faker->word,
        'address' => $this->faker->word,
        'phone' => $this->faker->word,
        'sent_wa' => $this->faker->word,
        'facebook' => $this->faker->word,
        'sent_fb' => $this->faker->word,
        'instagram' => $this->faker->word,
        'sent_ig' => $this->faker->word,
        'notes' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
