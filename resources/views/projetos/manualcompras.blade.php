@extends('layout.header')
@section('title','FAPEU | Manual de Compras')

@section('conteudo')
<p class="container mb-4 text-center">
         <a href="{{ asset('pdfs/Projetos/Manual_de_Compras_e_Contratacoes.pdf')}}" download>
        <button type="button" class="btn text-white bg-verde btn-lg btn-success">
            <i class="bi bi-download"></i> &nbsp; Baixar o documento
        </button>
    </a>
</p>
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="{{url('pdfs/Projetos/Manual_de_Compras_e_Contratacoes.pdf')}}">
    </object>
</div>

@endsection