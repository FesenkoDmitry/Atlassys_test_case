<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'currency' => $this->faker->randomElement(['USD', 'EUR']),
            'value' => $this->faker->randomFloat(2, 10, 100)
        ];
    }
}
