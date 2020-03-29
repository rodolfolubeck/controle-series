@extends('series.layout')
@section('cabecalho')
    Adicionar Série
@endsection
@section('conteudo')

    <form class="form-group" method="post">
        @csrf
        <label for="nome">Nome da série</label>
        <input name="nome" type="text" class="form-control" id="nome">
    <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
