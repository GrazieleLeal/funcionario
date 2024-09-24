<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cargo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nome' => fake()->name(),
            'cpf' => fake()->numerify('###.###.###-##'),
            'dataAdmissao' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'dataDemissao' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'dataNascimento' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'salario' => fake()->numerify('##.##'),
            'cargo_id'=>Cargo::inRandomOrder()->value('id'),
        ];
    }
}
