@extends('layout.header')
@section('title','Espaço do Coordenador')

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