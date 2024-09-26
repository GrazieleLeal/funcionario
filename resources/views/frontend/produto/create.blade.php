@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incerção de Produto</h1>
    </div>

    <form method="POST" action="{{route('produto.store')}}">
        @csrf
        <div style="height: 80px;">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="ex.: Pão de forma">
        </div>
        <div style="height: 80px;">
            <label for="qtdEstoque">Quantidade em estoque</label>
            <input type="text" class="form-control" id="qtdEstoque" name="qtdEstoque" placeholder="ex.: 5">
        </div>
        <div style="height: 80px;">
            <label for="precoUnitario">Preço unitário</label>
            <input type="text" class="form-control" id="precoUnitario" name="precoUnitario" placeholder="ex.: 15.00">
        </div>
        <div style="height: 80px;">
            <a class="btn btn-secondary" href="javascript:window.history.back()">Voltar</a>
            <button type="submit" class="btn btn-primary">Adicionar produto</button>
        </div>
    </form>



    <!-- Content Row -->



    <!-- Content Row -->


</div>
<!-- /.container-fluid -->

@endsection
