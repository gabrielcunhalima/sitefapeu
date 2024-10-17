@extends('layout.header')
@section('title','Manual de Compras')

@section('conteudo')
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="..\pdfs\Projetos\Manual_de_Compras_e_Contrata__es___VERS_O___________ (3).pdf">
    </object>
</div>
<h5 class="container mt-4 text-center"><button type="button" class="btn bg-verde btn-lg text-white"><i class="bi bi-download"></i> &nbsp; Baixar o documento</button></h5>
@endsection