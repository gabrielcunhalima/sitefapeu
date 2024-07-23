@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')

@if($mensagem = Session::get('ok'))
    <div class="card green darken-1">
    <div class="card-content white-text">
        <span class="card-title">Olá,</span>
        <p>{{$mensagem}}</p>
    </div>
    </div>
@endif
@php
    $datanasc = date('d/m/Y',strtotime($dadosinsc->datanascimento));
    $cpf = $dadosinsc->cpf[0] . $dadosinsc->cpf[1] .  $dadosinsc->cpf[2] . '.' .
            $dadosinsc->cpf[3] . $dadosinsc->cpf[4] .  $dadosinsc->cpf[5] . '.' .
            $dadosinsc->cpf[6] . $dadosinsc->cpf[7] .  $dadosinsc->cpf[8] . '-' .
            $dadosinsc->cpf[9] . $dadosinsc->cpf[10];
@endphp
<div class="row">
    <div class='center'>
        <span>Clique abaixo para emitir o boleto</span><br>
        <a class='btn waves-effect waves-light btnlarge'>[GRU]</a>    
    </div>
    <div class="row">
        <div class="col s12 offset-m2 m8">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Inscrição Nº {{$dadosinsc->id}}</span>
                    <p><li>Atividade:</li> {{$evento->Titulo}}</p>
                    <p><li>Nome Completo:</li>{{$dadosinsc->nomeCompleto}}</p>
                    <p><li>CPF:</li>{{$cpf}}</p>
                    <p><li>Data Nascimento:</li> {{$datanasc}}</p>
                    <p><li>Telefone:</li> {{$dadosinsc->telefone}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class='center'>
        <span>Clique abaixo para emitir o boleto</span><br>
        <a class='btn waves-effect waves-light btnlarge'>[GRU]</a>    
    </div>
</div>

@endsection