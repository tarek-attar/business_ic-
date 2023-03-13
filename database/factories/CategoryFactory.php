<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            'name' => fake()->name(),
            'created_at' => fake()->dateTimeBetween($startDate, $endDate),
            'updated_at' => fake()->dateTimeBetween($startDate, $endDate),
        ];
    }
}
