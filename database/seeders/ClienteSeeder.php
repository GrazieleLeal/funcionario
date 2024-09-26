<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Funcionario;
use App\Models\Cliente;


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Lúcia',
            'dataNascimento' => '2010-05-01',
            'funcionario_id' => Funcionario::inRandomOrder()->value('id'),
        ]);

        Cliente::factory()->count(6)->create();
    }
}
