<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venda;
use App\Models\Produto;

/**
 * Class Funcionario
 *
 * @property unsignedBigInteger $id
 * @property unsignedBigInteger $venda_id
 * @property unsignedBigInteger $produto_id
 * @property integer $qtdVendida
 *
 */

class ProdutoVenda extends Model
{
    use HasFactory;
    protected $table = 'produto_venda';

    protected $fillable = [
        'venda_id',
        'produto_id',
        'qtdVendida',
    ];
}
