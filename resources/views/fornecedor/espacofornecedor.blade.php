@extends('layout.header')
@section('title','Espaço do Fornecedor')

@section('conteudo')
<div class="container mt-5 position-relative">
    <div class="row">
        <div class="col-md-12">
            <!-- Imagem de fundo -->
            <div class="background-image" style="position:relative;">
                <img src="/mnt/data/fornecedor.png" class="img-fluid w-100" alt="Fornecedor" style="filter: brightness(50%);">
                
                <!-- Card com as informações sobreposto à imagem -->
                <div class="card position-absolute text-white" style="top: 20%; left: 50%; transform: translate(-50%, -20%); background: rgba(0,0,0,0.6); padding: 2rem; max-width: 500px;">
                    <h2 class="card-title font-weight-bold">Espaço do Fornecedor</h2>
                    <p class="card-text">Aqui você encontra o suporte necessário para o gerenciamento do seu relacionamento como fornecedor.</p>
                    <p class="card-text">Para mais informações, entre em contato pelo telefone: (48) 3331-7472.</p>
                    <button type="button" class="btn btn-primary btn-lg">Portal do Fornecedor</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
