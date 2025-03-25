@extends('layout.header')
@section('title','FAPEU | Informe de Rendimentos')

@section('conteudo')

<div class="container mt-3">
    <h1 class="text-center mb-4 bg-success-subtle text-dark rounded-pill p-2">Informe de Rendimentos</h1>
    <h4 class="text-center mb-5">Clique abaixo para acessar sua área de Informe de Rendimentos de acordo com sua categoria.</h4>
    <div class="row align-items-center">
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-success rounded mt-auto mx-sm-5 bg-success d-flex justify-content-center link-hover" href="http://150.162.78.4:8080/manager_rendimento/relatoriorendimentos/" target="_blank">
                <h3 class="m-2"> Sem vinculo empregatício <br>e Pessoa Jurídica</h3>
            </a>
        </div>
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-success rounded mt-auto mx-sm-5 bg-success py-4 d-flex justify-content-center link-hover"
                href="http://drhflow.fapeu.com.br:8080/InformesUnimed/" target="_blank">
                <h3 class="m-2">CLT e Extrato Unimed</h3>
            </a>
        </div>
    </div>
</div>

@endsection