@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incerção de funcionario</h1>
    </div>

    <form method="POST" action="{{route('funcionario.store')}}">
        @csrf
        <div style="height: 80px;">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
        </div>
        <div style="height: 80px;">
            <label for="cpf">Cpf</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="ex:000.000.000-00">
        </div>
        <div style="height: 80px;">
            <label for="dataAdmissao">Data de admissão</label>
            <input type="date" class="form-control" id="dataAdmissao" name="dataAdmissao">
        </div>
        <div style="height: 80px;">
            <label for="dataNascimento">Data de nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
        </div>
        <div style="height: 80px;">
            <label for="salario">Salario</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="salario">
        </div>
        <div style="height: 80px;">
            <label for="cargo">Cargo</label>
            <select class="form-control" name="cargo_id" id="cargo" required>
                <option value=""></option>
                @foreach($cargos as $cargo)
                    <option value="{{ $cargo->id }}">{{ $cargo->nome }}</option>
                @endforeach
            </select>
        </div>
        <div style="height: 80px;">
            <a class="btn btn-secondary" href="javascript:window.history.back()">Voltar</a>
            <button type="submit" class="btn btn-primary">Adicionar funcionario</button>
        </div>
    </form>



    <!-- Content Row -->



    <!-- Content Row -->


</div>
<!-- /.container-fluid -->

@endsection
