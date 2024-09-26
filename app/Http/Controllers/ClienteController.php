<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class ClienteController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data = Cliente::all();//joga todos os clientes da tabela em data
        return view('frontend.cliente.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $funcionarios = Funcionario::all();
        return view('frontend.cliente.create', compact('funcionarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'dataNascimento' => 'required',
            'funcionario_id' => 'required',
        ]);

        //Produto::create($request->all());//pega todos os dados

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->dataNascimento = $request->input('dataNascimento');
        $cliente->funcionario_id = $request->input('funcionario_id');
        $cliente->save();

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente){
        return view('frontend.cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente){
        $funcionarios = Funcionario::all();
        return view('frontend.cliente.edit', compact('cliente','funcionarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente){
        $request->validate([
            'nome' => 'required',
            'dataNascimento' => 'required',
            'funcionario_id' => 'required',
        ]);
        $cliente->nome = $request->input('nome');
        $cliente->dataNascimento = $request->input('dataNascimento');
        $cliente->funcionario_id = $request->input('funcionario_id');
        $cliente->save();

        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
