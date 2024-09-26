<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Funcionario
 *
 * @property unsignedBigInteger $id
 * @property string $nome
 * @property integer $qtdEstoque
 * @property float $precoUnitario
 *
 */

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produto';

    protected $fillable = [
        'nome',
        'qtdEstoque',
        'dataHora',
        'precoUnitario',
    ];
}
