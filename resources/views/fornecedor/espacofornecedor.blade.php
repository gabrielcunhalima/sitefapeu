@extends('layout.header')
@section('title', ' Espaço do Fornecedor')

@section('conteudo')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card mb-3 shadow">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/fornecer.jpg" alt="Espaço do Fornecedor" class="img-fluid rounded-start" style="height: 270px; object-fit: cover;" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <br>
                        <h5 class="card-title" style="margin-left: 25px;">Espaço do Fornecedor</h5>

                        <div style="width: 230px; height: 4px; background-color: #009270; margin-left: 30px; margin-bottom: 10px;"></div>

                        <p class="card-text" style="margin-left: 25px;">
                            <br> O Setor Administrativo é responsável pelo cadastramento das empresas.
                            <br>Qualquer dúvida, entre em contato pelo telefone: (48) 3331-7472.
                        </p>

                        <p class="container text-center mt-4 mb-3">
                            <a href="http://150.162.78.4/#/login/fornecedor" download class="fapeu-btn">
                                Acesse o Portal do Fornecedor <i class="bi bi-arrow-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection