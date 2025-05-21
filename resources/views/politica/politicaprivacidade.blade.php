@extends('layout.header')
@section('title',' Política de Privacidade')

@section('conteudo')
<p class="container text-center mb-4">
    <a href="{{ asset('pdfs/Politicas/politica_de_privacidade_fapeu.pdf') }}" download class="fapeu-btn">
        <i class="bi bi-download me-2"></i>Baixar o documento
    </a>
</p>
<div class="container">
    <div class="d-flex justify-content-center">
        <object class="pdf container shadow-lg" data="{{ asset('pdfs/Politicas/politica_de_privacidade.pdf') }}">
        </object>
    </div>
</div>

@endsection