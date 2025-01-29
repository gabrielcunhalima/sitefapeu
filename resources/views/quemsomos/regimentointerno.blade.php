@extends('layout.header')
@section('title','FAPEU | Regimento Interno')

@section('conteudo')
<p class="container mb-4 text-center"><button type="button" class="btn bg-verde btn-lg text-white"><i class="bi bi-download"></i> &nbsp; Baixar o documento</button></p>
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="{{url('pdfs/QuemSomos/regimento-interno.pdf')}}">
    </object>
</div>
@endsection