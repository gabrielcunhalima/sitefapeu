@extends('layout.header')
@section('title', 'Espaço do Fornecedor')

@section('conteudo')

<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 940px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img
                        src="/images/fornecer.jpg"
                        alt="Espaço do Fornecedor"
                        class="img-fluid rounded-start"
                        style="height: 260px; object-fit: cover;"
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Espaço do Fornecedor</h5>
                        <p class="card-text">
                            O Setor Administrativo é responsável pelo cadastramento das empresas. 
                            <br>Qualquer dúvida, entre em contato pelo telefone: (48) 3331-7472.
                        </p>
                        <a href="http://150.162.78.45:8080/Curriculo/" target="_blank" class="btn btn-success">
                            Acesse o Portal do Fornecedor <i class="fa fa-arrow-right" style="margin-left: 10px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
