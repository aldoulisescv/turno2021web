<?php

namespace Database\Factories;

use App\Models\Establishment;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstablishmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Establishment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'enabled' => $this->faker->word,
        'category_id' => $this->faker->randomDigitNotNull,
        'subcategory_id' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'logo' => $this->faker->word,
        'stepping' => $this->faker->randomDigitNotNull,
        'street' => $this->faker->word,
        'num_ext' => $this->faker->word,
        'num_int' => $this->faker->word,
        'postal_code' => $this->faker->word,
        'zone' => $this->faker->word,
        'city' => $this->faker->word,
        'state' => $this->faker->word,
        'country' => $this->faker->word,
        'latitude' => $this->faker->word,
        'longitude' => $this->faker->word,
        'email' => $this->faker->word,
        'phone' => $this->faker->word,
        'holidays_extra' => $this->faker->word,
        'holidays_official' => $this->faker->word,
        'help_tooltip' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
