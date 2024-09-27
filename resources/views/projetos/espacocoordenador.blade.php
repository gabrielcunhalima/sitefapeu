@extends('layout.header')
@section('inicio')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-preto">Espaço do Coordenador</h1>
    </div>
</div>

@endsection

@section('conteudo')
    <h2 class="titulo">Espaço do Coordenador</h2>
    <div class="row">
        <br>
        <div class="col-6">
            <button type="button" class="btn btn-secondary btn-lg">Coordenador(clique aqui)</button>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-secondary btn-lg">Funcionário(clique aqui)</button>
        </div>
    </div>
@endsection