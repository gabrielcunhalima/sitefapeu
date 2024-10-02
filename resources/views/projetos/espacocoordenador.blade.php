@extends('layout.header')
@section('inicio')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="font-weight-bold text-preto">Espaço do Coordenador</h1>
    </div>
</div>

@endsection

@section('conteudo')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-6">
                <button type="button" class="btn bg-verde btn-lg text-white">Portal do Coordenador</button>
                <p class="mt-4">Aqui os coordenadores de projetos da FAPEU podem fazer <br>pedidos e consultar relatórios financeiros.</p>
            </div>
            <div class="col-6">
                <button type="button" class="btn bg-verde text-white btn-lg">Funcionário (DRHFlow)</button>
                <p class="mt-4">Aqui os coordenadores de projetos da FAPEU podem administrar pessoal.</p>
            </div>
        </div>
    </div>
@endsection