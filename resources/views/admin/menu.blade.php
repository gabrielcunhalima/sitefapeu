@extends('layout.header')
@section('title',' Painel Administrativo')

@section('conteudo')

<style>
    .botaoadmin {
        min-width: 20vw;
        border-radius: 20px;
    }
</style>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="col-12">
                <div class="text-center mt-4">
                    <a href='{{url('noticiaspost')}}' class="btn botaoadmin fapeu-btn btn-lg px-4 py-2">
                        <i class="bi bi-newspaper"></i> &nbsp;&nbsp; Adicionar Notícia
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center mt-4">
                    <a href='{{url('editar')}}' class="btn botaoadmin fapeu-btn btn-lg px-4 py-2">
                        <i class="bi bi-brush"></i> &nbsp;&nbsp; Editar Notícia
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="col-12">
                <div class="text-center mt-4">
                    <a href='{{route('licitacoes.form')}}' class="btn botaoadmin fapeu-btn btn-lg px-4 py-2">
                        <i class="bi bi-bag-plus"></i> &nbsp;&nbsp; Adicionar Licitação
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center mt-4">
                    <a href='{{route('licitacoes.listar')}}' class="btn botaoadmin fapeu-btn btn-lg px-4 py-2">
                        <i class="bi bi-brush"></i> &nbsp;&nbsp; Gerenciar Licitações
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="col-12">
                <div class="text-center mt-4">
                    <a href='{{url('createusuario')}}' class="btn botaoadmin fapeu-btn btn-lg px-4 py-2">
                        <i class="bi bi-person-plus-fill"></i> &nbsp;&nbsp; Adicionar Usuário
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center mt-4">
    <a href='{{route('admin.logoutadm')}}' class="botaoadmin btn btn-danger mt-5 btn-lg px-4 py-2">
        Logout
    </a>
</div>
@endsection