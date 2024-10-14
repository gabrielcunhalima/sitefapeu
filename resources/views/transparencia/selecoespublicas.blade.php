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
                    <td class="align-middle">{!! $selecao->ordem!!}</td>
                    <td class="align-middle">{!! $selecao->processo!!}</td>
                    <td class="align-middle">{!! $selecao->orgao!!}</td>
                    <td class="align-middle">{!! $selecao->projeto!!}</td>
                    <td class="align-middle">{!! $selecao->contratoconvenio!!}</td>
                    <td class="align-middle">{!! $selecao->selecaopublica!!}</td>
                    <td class="align-middle">{!! $selecao->dataabertura!!}</td>
                    <td class="align-middle">{!! $selecao->objeto !!}</td>
                    <td class="align-middle">{!! $selecao->resultado !!}</td>
                    <td class="align-middle">{!! $selecao->datapublicacao!!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
