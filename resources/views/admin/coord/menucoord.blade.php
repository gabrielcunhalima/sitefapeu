
@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')

@section('conteudo')
@if (($dados->perfil == 1) OR ($dados->perfil > 9))
<div class='row center'>
    <H5>PAINEL ADMINISTRATIVO - COORDENADOR</H5>
    <div class="row center">
        <a href='{{route('eventos.novo')}}' class="waves-effect waves-light btn botaopequeno light-blue darken-2">Novos Eventos</a>
    </div>
    <div class="row center">
        <a href='{{route('coord.eventos')}}' class="waves-effect waves-light btn botaopequeno light-blue darken-3">Meus Eventos</a>
    </div>
    <div class="col s12 m12">
        <a href='' class="waves-effect waves-light btn light-blue darken-4">[...]</a>
    </div>
</div>
@endif
<br><br><br>
<div class="row" style="margin-top:70px;">
    <div class='col s6 voltar'>
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
    <div class='col s6'>
        <a href='{{route('logout')}}' class="waves-effect red waves-light btn">LOGOUT</a>
    </div>
</div>
@endsection