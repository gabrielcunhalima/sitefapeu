@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD FINANCEIRO')

@section('conteudo')



<center>
<H5>PAINEL ADMINISTRATIVO - FINANCEIRO (PIX)</H5>
<div class='row'>
    <form action='{{route('pix.carrega')}}' method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class='input-field col offset-s4'>
            <span>Baixar PIX pagos até o dia:</span>
                <input id="dataCorte" type="date" class="center validate" name='dataCorte'>
        </div>
    </div>
        <button type="submit" class="btn btn-primary btn-block green">CARREGAR PAGAMENTOS</button>
    </form>
</div>
<div class="row" >
    <div class='col s12 center'style="margin-top:70px;">
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
</div>

@endsection