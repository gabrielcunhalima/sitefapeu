@extends('layout.header')
@section('title',' Estatuto')

@section('conteudo')
<p class="container text-center mb-4">
    <a href="{{ asset('pdfs/QuemSomos/estatuto.pdf') }}" download class="fapeu-btn">
        <i class="bi bi-download me-2"></i>Baixar o documento
    </a>
</p>
<div class="container">
    <div class="d-flex justify-content-center">
        <object class="pdf container shadow-lg" data="{{ url('pdfs/QuemSomos/estatuto.pdf') }}">
        </object>
    </div>
</div>

@endsection