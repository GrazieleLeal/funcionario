<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dataHora' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'somaTotal' => fake()->numerify('##.##'),
            'cliente_id'=>Cliente::inRandomOrder()->value('id'),
        ];
    }
}
