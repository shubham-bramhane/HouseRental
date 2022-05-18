<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'location' => $this->faker->address,
            'pincode' => $this->faker->randomElement(['442902', '442507', '442505', '445307']),
            'PropertyName' => $this->faker->word,
            'PropertyType' => $this->faker->word,
            'status' => $this->faker->word,
            'area' => $this->faker->numberBetween(1, 100),
            'Beds' => $this->faker->numberBetween(1, 10),
            'Baths' => $this->faker->numberBetween(1, 10),
            'garage' => $this->faker->numberBetween(1, 10),
            'PropertyDesc' => $this->faker->text,
            'price' => $this->faker->numberBetween(1, 100000),
            'amenities' => $this->faker->word,
            'propertyImage' => NULL,
        ];
    }
}
