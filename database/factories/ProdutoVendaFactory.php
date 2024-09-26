<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutoVendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'venda_id'=>Venda::inRandomOrder()->value('id'),
            'produto_id'=>Produto::inRandomOrder()->value('id'),
            'qtdVendida' => fake()->numerify('##'),

        ];
    }
}
