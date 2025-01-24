@extends('layout.header')
@section('title', 'FAPEU - Vagas Disponíveis')

@section('conteudo')

<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <div class="card mb-3 shadow" style="max-width: 940px; transition: all 0.3s ease;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img
                        src="images/vagasdispo.jpg"
                        alt="Vagas Disponíveis"
                        class="img-fluid rounded-start"
                        style="height: 260px; object-fit: cover;"
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <br> 
                        <h5 class="card-title" style="margin-left: 30px;">Vagas Disponíveis</h5>

                        <!-- Barra decorativa abaixo do título -->
                        <div style="width: 180px; height: 4px; background-color: #009270; margin-left: 30px; margin-bottom: 10px;"></div>

                        <p class="card-text" style="margin-left: 30px;">
                            <br>Aproveite as oportunidades acessando o link abaixo!
                        </p>

                        <div class="d-flex justify-content-center">
              
                            <a href="http://150.162.78.45:8080/Curriculo/" target="_blank" class="btn btn-success mt-5" 
                               style="border-radius: 50px; padding: 10px 30px; font-size: 16px;">
                                Acesse as vagas <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .card:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }
</style>

@endsection
