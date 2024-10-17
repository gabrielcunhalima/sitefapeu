@extends('layout.header')
@section('title','Política de Cookies')

@section('conteudo')
<h5 class="container mb-4 d-flex justify-content-center"><button type="button" class="btn bg-verde btn-lg text-white"><i class="bi bi-download"></i> &nbsp; Baixar o documento</button></h5>
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="../pdfs/Politicas/politica_de_cookies_fapeu.pdf">
    </object>
</div>

@endsection