<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cargo;

/**
 * Class Funcionario
 *
 * @property unsignedBigInteger $id
 * @property string $nome
 * @property string $cpf
 * @property Carbon $dataAdimissao
 * @property Carbon $dataDemissao
 * @property Carbon $dataNascimento
 * @property float $salario
 * @property unsignedBigInteger $cargo_id
 *
 */

class Funcionario extends Model
{
    use HasFactory;
    protected $table = 'funcionario';

    protected $fillable = [
        'nome',
        'cpf',
        'dataAdmissao',
        'dataDemissao',
        'dataNascimento',
        'salario',
        'cargo_id'
    ];

    public function cargo(){
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }
}
