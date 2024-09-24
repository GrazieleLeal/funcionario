<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function insereteste(){
        Cargo::create([
            'nome'  =>'Gerente',
            'descricao' => 'Gere o emprego'
        ]);
        return 'cargo inserido';
    }
}
