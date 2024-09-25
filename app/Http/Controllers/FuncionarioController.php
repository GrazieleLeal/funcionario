<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Cargo;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Funcionario::all();//joga todos os funcionarios da tabela em data
        return view('frontend.funcionario.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cargos = Cargo::all();
        return view('frontend.funcionario.create', compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'dataAdmissao' => 'required',
            'dataNascimento' => 'required',
            'salario' => 'required',
            'cargo_id' => 'required',
        ]);

        //Produto::create($request->all());//pega todos os dados

        $funcionario = new Funcionario();
        $funcionario->nome = $request->input('nome');
        $funcionario->cpf = $request->input('cpf');
        $funcionario->dataAdmissao = $request->input('dataAdmissao');
        $funcionario->dataDemissao = $request->input('dataAdmissao');
        $funcionario->dataNascimento = $request->input('dataNascimento');
        $funcionario->salario = $request->input('salario');
        $funcionario->cargo_id = $request->input('cargo_id');
        $funcionario->save();

        return redirect()->route('funcionario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $funcionario = Funcionario::find($id);
        return view('frontend.funcionario.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funcionario = Funcionario::find($id);
        $cargos = Cargo::all();
        return view('frontend.funcionario.edit', compact('funcionario','cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     *
     *
     * Não está pronto
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'dataNascimento' => 'required',
            'salario' => 'required',
            'cargo_id' => 'required',
        ]);
        $funcionario = Funcionario::find($id);
        $funcionario->nome = $request->input('nome');
        $funcionario->cpf = $request->input('cpf');
        $funcionario->dataDemissao = $request->input('dataDemissao');
        $funcionario->dataNascimento = $request->input('dataNascimento');
        $funcionario->salario = $request->input('salario');
        $funcionario->cargo_id = $request->input('cargo_id');
        $funcionario->save();

        return redirect()->route('funcionario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->delete();
        return redirect()->route('funcionario.index');
    }

    /*
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
    */
}
