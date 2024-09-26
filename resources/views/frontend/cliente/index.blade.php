@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
    </div>
    <div style="height: 80px;">
        <a class="btn btn-primary" href="{{route('cliente.create')}}">Adicionar cliente</a>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Funcionario que adicionou</th>
                <th><!-- Botões com utilidades --></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td>{{ $value->nome }}</td>
                    <td>{{ \Carbon\Carbon::parse($value->dataNascimento)->format('d/m/Y') }}</td>
                    <td>{{ $value->funcionario->nome }}</td>
                    <td>
                        <form action="{{ route('cliente.destroy',$value->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('cliente.show',$value->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('cliente.edit',$value->id) }}">Edit</a>
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
