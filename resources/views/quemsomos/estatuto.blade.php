@extends('layout.header')
@section('title','FAPEU | Estatuto')

@section('conteudo')

<p class="container mb-4 text-center">
         <a href="{{ asset('pdfs/QuemSomos/estatuto.pdf') }}" download>
        <button type="button" class="btn text-white bg-verde btn-lg btn-success">
            <i class="bi bi-download"></i> &nbsp; Baixar o documento
        </button>
    </a>
</p>
<div class="container">
    <div class="d-flex justify-content-center">
        <object class="pdf container shadow-lg" data="{{ url('pdfs/QuemSomos/estatuto.pdf') }}">
        </object>
    </div>
</div>

@endsection