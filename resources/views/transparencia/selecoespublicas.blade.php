@extends('layout.header')
@section('title', 'FAPEU Novo')

@section('conteudo')

<div class="container" style="font-size:16px;">
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
            @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>

@endsection
