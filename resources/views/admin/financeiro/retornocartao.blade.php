@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD FINANCEIRO')

@section('conteudo')



<div class='center'>
<H5>PAINEL ADMINISTRATIVO - FINANCEIRO (CARTÃO CRÉDITO)</H5>
    <form action='{{route('cartao.carrega')}}' method="POST" enctype="multipart/form-data">
    <div class='row'>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class='input-field col offset-s4'>
            <span>Baixar cartões pagos até o dia:</span>
                <input id="dataCorte" type="date" class="center validate" name='dataCorte'>
        </div>
    </div>
        <center><button type="submit" class="btn btn-primary btn-block green">CARREGAR PAGAMENTOS</button></center>
    </form>
</div>
<div class="row" >
    <div class='col s12 center'style="margin-top:70px;">
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
</div>
@endsection