<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'domicilio' => fake()->streetName(),
            'numero_exterior' => fake()->buildingNumber(),
            'colonia' => fake()->lastName(),
            'cp' => fake()->numberBetween(10000, 99999),
            'ciudad' => fake()->city(),
        ];
    }
}
