@extends('series.layout')
@section('cabecalho')
    Adicionar Série
@endsection
@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form class="form-group" method="post">
        @csrf
        <label for="nome">Nome da série</label>
        <input name="nome" type="text" class="form-control" id="nome">
    <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
