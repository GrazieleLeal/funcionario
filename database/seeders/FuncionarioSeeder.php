<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Funcionario;
use App\Models\Cargo;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcionario::create([
            'nome' => 'enzo',
            'cpf' => '000.000.00-000',
            'dataAdmissao' => '2023-12-10',
            'dataDemissao' => '2024-12-10',
            'dataNascimento' => '2000-12-10',
            'salario' => 2500,
            'cargo_id' => Cargo::inRandomOrder()->value('id'),
        ]);

        Funcionario::factory()->count(6)->create();

    }
}
