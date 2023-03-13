<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'username' => fake()->name(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'job_title' => fake()->jobTitle(),
            'rank' => 'mustaqil',
            'image' => 'image.png',
            'id_image' => 'ID image.png',
            'personal_description' => fake()->paragraph(),
            'completed_projects' => fake()->numberBetween(0, 50),
            'evaluation' => fake()->randomFloat(1, 0, 5), // Generate a random float with 1 decimal places, between 0 and 5
            /* 'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'), */
            'created_at' => fake()->dateTimeBetween($startDate, $endDate),
            'updated_at' => fake()->dateTimeBetween($startDate, $endDate),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
