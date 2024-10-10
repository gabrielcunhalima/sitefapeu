@extends('layout.headeradmin')
@section('title','Painel Administrativo')

@section('conteudo')

<div class="rounded">
    <div class="jumbotron text-center text-white bg-verdeescuro">
        <h2>Painel Administrativo</h2>
    </div>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

    <div class="row d-flex justify-content-center mb-4">
        <a class="btn bg-verde text-white botaoadmin" href='{{url('admin/adicionarnoticia')}}'>Adicionar Notícia</a>
    </div>
    <div class="row d-flex justify-content-center">
        <a class="btn bg-verde text-white botaoadmin" href='{{url('admin/adicionarselecaopublica')}}'>Adicionar Seleção Pública</a>
    </div>


    
@endsection