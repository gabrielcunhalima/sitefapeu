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
        <h2><a style='color:#009371' href="{{ route('homepage.home', $post->id) }}">{{ $post->titulo }}</a></h2>
        <p>
            {{ \Illuminate\Support\Str::limit($post->corpo, 240, '...') }}
            @if (strlen($post->corpo) > 240)
            <a href="{{ route('homepage.home', $post->id) }}">Ver mais</a>
            @endif
        </p>
    </li>
    @endforeach
</ul>
@endif


<a class="btn btn-primary mt-auto" href="{{ url('/') }}">Voltar para a página inicial</a>
@endsection