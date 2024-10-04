@extends('layout.header')
@section('title','FAPEU')
@section('title','FAPEU Novo')

@section('conteudo')
<h1>Resultados da Pesquisa para "{{ $query }}"</h1>

@if ($noticias->isEmpty() && $conteudos->isEmpty() && $eventos->isEmpty())
<p>Nenhum resultado encontrado.</p>
@else
@if (!$conteudos->isEmpty())
<h2 style="margin-top:3vh;">Menus</h2>
<ul>
    @foreach ($conteudos as $post)
    <li>
        <h4><a style='color:#009371' href="{{ $post->rota }}">{{ $post->titulo }}</a></h4>
        <p>
            {{ \Illuminate\Support\Str::limit($post->corpo, 240, '...') }}
            @if (strlen($post->corpo) > 240)
            <a href="{{ $post->rota }}">Ver mais</a>
            @endif
        </p>
    </li>
    @endforeach

    @foreach ($eventos as $post)
    <li>
        <h4><a style='color:#009371' href="{{ $post->link }}">{{ $post->titulo }}</a></h4>
        <p>
            {{ \Illuminate\Support\Str::limit($post->corpo, 240, '...') }}
            @if (strlen($post->corpo) > 240)
            <a href="{{ $post->link }}">Ver mais</a>
            @endif
        </p>
    </li>
    @endforeach

</ul>
@endif

@if (!$noticias->isEmpty())
<h2 style="margin-top:3vh;">Notícias</h2>
<ul>
    @foreach ($noticias as $post)
    <li>
        <h4><a style='color:#009371' href="{{ $post->link }}">{{ $post->titulo }}</a></h4>
        <p>
            {{ \Illuminate\Support\Str::limit($post->corpo, 240, '...') }}
            @if (strlen($post->corpo) > 240)
            <a href="{{ $post->link }}">Ver mais</a>
            @endif
        </p>
    </li>
    @endforeach
</ul>
@endif

@if (!$eventos->isEmpty())
<h2 style="margin-top:3vh;">Eventos</h2>
<ul>
    @foreach ($eventos as $post)
    <li>
        <h4><a style='color:#009371' href="{{ route('homepage.home', $post->id) }}">{{ $post->titulo }}</a></h4>
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
@endif

<a class="btn btn-primary mt-auto" href="{{ url('/') }}">Voltar para a página inicial</a>
@endsection