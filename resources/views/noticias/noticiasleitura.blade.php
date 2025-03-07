@extends('layout.header')
@section('title', $post->titulo)

@section('conteudo')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h2 class="mb-3 text-center text-dark font-weight-bold" style="font-size: 2.5rem; line-height: 1.2;">{{ $titulo }}</h2>
            <div class="card border-0 shadow rounded-3">
                <div class="mb-3">
                    <img src="{{ asset($post->imagem) }}" class="card-img-top" alt="{{ $titulo }}" style="border-radius: 4px; max-height: 50vh; object-fit: contain;">
                </div>
                <p class="text-muted text-end mb-4 mr-2 text-center" style="font-size: 0.9rem; letter-spacing: 1px;">
                    @if($post->created_at)
                    {{ \Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->isoFormat('D [de] MMMM [de] YYYY') }}
                    @else
                    Data indisponível
                    @endif
                </p>
                <div class="card-body">
                    <div class="card-text justify" style="line-height: 1.8; font-size: 1.1rem; color: #555;">
                        {!! $post->corpo !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('noticias.noticiasrecentes') }}" class="btn btn-primary btn-lg px-4 py-2" style="border-radius: 50px; font-size: 1.1rem;">
                Voltar para as notícias recentes
            </a>
        </div>
    </div>
</div>
@endsection