@extends('layout.header')
@section('title','Política de Privacidade')

@section('conteudo')
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="../pdfs/Politicas/politica_de_privacidade_fapeu.pdf">
    </object>
</div>
<h5 class="container mt-4 text-center"><button type="button" class="btn bg-verde btn-lg text-white">Clique aqui para baixar o documento</button></h5>
@endsection