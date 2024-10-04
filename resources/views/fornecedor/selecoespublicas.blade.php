@extends('layout.header')
@section('title', 'FAPEU Novo')

@section('inicio')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="font-weight-bold text-preto">Formulários de Colaborador</h1>
    </div>
</div>

@endsection

@section('conteudo')

<div class="container" style="font-size:16px;">
    <table class="table table-bordered">
        <thead class="bg-verdeescuro text-white">
            <tr>
                <th scope="col">Formulário</th>
                <th scope="col">Última Atualização</th>
                <th scope="col">Responsável</th>
                <th scope="col">Departamento</th>
                <th scope="col">Status</th>
                <th scope="col">Prazo</th>
                <th scope="col">Aprovação</th>
                <th scope="col">Observações</th>
                <th scope="col">Versão</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 67; $i++)
            <tr>
                <td><a href="/pdfs/Colaborador/Formularios/formulario_{{ $i + 1 }}.doc" target="_blank" class="text-dark">Formulário {{$i + 1}}</a></td>
                <td>{{ date('d/m/Y', strtotime("-$i days")) }}</td>
                <td>Responsável {{$i + 1}}</td>
                <td>Departamento {{$i + 1}}</td>
                <td>Status {{$i + 1}}</td>
                <td>{{ date('d/m/Y', strtotime("+$i days")) }}</td>
                <td>Aprovado {{$i % 2 == 0 ? 'Sim' : 'Não'}}</td>
                <td>Observação {{$i + 1}}</td>
                <td>Versão {{$i + 1}}</td>
                <td><a href="#">Link {{$i + 1}}</a></td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>

@endsection
