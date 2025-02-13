@extends('layout.header')
@section('title','FAPEU | Política de Cookies')

@section('conteudo')
<p class="container mb-4 text-center">
         <a href="{{ asset('pdfs/Politicas/politica_de_cookies_fapeu.pdf') }}" download>
        <button type="button" class="btn text-white bg-verde btn-lg btn-success">
            <i class="bi bi-download"></i> &nbsp; Baixar o documento
        </button>
    </a>
</p>
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="{{ asset('pdfs/Politicas/politica_de_cookies_fapeu.pdf') }}">
    </object>
</div>

@endsection