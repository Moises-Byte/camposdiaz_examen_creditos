<?php

namespace Database\Factories;

use App\Models\clients;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<clients>
 */
class clientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'mail' => fake()->email(),
            'phone'=>fake()->phoneNumber(),
            'street' => fake()->streetAddress(),
            'avenue' => fake()->address(),
        ];
    }
}
