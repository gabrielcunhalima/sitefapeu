
@extends('layout.header')
@section('css','./css/app.css')
@section('title','[FAPEU] DASHBOARD')

@section('conteudo')
<div class="row">
    <div class="col s12 m12">
            <div class="card green darken-1">
                <div class="card-content white-text">
                    <span class="card-title center">Bem vindo, {{$dados->nome}}, </span>
                    <p class="center">Abaixo você terá acesso a ferramentas administrativas.</p>
                </div>
            </div>
    </div>


@if ($dados->perfil > 0) {{-- todos --}}
<div class='center'>
        @if (($dados->perfil == 5) || ($dados->perfil > 9))
        <div class='row'>
            <div class='col s12 m12'>
                    <a href='{{route('financeiro.index')}}' class="waves-effect waves-light btn green botaomedio">PAINEL FINANCEIRO</a>
            </div>    
        </div>
        @endif
        @if (($dados->perfil == 1) || ($dados->perfil > 9))
        <div class='row'>
            <div class='col s12 m12'>
                <a href='{{route('coord.painel')}}' class="waves-effect waves-light btn light-blue darken-3 botaomedio">PAINEL ADMINISTRATIVO - EVENTO</a>
            </div>   
        </div>
        @endif
        @if ($dados->perfil > 9)
        <div class='row'>
            <div class='col s12 m12'>
                <a href='{{route('admin.painel')}}' class="waves-effect waves-light btn orange botaomedio">PAINEL ADMINISTRATIVO - GERAL</a>
            </div>   
        </div>
        @endif
    </div>
@endif
</div>
<div class="row" style="margin-top:40px;">
    <div class='col s6' style="display: flex; justify-content: flex-end">
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
    <div class='col s6'>
        <a href='{{route('logout')}}' class="waves-effect red waves-light btn">LOGOUT</a>
    </div>
</div>
@endsection
