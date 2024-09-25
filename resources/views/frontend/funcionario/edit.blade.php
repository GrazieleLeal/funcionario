@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Atualizar funcionario</h1>
    </div>

    <form method="POST" action="{{route('funcionario.update',$funcionario->id)}}">
        @csrf
        @method('PUT')
        <div style="height: 80px;">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$funcionario->nome}}">
        </div>
        <div style="height: 80px;">
            <label for="cpf">Cpf</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{$funcionario->cpf}}">
        </div>
        <div style="height: 80px;">
            <label for="dataDemissao">Data de demissão</label>
            <input type="date" class="form-control" id="dataDemissao" name="dataDemissao" value="{{ \Carbon\Carbon::parse($funcionario->dataDemissao)->format('Y-m-d') }}">
        </div>
        <div style="height: 80px;">
            <label for="dataNascimento">Data de nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="{{ \Carbon\Carbon::parse($funcionario->dataNascimento)->format('Y-m-d') }}">
        </div>
        <div style="height: 80px;">
            <label for="salario">Salario</label>
            <input type="text" class="form-control" id="salario" name="salario" value="{{$funcionario->salario}}">
        </div>
        <div style="height: 80px;">
            <label for="cargo">Cargo</label>
            <select class="form-control" name="cargo_id" id="cargo" required>
                @foreach($cargos as $cargo)
                    <option value="{{ $cargo->id }}" {{ $funcionario->cargo_id == $cargo->id ? 'selected' : '' }}>{{ $cargo->nome }}</option>
                @endforeach
            </select>
        </div>
        <div style="height: 80px;">
            <a class="btn btn-secondary" href="javascript:window.history.back()">Voltar</a>
            <button type="submit" class="btn btn-primary">Editar funcionario</button>
        </div>
    </form>



    <!-- Content Row -->



    <!-- Content Row -->


</div>
<!-- /.container-fluid -->

@endsection
