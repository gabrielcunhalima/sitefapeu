@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD FINANCEIRO')

@section('conteudo')



<center>
<H5>PAINEL ADMINISTRATIVO - FINANCEIRO</H5>
<div class='row'>
    <form action='{{route('boleto.carrega')}}' method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class='custom-file'>
            <input type="file" class="custom-file-input" name="file_retorno" id="input_file_retorno">
            <label class="custom-file-label" for="input_file_retorno">Escolha o arquivo</label>
        </div>
        <BR>
        <button type="submit" class="btn btn-primary btn-block green">CARREGAR RETORNO</button>
    </form>
</div>
<div class="row" >
    <div class='col s12 center'style="margin-top:70px;">
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
</div>

@endsection