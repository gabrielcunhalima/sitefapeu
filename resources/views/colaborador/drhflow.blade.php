@extends('layout.header')
@section('title','DRHFlow')
@section('conteudo')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card text-center shadow-lg border-0">
                    <div class="bg-verdeescuro text-white p-3 rounded-top d-flex justify-content-center" style="margin-top: -20px;">
                        <img src="/images/Drhflow (2) (1) (1).png" alt="Ícone de dinheiro" style=" height: 50px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">DRHFlow</h5>
                        <p class="card-text">Acesse a área administrativa de Recursos Humanos clicando abaixo!</p>
                        <a href="http://150.162.78.45:8080/DRHFlow/" target="_blank" class="btn btn-success btn-lg rounded-pill">Visitar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-image: url('/images/bg (5).png');
        
            background-position: center;
            background-attachment: fixed; /* The background stays fixed while scrolling */
        }

        .card:hover {
            transform: scale(1.05); /* Aumenta ligeiramente o tamanho */
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); /* Aumenta a sombra no hover */
        }
        
    </style>

@endsection
