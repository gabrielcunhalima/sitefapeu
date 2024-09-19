@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')
<h1>Resultados da Pesquisa para "{{ $query }}"</h1>

@if ($results->isEmpty())
<p>Nenhum resultado encontrado.</p>
@else
<ul>
    @foreach ($results as $post)
    <li>
        <h2>{{ $post->titulo }}</h2>
        <p>{{ $post->corpo }}</p>
    </li>
    @endforeach
</ul>
@endif

<a href="{{ url('/') }}">Voltar para a página inicial</a>
@endsection