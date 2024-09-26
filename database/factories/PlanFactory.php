<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price'=> $this->faker->randomFloat(2, 0, 100),
            'period'=> $this->faker->randomElement(['monthly', 'yearly']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
