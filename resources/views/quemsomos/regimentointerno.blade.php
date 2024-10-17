@extends('layout.header')
@section('title','Regimento Interno')

@section('conteudo')
<p class="container mb-4 text-center"><button type="button" class="btn bg-verde btn-lg text-white"><i class="bi bi-download"></i> &nbsp; Baixar o documento</button></p>
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf">
    </object>
</div>

@endsection