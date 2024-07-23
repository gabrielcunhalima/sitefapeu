
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
        <button type="submit" class="btn btn-primary green btn-block">CARREGAR RETORNO</button>
    </form>
</div>
@if ($quantidade > 0)
<h3>Total de {{$quantidade}} registros</h3>
@else
<h3>Sem registros de boletos de eventos no arquivo selecionado.</h3>
@endif
<center>
<table>
    <thead>
        <tr>    
            <th>Projeto</th>
            <th>Conta</th>
            <th>CPF</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Rubrica</th>
            <th>Complemento</th>
            <th>Data</th>
            <th>Operacao</th>
        </tr>
    </thead>
    <tbody>
    @if (isset($dados)) 
        @foreach ($dados as $item)
            <tr>
                <td>{{$item['NumProjeto']}}</td>
                <td>{{$item['numconta']}}</td>
                <td>{{$item['CPFCNPJ']}}</td>
                <td>{{$item['Nome']}}</td>
                <td>{{$item['Valor']}}</td>
                <td>{{$item['Rubrica']}}</td>
                <td>{{$item['Complemento']}}</td>
                <td>{{$item['Data']}}</td>
                <td>{{$item['Operacao']}}</td>
            </tr>  
        @endforeach
    @else
        <tr>NÃO HÁ REGISTROS DE BOLETOS DE EVENTO NO RETORNO</tr>
    @endif
    </tbody>
</table>
<BR><BR>
    @if (isset($path) AND ($quantidade > 0)) 
        <form action='{{route('boleto.retorno')}}' method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input name='fileexport' id='fileexport' type="hidden" value='{{$path}}'>
            <button type="submit" class="btn btn-primary btn-block">EXPORTAR PLANILHA</button>
        </form>

    @endif
<div class="row" >
    <div class='col s12 center'style="margin-top:70px;">
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
</div>


@endsection