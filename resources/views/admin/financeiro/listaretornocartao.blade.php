
@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD FINANCEIRO')

@section('conteudo')



<center>
<H5>PAINEL ADMINISTRATIVO - FINANCEIRO (CARTÃO CRÉDITO)</H5>
<div class='row'>
    <form action='{{route('cartao.carrega')}}' method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class='input-field col offset-s4'>
            <span>Baixar cartões pagos até o dia:</label>
                <input id="dataCorte" type="date" class="center validate" name='dataCorte'>
        </div>
    </div>
        <button type="submit" class="btn btn-primary btn-block green">CARREGAR PAGAMENTOS</button>
    </form>
@if ($quantidade > 0)
<h3>Total de {{$quantidade}} registros até o dia {{$dataCorteParse}}</h3>
@else
<h3>TODOS OS RETORNOS ATÉ O DIA {{$dataCorteParse}} JÁ FORAM EXPORTADOS.</h3>
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
            <th>Parcelas</th>
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
                <td>{{$item['qtdParcelas']}}</td>
            </tr>  
        @endforeach
    @else
        <tr>NÃO HÁ REGISTROS DE CARTÃO AINDA NÃO BAIXADOS ATÉ A DATA SELECIONADA</tr>
    @endif
    </tbody>
</table>
<BR><BR>
    @if ($quantidade > 0) 
        <form action='{{route('cartao.retorno')}}' method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input id="dataCorte" type="hidden" class="center validate" name='dataCorte' value={{$dataCorte}}>
            <button type="submit" class="btn btn-primary btn-block">EXPORTAR PLANILHA</button>
        </form>

    @endif
    </div>


@endsection