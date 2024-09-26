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
            <input type="text" class="form-control" id="nome" name="nome" value="{{$cliente->nome}}" disabled>
        </div>
        <div style="height: 80px;">
            <label for="dataNascimento">Data de nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="{{ \Carbon\Carbon::parse($cliente->dataNascimento)->format('Y-m-d') }}" disabled>
        </div>
        <div style="height: 80px;">
            <label for="cargo">Funcionario</label>
            <input type="text" class="form-control" id="salario" name="salario" value="{{$cliente->funcionario->nome}}" disabled>
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
