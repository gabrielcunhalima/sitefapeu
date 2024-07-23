
@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD FINANCEIRO')

@section('conteudo')
@if (($dados->perfil == 5) OR ($dados->perfil > 9))
<div class='row'>
    <H5><center>PAINEL ADMINISTRATIVO - FINANCEIRO</center></H5><br>
    <div class='col s12 m6 voltar'>
        <a href='{{route('pix.baixa')}}' class="waves-effect waves-light btn green botaomedio">Baixar Retorno PIX</a>
    </div>
    <div class='col s12 m6'>
        <a href='' class="waves-effect waves-light btn green botaomedio">Relatório de Pagamentos</a>
    </div>
</div>
<div class='row'>
    <div class='col s12 m6 voltar'>
        <a href='{{route('boleto.upload')}}' class="waves-effect  waves-light btn green darken-1 botaomedio">Baixar Retorno Boleto</a>
    </div>
    <div class='col s12 m6'>
        <a href='' class="waves-effect waves-light btn green darken-1 botaomedio">[...]</a>
    </div>
</div>
<div class='row'>
    <div class='col s12 m6 voltar'>
        <a href='{{route('cartao.baixa')}}' class="waves-effect waves-light btn green darken-2 botaomedio">Baixar Retorno CARTÃO</a>
    </div>
    <div class='col s12 m6'>
        <a href='' class="waves-effect waves-light btn green darken-2 botaomedio">[...]</a>
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
@endsection