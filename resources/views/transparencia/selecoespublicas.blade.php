@extends('layout.header')
@section('title', 'Seleções Públicas')

@section('conteudo')

<div class="container-fluid" style="font-size:16px;">
    <table class="table table-bordered">
        <thead class="bg-verdeescuro text-white">
            <tr>
                <th scope="col">Ordem</th>
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
                    <td class="align-middle">{!! $selecao->orgao!!}</td>
                    <td class="align-middle"><a href="">{!! $selecao->projeto!!}</a></td>
                    <td class="align-middle"><a href="">{!! $selecao->contratoconvenio!!}</a></td>
                    <td class="align-middle"><a href="">{!! $selecao->selecaopublica!!}</a></td>
                    <td class="align-middle">{!! $selecao->dataabertura!!}</td>
                    <td class="align-middle">{!! $selecao->objeto !!}</td>
                    <td class="align-middle">{!! $selecao->ataabertura !!}<br>{!! $selecao->resultado !!}</td>
                    <td class="align-middle">{!! $selecao->datapublicacao!!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
