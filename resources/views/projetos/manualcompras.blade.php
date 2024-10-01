@extends('layout.header')
@section('inicio')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="  text-preto">Manual de Compras</h1>
    </div>
</div>

@endsection

@section('conteudo')
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="..\pdfs\Projetos\Manual_de_Compras_e_Contrata__es___VERS_O___________ (3).pdf">
    </object>
</div>
<h5 class="container mt-4"><button type="button" class="btn bg-verde btn-lg text-white">Clique aqui para baixar o documento</button></h5>
@endsection