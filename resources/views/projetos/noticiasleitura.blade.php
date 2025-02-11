@extends('layout.header')

@section('title', 'Leitura da Notícia')

@section('conteudo')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">

            <!-- card de Notícia -->
            <div class="card border-0 shadow-lg rounded-3 mb-5">
           
                <img src="{{ asset('storage/' . $post->imagem) }}" class="card-img-top" alt="{{ $titulo }}" style="max-height: 500px; object-fit: cover; border-radius: 1rem;">

                <div class="card-body">
                 
                    <h2 class="card-title mb-4 text-center text-dark font-weight-bold" style="font-size: 2.5rem; line-height: 1.2;">{{ $titulo }}</h2>
                    
                    <!-- dta da Publicação -->
                    <p class="text-muted text-center mb-4" style="font-size: 1rem; letter-spacing: 1px;">
                        @if($post->created_at)
                            {{ \Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->isoFormat('D [de] MMMM [de] YYYY') }}
                        @else
                            Data não disponível
                        @endif
                    </p>
                    
                    <div class="card-text" style="line-height: 1.8; font-size: 1.1rem; color: #555;">
                        {!! $post->corpo !!}
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('projetos.projetos') }}" class="btn btn-primary btn-lg px-4 py-2" style="border-radius: 50px; font-size: 1.1rem; text-transform: uppercase;">
                    Voltar para os Projetos
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
