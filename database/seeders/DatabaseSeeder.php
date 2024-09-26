<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargo;
use App\Models\Funcionario;
use App\Models\Cliente;
use App\Models\Venda;
use App\Models\Produto;
use App\Models\ProdutoVenda;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        CargoSeeder::class;
        FuncionarioSeeder::class;
        ClienteSeeder::class;
        VendaSeeder::class;
        ProdutoSeeder::class;
        ProdutoVendaSeeder::class;

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
