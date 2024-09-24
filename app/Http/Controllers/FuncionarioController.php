<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function inseretete(){
        Funcionario::create([
            'nome'  =>'Carolina',
            'cpf'   =>'000.000.000-00',
            'dataAdmissao' => '2024-01-01',
            'dataDemissao' => '2024-08-01',
            'dataNascimento' => '1991-12-24',
            'salario' => 30000,
            'cargo_id' => 1
        ]);
        return 'funcionario inserido';
    }
}
