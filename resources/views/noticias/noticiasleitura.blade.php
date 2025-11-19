@extends('layout.header')
@section('title', $post->titulo)

@section('conteudo')

<style>

  .carousel-noticia-post {
    position: relative;
    margin-bottom: 20px;
    opacity:0
  }
.carousel-noticia-post.slick-initialized {
     opacity: 1;
   }
  .carousel-noticia-post img {
    border-radius: 4px;
    max-height: 50vh;
    object-fit: contain;
  }

  .slick-prev,
  .slick-next {
    font-size: 0;
    line-height: 0;
    position: absolute;
    top: 50%;
    display: block;
    width: 40px;
    height: 40px;
    padding: 0;
    transform: translate(0, -50%);
    cursor: pointer;
    color: #0b651d;
    border: none;
    outline: none;
    background: white;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    z-index: 5;
  }

  .slick-prev {
    left: 10px;
  }

  .slick-next {
    right: 10px;
  }

  .slick-prev:before,
  .slick-next:before {
    font-family: 'bootstrap-icons';
    font-size: 24px;
    line-height: 1;
    color: #0b651d;
    opacity: 0.75;
  }

  .slick-prev:before {
    content: "\F284";
  }

  .slick-next:before {
    content: "\F285";
  }

  .slick-dots {
    position: relative;
    bottom: -20px;
    display: block;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
  }

  .slick-dots li button:before {
    color: #0b651d;
    font-size: 12px;
  }

  .slick-dots li.slick-active button:before {
    color: #0b651d;
    opacity: 1;
  }

  .slick-dots li button:before {
    opacity: 0.5;
  }

  @media (max-width: 768px) {
    .slick-prev,
    .slick-next {
      width: 35px;
      height: 35px;
    }

    .slick-prev:before,
    .slick-next:before {
      font-size: 20px;
    }
  }
</style>

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
                <div class="carousel-noticia-post">
                    <?php
                        $images = ['imagem', 'imagem2', 'imagem3', 'imagem4', 'imagem5'];
                        // $firstImage = true;
                        // $totalImages = 0;
                    ?>
                    @foreach($images as $index => $image)
                        @if($post->$image)            
                            <div>
                                <img src="{{ asset($post->$image) }}" class="d-block w-100" alt="Imagem {{ $loop->index + 1 }}" 
                                    style="border-radius: 4px; max-height: 50vh; object-fit: contain;">
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- Controles do Carrossel -->

                {{-- @if($totalImages > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <i class="fa-solid fa-arrow-left" style="color: #0b651d; font-size: 2rem;"></i>
                    <span class="visually-hidden">Anterior</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <i class="fa-solid fa-arrow-right" style="color: #0b651d; font-size: 2rem;"></i>
                    <span class="visually-hidden">Próximo</span>
                </button>
                @endif
            </div> --}}

            
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
        
<script>
  $(document).ready(function() {
 $('.carousel-noticia-post').slick({
      dots: true,
      infinite: false,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: '<button type="button" class="slick-prev"><i class="bi bi-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="bi bi-chevron-right"></i></button>',
      responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true
          }
        }
      ]
    });
  });
</script>

@endsection