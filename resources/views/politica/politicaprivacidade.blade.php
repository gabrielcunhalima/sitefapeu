@extends('layout.header')
@section('title','Política de Privacidade')

@section('conteudo')
<a href="../pdfs/Politicas/politica_de_privacidade_fapeu.pdf" download>
    <h5 class="container mb-4 text-center"><button type="button" class="btn bg-verde btn-lg text-white"><i class="bi bi-download"></i> &nbsp; Baixar o documento</button></h5>
</a>
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="../pdfs/Politicas/politica_de_privacidade_fapeu.pdf">
    </object>
</div>

@endsection