<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionario;

/**
 * Class Funcionario
 *
 * @property unsignedBigInteger $id
 * @property string $nome
 * @property Carbon $dataNascimento
 * @property unsignedBigInteger $funcionario_id
 *
 */

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';

    protected $fillable = [
        'nome',
        'dataNascimento',
        'funcionario_id'
    ];

    public function funcionario(){
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }
}
