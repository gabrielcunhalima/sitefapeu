@extends('layout.header')
@section('title','FAPEU | Formulários')

@section('conteudo')

<div class="container">
    <table class="table table-bordered">
        <thead class="bg-verdeescuro text-white">
            <tr>
                <th scope="col">Formulário</th>
                <th scope="col">Última Atualização</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="pdfs/Colaborador/Formularios/atualizacao_cadastro_empregado.doc" target="_blank" class="">Atualização Cadastral do Empregado</a></td>
                <td>15/12/2011</td>
            </tr>
            <tr>
                <td><a href="pdfs/Colaborador/Formularios/formulario_motivo_falta.doc" target="_blank" class="">Motivo Falta ao Trabalho</a></td>
                <td>30/03/2015</td>
            </tr>
            <tr>
                <td><a href="pdfs/Colaborador/Formularios/solicitacao_cracha.doc" target="_blank" class="">Solicitação de Crachá</a></td>
                <td>22/07/2010</td>
            </tr>
            <tr>
                <td><a href="pdfs/Colaborador/Formularios/solicitacao_vale_transporte.doc" target="_blank" class="">Solicitação de Vale Transporte</a></td>
                <td>16/04/2024</td>
            </tr>
            <tr>
                <td><a href="pdfs/Colaborador/Formularios/formulario_alteracao_aux_alimentacao (1).doc" target="_blank" class="">Alteração de Vale Alimentação</a></td>
                <td>16/08/2013</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
