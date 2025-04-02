@extends('layout.header')
@section('title', $post->titulo)

@section('conteudo')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h2 class="mb-3 text-center text-dark font-weight-bold" style="font-size: 2.5rem; line-height: 1.2;">{{ $titulo }}</h2>
            <p class="text-muted text-end mb-4 mr-2 text-center" style="font-size: 0.9rem; letter-spacing: 1px;">
                    @if($post->created_at)
                    {{ \Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->isoFormat('D [de] MMMM [de] YYYY') }}
                    @else
                    Data indisponível
                    @endif
                </p>

                 <!-- Carrossel -->
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="2900">
                <div class="carousel-inner">
                    <?php
                        $images = ['imagem', 'imagem2', 'imagem3', 'imagem4', 'imagem5'];
                        $firstImage = true;
                        $totalImages = 0;
                    ?>
                    @foreach($images as $index => $image)
                        @if($post->$image)
                        <?php $totalImages++; ?>
                            <div class="carousel-item {{ $firstImage ? 'active' : '' }}">
                                <img src="{{ asset($post->$image) }}" class="d-block w-100" alt="Imagem {{ $loop->index + 1 }}" 
                                    style="border-radius: 4px; max-height: 50vh; object-fit: contain;">
                            </div>
                            <?php $firstImage = false; ?>
                        @endif
                    @endforeach
                </div>

                <!-- Controles do Carrossel -->

                @if($totalImages > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <i class="fa-solid fa-arrow-left" style="color: #0b651d; font-size: 2rem;"></i>
                    <span class="visually-hidden">Anterior</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <i class="fa-solid fa-arrow-right" style="color: #0b651d; font-size: 2rem;"></i>
                    <span class="visually-hidden">Próximo</span>
                </button>
                @endif
            </div>

            
                <div class="card-body mt-4">
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

        <!-- Ícones de Redes Sociais -->
        <div class="social-icons mt-5 text-center">
            <a href="https://www.youtube.com/@YouTubedaFapeu" target="_blank" class="mx-2">
                <i class="fab fa-youtube" style="font-size: 2rem; color: #FF0000;"></i>
            </a>
            <a href="https://www.facebook.com/fapeu/?locale=pt_BR" target="_blank" class="mx-2">
                <i class="fab fa-facebook" style="font-size: 2rem; color: #3b5998;"></i>
            </a>
            <a href="https://www.instagram.com/fapeu_" target="_blank" class="mx-2">
                <i class="fab fa-instagram" style="font-size: 2rem; color: #C13584;"></i>
            </a>
            <a href="https://www.linkedin.com/company/fapeu/" target="_blank" class="mx-2">
                <i class="fab fa-linkedin" style="font-size: 2rem; color: #0077B5;"></i>
            </a>
        </div>
        </div>

@endsection