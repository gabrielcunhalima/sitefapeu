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
    // $cpf = $dadosinsc->cpf[0] . $dadosinsc->cpf[1] .  $dadosinsc->cpf[2] . '.' .
    //         $dadosinsc->cpf[3] . $dadosinsc->cpf[4] .  $dadosinsc->cpf[5] . '.' .
    //         $dadosinsc->cpf[6] . $dadosinsc->cpf[7] .  $dadosinsc->cpf[8] . '-' .
    //         $dadosinsc->cpf[9] . $dadosinsc->cpf[10];
@endphp
<div class="row">
    <div class="row">
        <div class="col s12 offset-m2 m8">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Inscrição Nº {{$dadosinsc->id}}</span>
                    <p><li><strong>Evento: </strong>{{$evento->Titulo}}</li> </p>
                    <p><li><strong>CPF: </strong>{{$dadosinsc->cpf}}</li></p>
                    <p><li><strong>Nome Completo: </strong>{{$dadosinsc->nomeCompleto}}</li></p>
                    <p><li><strong>Data Nascimento: </strong>{{$datanasc}}</li></p>
                    <p><li><strong>Telefone: </strong>{{$dadosinsc->telefone}}</li></p>
                </div>
            </div>
        </div>
    </div>
    <div class='center'>
        <span>Clique abaixo para emitir o boleto</span>
        <form method="post" action="https://shopline.itau.com.br/shopline/shopline.asp" onsubmit="carregabrw();" target="SHOPLINE">
            <input type="hidden" name="DC" value="<?php echo $dados; ?>">
            <button type='submit' class='' name='shopline'><img src="{{url('assets/itau.png')}}" height="100px"></button>
        </form>

        <script language='Javascript'>
            function carregabrw() {
            window.open('','SHOPLINE',"toolbar=yes,menubar=yes,resizable=yes,status=no,scrollbar=yes,width=780,height=485");
            }
        </script>
    </div>
    <div class="row center" style="margin-top:50px;">
      <a class="btn waves-effect waves-light btnlarge" href='{{url('eventos/public/eventos/lista')}}'>Voltar ao menu principal</a> 
    </div>
</div>

@endsection