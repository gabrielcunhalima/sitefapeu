@extends('layout.header')
@section('title', ' Vagas Disponíveis')

@section('conteudo')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card mb-3 shadow" style="max-width: 940px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img
                        src="images/vagasdispo.jpg" alt="Vagas Disponíveis" class="img-fluid rounded-start" style="height: 260px; object-fit: cover;" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <br>
                        <h5 class="card-title" style="margin-left: 30px;">Vagas Disponíveis</h5>
                        <div style="width: 180px; height: 4px; background-color: #009270; margin-left: 30px; margin-bottom: 10px;"></div>
                        <p class="card-text" style="margin-left: 30px;">
                            <br>Aproveite as oportunidades acessando o link abaixo!
                        </p>
                        <p class="container text-center mt-4">
                            <a href="http://150.162.78.45:8080/Curriculo/" class="fapeu-btn">
                                <i class="bi bi-box-arrow-up-right me-2"></i>Acesse as vagas
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
</style>

@endsection