@extends('layouts.admin')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Atualizar cliente</h1>
    </div>

    <form method="POST" action="{{route('cliente.update',$cliente->id)}}">
        @csrf
        @method('PUT')
        <div style="height: 80px;">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$cliente->nome}}">
        </div>
        <div style="height: 80px;">
            <label for="dataNascimento">Data de nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="{{ \Carbon\Carbon::parse($cliente->dataNascimento)->format('Y-m-d') }}">
        </div>
        <div style="height: 80px;">
            <label for="funcionario">Funcionario</label>
            <select class="form-control" name="funcionario_id" id="funcionario" required>
                @foreach($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}" {{ $cliente->funcionario_id == $funcionario->id ? 'selected' : '' }}>{{ $funcionario->nome }}</option>
                @endforeach
            </select>
        </div>
        <div style="height: 80px;">
            <a class="btn btn-secondary" href="javascript:window.history.back()">Voltar</a>
            <button type="submit" class="btn btn-primary">Editar cliente</button>
        </div>
    </form>



    <!-- Content Row -->



    <!-- Content Row -->


</div>
<!-- /.container-fluid -->

@endsection
