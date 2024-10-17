@extends('layout.header')
@section('title','Espaço do Coordenador')

@section('conteudo')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-sm-12">
                <a class="btn btn-success rounded py-2 px-4 mt-auto mx-sm-5 bg-verde d-flex justify-content-center" href="http://150.162.78.4:8080/manager/login/coordenador/" target="_blank"><h3>Portal do Coordenador</h3></a>
                <p class="mt-4 mx-5">Aqui os coordenadores de projetos da FAPEU podem fazer <br>pedidos e consultar relatórios financeiros.</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <a class="btn btn-success rounded py-2 px-4 mt-auto mx-sm-5 bg-verde d-flex justify-content-center" href="http://150.162.78.45:8080/DRHFlow/" target="_blank"><h3>DRHFlow (Funcionários)</h3></a>
                <p class="mt-4 mx-5">Aqui os coordenadores de projetos da FAPEU podem administrar pessoal.</p>
            </div>
        </div>
    </div>
@endsection