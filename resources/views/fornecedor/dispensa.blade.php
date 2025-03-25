@extends('layout.header')
@section('title', 'Dispensa de Licitação')
@section('conteudo')

<div class="container mt-5">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Ordem</th>
                <th scope="col">Processo</th>
                <th scope="col">Órgão</th>
                <th scope="col">Projeto</th>
                <th scope="col">Data de<br>Abertura</th>
                <th scope="col">Objeto</th>
                <th scope="col">Data de<br>Publicação</th>
                <th scope="col">Seleção Publica</th>
                <th scope="col">Ata Abertura</th>
                <th scope="col">Contrato/<br>Convênio</th>
                <th scope="col">Resultado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $licitacao)
                @if($licitacao->tipo_licitacao == 2)
                <tr>
                    <td>{{ $licitacao->ordem }}</td>
                    <td>{{ $licitacao->processo }}</td>
                    <td>{{ $licitacao->orgao }}</td>
                    <td>{{ $licitacao->projeto }}</td>
                    <td>{{ \Carbon\Carbon::parse($licitacao->dataabertura)->format('d/m/Y') }}</td>
                    <td>{{ $licitacao->objeto }}</td>
                    <td>{{ \Carbon\Carbon::parse($licitacao->datapublicacao)->format('d/m/Y') }}</td>
                    <td class="text-center">
                        <a href="{{ asset($licitacao->licitacao) }}" class="btn btn-primary btn-sm" target="_blank">Visualizar</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ asset($licitacao->ataabertura) }}" class="btn btn-primary btn-sm" target="_blank">Visualizar</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ asset($licitacao->contratoconvenio) }}" class="btn btn-primary btn-sm" target="_blank">Visualizar</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ asset($licitacao->resultado) }}" class="btn btn-primary btn-sm" target="_blank">Visualizar</a>
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>

@endsection