<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realTextBetween(10, 30),
            'category' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(1, 10000),
            'currency' => $this->faker->randomElement(['EUR', 'USD'])
        ];
    }
}
