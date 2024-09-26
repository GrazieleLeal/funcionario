<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

/**
 * Class Funcionario
 *
 * @property unsignedBigInteger $id
 * @property Carbon $dataHora
 * @property float $somaTotal
 * @property unsignedBigInteger $cliente_id
 *
 */

class Venda extends Model
{
    use HasFactory;
    protected $table = 'venda';

    protected $fillable = [
        'dataHora',
        'somaTotal',
        'cliente_id'
    ];
}
