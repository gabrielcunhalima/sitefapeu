@extends('layout.header')
@section('title','FAPEU Novo')
@section('inicio')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-white">Regimento Interno</h1>
    </div>
</div>

@endsection
@section('conteudo')

<h5 class="container"><a href="">Clique aqui para baixar o documento.</a></h5>
<div class="d-flex justify-content-center">
    <object class="pdf container shadow-lg" data="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf">
    </object>
</div>


@endsection