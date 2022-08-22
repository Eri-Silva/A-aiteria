<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Call>
 */
class CallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'tamanho' => fake()->tamanho(),
        'flavor_id' => fake()->flavor_id(),
        'complement_id' => fake()->complement_id(),
        'status' => fake()->status()
            //
        ];
    }
}
