@extends('layout.header')
@section('title',' Manual de Compras')

@section('conteudo')
<p class="container text-center mb-4">
    <a href="{{ asset('pdfs/QuemSomos/estatuto.pdf') }}" download class="fapeu-btn">
        <i class="bi bi-download me-2"></i>Baixar o documento
    </a>
</p>
</p>
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="{{url('pdfs/Projetos/Manual_de_Compras_e_Contratacoes.pdf')}}">
    </object>
</div>

@endsection