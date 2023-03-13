<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startDate = '2022-01-01 00:00:00'; // Define start date
        $endDate = '2023-02-28 23:59:59'; // Define end date
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'title' => fake()->name(),
            'description' => fake()->paragraphs(4, true),
            'price_min' => fake()->numberBetween(1, 5),
            'price_max' => fake()->numberBetween(5, 10),
            'categories' => fake()->jobTitle(),
            'delivery_time' => fake()->time(),
            'status' => fake()->randomElement([true, false]),
            'created_at' => fake()->dateTimeBetween($startDate, $endDate),
            'updated_at' => fake()->dateTimeBetween($startDate, $endDate),

        ];
    }
}
