@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Produtos</h1>
    </div>
    <div style="height: 80px;">
        <a class="btn btn-primary" href="{{route('produto.create')}}">Adicionar produto</a>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade em estoque</th>
                <th>Preço Unitário</th>
                <th><!-- Botões com utilidades --></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td>{{ $value->nome }}</td>
                    <td>{{ $value->qtdEstoque }}</td>
                    <td>{{ $value->precoUnitario }}</td>
                    <td>
                        <form action="{{ route('produto.destroy',$value->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('produto.show',$value->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('produto.edit',$value->id) }}">Edit</a>
                            @csrf<!--token que so aceita coisas que vem dele proprio-->
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



</div>
<!-- /.container-fluid -->

@endsection
