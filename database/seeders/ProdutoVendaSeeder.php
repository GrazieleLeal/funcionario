<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdutoVenda;
use App\Models\Venda;
use App\Models\Produto;

class ProdutoVendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdutoVenda::factory()->count(6)->create();
    }
}
