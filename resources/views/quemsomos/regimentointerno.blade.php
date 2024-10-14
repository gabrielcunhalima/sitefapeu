@extends('layout.header')
@section('title','Regimento Interno')

@section('conteudo')

<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf">
    </object>
</div>
<h5 class="container mt-4"><button type="button" class="btn bg-verde btn-lg text-white">Clique aqui para baixar o documento</button></h5>
@endsection