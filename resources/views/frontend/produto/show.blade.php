@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Funcioanrio</h1>
    </div>

    <form>
        <div style="height: 80px;">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}" disabled>
        </div>
        <div style="height: 80px;">
            <label for="qtdEstoqe">Quantidade em estoque</label>
            <input type="text" class="form-control" id="qtdEstoqe" name="qtdEstoqe" value="{{$produto->qtdEstoque}}" disabled>
        </div>
        <div style="height: 80px;">
            <label for="precoUnitario">Preço unitário</label>
            <input type="text" class="form-control" id="precoUnitario" name="precoUnitario" value="{{$produto->precoUnitario}}" disabled>
        </div>
        <div style="height: 80px;">
            <a class="btn btn-secondary" href="javascript:window.history.back()">Voltar</a>
        </div>
    </form>



    <!-- Content Row -->



    <!-- Content Row -->


</div>
<!-- /.container-fluid -->

@endsection
