@extends('layout.header')
@section('title','FAPEU | Canal de Denúncia')

@section('conteudo')
<div class="container">
    <div class="row">
        <br>
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-success bg-verde4 rounded mt-auto mx-sm-5 d-flex justify-content-center link-hover" href="http://150.162.78.4:8080/manager/login/coordenador/" target="_blank">
                <h3><img src="images/fapeu_ico.ico" alt="Icone da FAPEU" height="28">Canal de Denúncias&nbsp;&nbsp;<i class="bi bi-box-arrow-up-right"></i></h3>
            </a>
            <p class="mt-4 mx-5">Clique no botão para ser redirecionado ao Canal de Denúncias da FAPEU.</p>
        </div>
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-secondary rounded mt-auto mx-sm-5 d-flex justify-content-center link-hover"
                href="http://150.162.78.45:8080/DRHFlow/" target="_blank">
                <h3>Orientações&nbsp;&nbsp;<i class="bi bi-download"></i></h3>
            </a>
            <p class="mt-4 mx-5">Baixe o arquivo para ter as orientações de como utilizar o Canal de Denúncias</p>
        </div>
    </div>
</div>
@endsection