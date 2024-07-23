
@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')

@section('conteudo')
@if(Session::has('usuariook'))
<div class="row">
    <div class="col s12 m12">
            <div class="card green darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Usuário criado com sucesso</span>
                    {{-- <p>Os dados preenchidos não constam em nossa base de dados, verifique se digitou corretamente.</p> --}}
                </div>
            </div>
    </div>
</div>
@endif  


@if ($dados->perfil > 9)
<div class='row'>
    <div class="center"><H5>PAINEL ADMINISTRATIVO - ADMINISTRADOR</H5></div>
        <div class="row">
            <div class="col s12 m6 voltar">
                <a href='{{route('eventos.novo')}}' class="waves-effect waves-light btn botaomedio orange">Novos Eventos</a>
            </div>
            <div class="col s12 m6">
                <a href='{{route('admin.eventos.lista')}}' class="waves-effect waves-light btn botaomedio orange">Lista de Eventos</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 voltar">
                <a href='{{route('admin.lista.pendente')}}' class="waves-effect waves-light btn orange botaomedio darken-2">Lista Eventos NÃO APROVADOS</a>
            </div>
            <div class="col s12 m6">
                <a href='{{route('usuario.novo')}}' class="waves-effect waves-light btn botaomedio orange darken-2">Cadastrar Usuário</a>
            </div>
        </div>
</div>
@endif
<div class="row" style="margin-top:70px;">
    <div class='col s6' style="display: flex; justify-content: flex-end">
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
    <div class='col s6'>
        <a href='{{route('logout')}}' class="waves-effect red waves-light btn">LOGOUT</a>
    </div>
</div>
</div>
@endsection