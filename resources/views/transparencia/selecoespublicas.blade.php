@extends('layout.header')
@section('title', 'Seleções Públicas')

@section('conteudo')

<div class="container-fluid" style="font-size:16px;">
    <table class="table table-bordered">
        <thead class="bg-verdeescuro text-white">
            <tr>
                <th scope="col">Ordem</th>
                <th scope="col">Processo</th>
                <th scope="col">Orgão</th>
                <th scope="col">Projeto</th>
                <th scope="col">Contrato/Convênio</th>
                <th scope="col">Seleção Pública</th>
                <th scope="col">Data Abertura*</th>
                <th scope="col">Objeto</th>
                <th scope="col">Resultado</th>
                <th scope="col">Data Publicação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $selecao)
                <tr>
                    <td>{{ $selecao->ordem }}</td>
                    <td>{{ $selecao->processo }}</td>
                    <td>{{ $selecao->orgao }}</td>
                    <td>{{ $selecao->projeto }}</td>
                    <td>{{ $selecao->contratoconvenio }}</td>
                    <td>{{ $selecao->selecaopublica }}</td>
                    <td>{{ $selecao->dataabertura }}</td>
                    <td>{{ $selecao->objeto }}</td>
                    <td>{{ $selecao->resultado }}</td>
                    <td>{{ $selecao->datapublicacao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
