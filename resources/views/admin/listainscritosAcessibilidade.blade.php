@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')

@section('conteudo')
<div class='row'>
    <h3 class='center'>Detalhes Acessibilidade - Inscrição: [{{$lista->id_inscricao}}]</h3>
    <h5 class="center">{{$inscricao->nomeCompleto}} - {{$inscricao->telefone}}</h5>
    <div class="col s12">
        <div class="col s6">
            <h4>Deficiência(s):</h4>
            <ul>
            {!! $lista->auditiva ? '<li>Auditiva</li>' : '' !!}
            {!! $lista->fisica ? '<li>Fisica</li>' : '' !!}
            {!! $lista->visual ? '<li>Visual</li>' : '' !!}
            {!! $lista->intelectual ? '<li>Intelectual</li>' : '' !!}
            {!! $lista->mental ? '<li>Mental</li>' : '' !!}
            {!! $lista->qual_def ? '<li>' . $lista->qual_def . '<span> (adicionado pelo usuário)</span></li>' : '' !!}
            </ul>
        </div>
    
        <div class="col s6">
        <h4>Necessidade(s):</h4>
            <ul>
            {!! $lista->acompanhante ? '<li>Acompanhante</li>' : '' !!}
            {!! $lista->andador ? '<li>Andador</li>' : '' !!}
            {!! $lista->cadeirarodas ? '<li>Cadeira Rodas</li>' : '' !!}
            {!! $lista->caoguia ? '<li>Cão Guia</li>' : '' !!}
            {!! $lista->leituraorofacial ? '<li>Leitura Orofacial</li>' : '' !!}
            {!! $lista->muleta ? '<li>Muleta</li>' : '' !!}
            {!! $lista->audiodesceicao ? '<li>Audiodescrição</li>' : '' !!}
            {!! $lista->legenda ? '<li>Legenda</li>' : '' !!}
            {!! $lista->libras ? '<li>Libras</li>' : '' !!}
            {!! $lista->lugarcadeirante ? '<li>Lugar Cadeirante</li>' : '' !!}
            {!! $lista->lugarcaoguia ? '<li>Lugar Cão Guia</li>' : '' !!}
            {!! $lista->qual_neces ? '<li>' . $lista->qual_neces . '<span> (adicionado pelo usuário)</span></li>' : '' !!}
            </ul>
        </div>
    </div>
</div>
<div class='row center' style="margin-top:150px;">
    <div class='col s12 m12'>
        <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
    </div>
</div>
@endsection