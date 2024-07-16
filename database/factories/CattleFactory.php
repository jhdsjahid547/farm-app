<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cattle>
 */
class CattleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'type_id' => fake()->numberBetween(1,4),
            'gender_id' => fake()->numberBetween(5,6),
            'breed_id' => fake()->numberBetween(7,10),
            'subsection_id' => fake()->numberBetween(11,13),
            'tag' => fake()->numberBetween(10, 99),
            'dob' => fake()->date(),
            'description' => fake()->sentence(10)
        ];
    }
}
