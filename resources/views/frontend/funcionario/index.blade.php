@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Funcionarios</h1>
    </div>
    <div style="height: 80px;">
        <a class="btn btn-primary" href="{{route('funcionario.create')}}">Adicionar funcionario</a>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de admissão</th>
                <th>Data de demissão</th>
                <th>Data de Nascimento</th>
                <th>Salario</th>
                <th>Cargo</th>
                <th><!-- Botões com utilidades --></th>
            </tr>
        </thead>
        <!--
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de admissão</th>
                <th>Data de demissão</th>
                <th>Data de Nascimento</th>
                <th>Salario</th>
                <th>Cargo</th>
                <th><!- Botões com utilidades </th>
            </tr>
        </tfoot>
        -->
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td>{{ $value->nome }}</td>
                    <td>{{ $value->cpf }}</td>
                    <td>{{ \Carbon\Carbon::parse($value->dataAdmissao)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($value->dataDemissao)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($value->dataNascimento)->format('d/m/Y') }}</td>
                    <td>{{ $value->salario }}</td>
                    <td>{{ $value->cargo->nome }}</td>
                    <td>
                        <form action="{{ route('funcionario.destroy',$value->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('funcionario.show',$value->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('funcionario.edit',$value->id) }}">Edit</a>
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
