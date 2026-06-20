<?php

namespace Database\Factories;

use App\Models\clients;
use App\Models\credit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<credit>
 */
class creditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'monto' => fake()->numberBetween(100, 2000),
            'tipo_pago' => fake()->randomElement(['diario', 'semanal', 'mensual']),
            'plazo' => fake()->numberBetween(5, 20),
            'clients_id' => clients::factory(),
        ];
    }
}
