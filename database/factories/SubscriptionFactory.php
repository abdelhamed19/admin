<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Plan;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number'=>Carbon::now()->year.$this->faker->name,
            'admin_id'=>Admin::inRandomOrder()->first()->id,
            'plan_id'=>Plan::inRandomOrder()->first()->id,
            'start_date'=>$this->faker->date(),
            'end_date'=>$this->faker->date(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
