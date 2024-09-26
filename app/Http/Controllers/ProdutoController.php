<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data = Produto::all();//joga todos os clientes da tabela em data
        return view('frontend.produto.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('frontend.produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'qtdEstoque' => 'required',
            'precoUnitario' => 'required',
        ]);

        Produto::create($request->all());//pega todos os dados

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('frontend.produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('frontend.produto.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required',
            'qtdEstoque' => 'required',
            'precoUnitario' => 'required',
        ]);

        $produto->nome = $request->input('nome');
        $produto->qtdEstoque = $request->input('qtdEstoque');
        $produto->precoUnitario = $request->input('precoUnitario');
        $produto->save();

        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produto.index');
    }
}
