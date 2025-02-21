@extends('layout.header')
@section('title','FAPEU | Painel Administrativo')

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
        <a class="btn bg-verde text-white botaoadmin" href='{{url('noticiaspost')}}'>Adicionar Notícia</a>
    </div>
    <div class="row d-flex justify-content-center mb-4">
        <a class="btn bg-verde text-white botaoadmin" href='{{url('editar')}}'>Editar Notícias</a>
    </div>
    <div class="row d-flex justify-content-center mb-4">
        <a class="btn bg-verde text-white botaoadmin" href='{{url('admin/adicionarselecaopublica')}}'>Adicionar Seleção Pública</a>
    </div>
    <div class="row d-flex justify-content-center mb-4">
        <a class="btn bg-verde text-white botaoadmin" href='{{url('createusuario')}}'>Adicionar Usuário</a>
    </div>

    
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <a href='{{route('admin.logoutadm')}}' class="btn bg-verde text-white botaoadmin">LOGOUT</a>
    </div>

    
@endsection