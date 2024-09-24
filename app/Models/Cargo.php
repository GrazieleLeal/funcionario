<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Http\Controllers\Funcionario;

/**
 * Class Cargo
 *
 * @property bigint $id
 * @property string $nome
 * @property string $descricao
 *
 */

class Cargo extends Model
{
    use HasFactory;
    protected $table = 'cargo';

    protected $fillable = [
        'nome',
        'descricao'
    ];
}
