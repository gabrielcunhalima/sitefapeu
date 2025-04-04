@extends('layout.header')
@section('title','FAPEU | Espaço do Coordenador')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-success rounded mt-auto mx-sm-5 bg-success d-flex justify-content-center link-hover" href="http://150.162.78.4:8080/manager/login/coordenador/" target="_blank">
                <h3 class="m-2">Portal do Coordenador</h3>
            </a>
            <p class="mt-4 mx-5">Aqui os coordenadores de projetos da FAPEU podem fazer <br>pedidos e consultar relatórios financeiros.</p>
        </div>
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-success rounded mt-auto mx-sm-5 bg-success d-flex justify-content-center link-hover"
                href="http://150.162.78.45:8080/DRHFlow/" target="_blank">
                <h3 class="m-2">Sistema DRHFlow</h3>
            </a>
            <p class="mt-4 mx-5">Aqui os coordenadores de projetos da FAPEU podem administrar pessoal.</p>
        </div>
    </div>
</div>
@endsection