@extends('layout.header')
@section('title','FAPEU')
@section('conteudo')

<style>
  .hero-section {
    padding: 0;
    position: relative;
    background-color: #f8f9fa;
    overflow: hidden;
  }

  .hero-content {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    margin-bottom: 20px;
  }

  .action-button {
    border-radius: 20px;
    transition: all 0.3s ease;
    padding: 18px 15px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border: none;
  }

  .action-button:hover {
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), inset 0 0 5px rgba(0, 0, 0, 0.2);
  }

  .action-button p {
    font-size: 1.1rem;
    font-weight: 600;
    margin: 0;
  }

  .news-section {
    padding: 60px 0;
    background-color: #f8f9fa;
  }

  .news-title {
    position: relative;
    margin-bottom: 40px;
    font-weight: 700;
  }

    .apoiadas-title {
    position: relative;
    margin-bottom: 40px;
    font-weight: 700;
  }

  .news-title:after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background-color: #06551a;
  }

  .news-card {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    height: 100%;
    background-color: #fff;
    margin: 10px;
    cursor: pointer;
  }

  .news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
  }

  .news-img-container {
    height: 200px;
    overflow: hidden;
    position: relative;
  }

  .news-img-container img {
    object-fit: contain;
    transition: transform 0.5s ease;
  }

  .news-card:hover .news-img-container img {
    transform: scale(1.05);
  }

  .news-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.7));
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .news-card:hover .news-overlay {
    opacity: 1;
  }

  .news-meta {
    position: absolute;
    bottom: 15px;
    right: 15px;
    color: white;
    background-color: rgba(6, 85, 26, 0.9);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.3s ease;
  }

  .news-card:hover .news-meta {
    opacity: 1;
    transform: translateY(0);
  }

  .news-content {
    padding: 20px;
  }

  .news-date {
    font-size: 0.85rem;
    color: #6c757d;
    margin-bottom: 10px;
    font-weight: 500;
  }

  .news-title-text {
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 15px;
    color: #333;
    transition: color 0.3s ease;
  }

  .news-card:hover .news-title-text {
    color: #06551a;
  }

  .view-more-btn:hover {
    background-color:#06551a;
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(6, 85, 26, 0.3);
  }

  .responsive {
    width: 100%;
    margin: 0 auto;
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
    color: #06551a;
    border: none;
    outline: none;
    background: white;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    z-index: 5;
  }

  .slick-prev {
    left: -50px;
  }

  .slick-next {
    right: -50px;
  }

  .slick-prev:before,
  .slick-next:before {
    font-family: 'bootstrap-icons';
    font-size: 24px;
    line-height: 1;
    color: #06551a;
    opacity: 0.75;
  }

  .slick-prev:before {
    content: "\F284";
  }

  .slick-next:before {
    content: "\F285";
  }

  .slick-dots {
    position: absolute;
    bottom: -30px;
    display: block;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
  }



  .servicos-section {
    padding: 60px 0;
    background-color: rgb(240, 240, 240);
  }

  .servico-card {
    border-radius: 12px;
    padding: 30px;
    height: 100%;
    transition: all 0.3s ease;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 10px 12px rgba(0, 0, 0, 0.08), inset 0 0 2px rgba(0, 0, 0, 0.2);
  }

  .servico-card:hover {
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
  }

  .servico-icon {
    font-size: 2.5rem;
    color: #06551a;
    margin-bottom: 20px;
  }

  .servico-title {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #333;
  }

  .servico-desc {
    color: #6c757d;
    margin-bottom: 20px;
  }

  .servico-link {
    display: inline-block;
    color: #06551a;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .servico-link:hover {
    color: rgb(5, 59, 18);
  }

  .apoiadas {
    padding: 30px 0;
    background-color: #f8f9fa;
  }

  a {
    text-decoration: none;
  }

  .servicos-accordion {
    display: none;
  }

  .accordion-button:not(.collapsed) {
    background-color: rgba(6, 85, 26, 0.1);
    color: #06551a;
  }

  .accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(6, 85, 26, 0.25);
  }

  .accordion-item {
    margin-bottom: 8px;
    border-radius: 8px;
    overflow: hidden;
  }

  @media (max-width: 992px) {
    .action-button {
      margin-bottom: 15px;
    }

    .slick-prev,
    .slick-next {
      display: none !important;
    }
  }

  @media (max-width: 768px) {
    .transformando {
      font-size: 1.5em !important;
    }

    .news-img-container {
      height: 180px;
    }

    .servico-card {
      margin-bottom: 20px;
    }

    .servico-desc p {
      color: rgb(0, 0, 0);
    }

    .servicos-desktop {
      display: none;
    }

    .servicos-accordion {
      display: block;
    }
  }
</style>

<div class="jumbotron jumbotron-fluid bg-homebotoes pt-3 pb-3">
  <h1 class="container transformando text-center mx-auto mb-3" style="font-size: 2.5em; font-family:'Montserrat', sans-serif">Fundação de Amparo à Pesquisa e Extensão Universitária</h1>
  <div class="container">
    <div class="row pb-4">
      <div class="col-6 col-lg-3 mb-2">
        <a href="{{route('projetos.captacao')}}" class="text-decoration-none">
          <div class="action-button bg-principal text-white text-center">
            <i class="bi bi-journal-bookmark-fill mb-2" style="font-size: 2rem;"></i>
            <p>Captação e Implantação<br>de Projetos</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-lg-3 mb-2">
        <a href="{{route('transparencia.projetostransparencia')}}" class="text-decoration-none">
          <div class="action-button bg-principal text-white text-center">
            <i class="bi bi-file-earmark-check mb-2" style="font-size: 2rem;"></i>
            <p>Transparência</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-lg-3 mb-2">
        <a href="{{route('projetos.espacocoordenador')}}" class="text-decoration-none">
          <div class="action-button bg-principal text-white text-center">
            <i class="bi bi-person-workspace mb-2" style="font-size: 2rem;"></i>
            <p>Espaço do Coordenador</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-lg-3 mb-2">
        <a href="{{ route('fornecedor.espacofornecedor') }}" class="text-decoration-none">
          <div class="action-button bg-principal text-white text-center">
            <i class="bi bi-briefcase mb-2" style="font-size: 2rem;"></i>
            <p>Espaço do Fornecedor</p>
          </div>
        </a>
      </div>
    </div>
  </div>

</div>
<section class="news-section">
  <div class="container">
    <h2 class="text-center news-title">Notícias Recentes</h2>
    <p class="text-muted text-center mb-5">Confira o que aconteceu na FAPEU em nosso portal de notícias</p>
    <div class="responsive">
      @foreach ($news as $post)
      <div class="px-2">
        <a href="{{ route('noticias.noticiasleitura', ['link' => $post->link]) }}" class="text-decoration-none">
          <div class="news-card">
            <div class="news-img-container">
              @if($post->imagem)
              <img src="{{ asset($post->imagem) }}" class="d-block w-100" alt="Imagem da notícia">
              @endif
              <div class="news-overlay"></div>
              <div class="news-meta">Leia mais</div>
            </div>
            <div class="news-content">
              <div class="news-date">{{ $post->created_at->format('d/m/Y') }}</div>
              <h3 class="news-title-text">{{ $post->titulo }}</h3>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <div class="text-center mt-4">
      <a href="{{ route('noticias.noticiasrecentes') }}" class="fapeu-btn mt-3">Ver mais notícias</a>
    </div>
  </div>
</section>

<section class="servicos-section">
  <div class="container">
    <h2 class="text-center news-title">Nossos Serviços</h2>
    <p class="text-muted text-center mb-5">Conheça os serviços oferecidos pela FAPEU</p>
    <div class="row servicos-desktop">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="servico-card">
          <div class="servico-icon">
            <i class="bi bi-journal-text"></i>
          </div>
          <h3 class="servico-title">Gestão de Projetos</h3>
          <p class="servico-desc">Gestão administrativa e financeira eficiente para projetos de ensino, pesquisa e extensão. Contamos com uma equipe técnica especializada que proporciona suporte completo.</p>
          <a href="{{ route('projetos.menuprojetos') }}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="servico-card">
          <div class="servico-icon">
            <i class="bi bi-calendar-event"></i>
          </div>
          <h3 class="servico-title">Reservas de Salas</h3>
          <p class="servico-desc">Agendamento de espaços físicos para reuniões e eventos com capacidade para até 80 pessoas.</p>
          <a href="http://150.162.78.4:8080/manager_reservasala/reservasala" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="servico-card">
          <div class="servico-icon">
            <i class="bi bi-mortarboard"></i>
          </div>
          <h3 class="servico-title">Cursos e Eventos</h3>
          <p class="servico-desc">Crie e gerencie seu evento através da nossa plataforma completa, prática e intuitiva.</p>
          <a href="https://eventos.fapeu.com.br/eventos/public" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="servico-card">
          <div class="servico-icon">
            <i class="bi bi-box-seam"></i>
          </div>
          <h3 class="servico-title">Importação de Bens e Insumos</h3>
          <p class="servico-desc">Realizamos a importação de equipamentos e insumos para pesquisa com isenção fiscal, conforme a Lei nº 8.010/1990.</p>
          <a href="{{route('homepage.importacao')}}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="servico-card">
          <div class="servico-icon">
            <i class="bi bi-graph-up"></i>
          </div>
          <h3 class="servico-title">NAGEFI</h3>
          <p class="servico-desc">NAGEFI auxilia empresas públicas e privadas no aprimoramento de processos, gestão e compliance financeiro, fiscal e tributário.</p>
          <a href="{{route('homepage.nagefi')}}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="servicos-accordion">
    <div class="accordion" id="servicosAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingGestao">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGestao" aria-expanded="false" aria-controls="collapseGestao">
            <i class="bi bi-journal-text me-2"></i> Gestão de Projetos
          </button>
        </h2>
        <div id="collapseGestao" class="accordion-collapse collapse" aria-labelledby="headingGestao" data-bs-parent="#servicosAccordion">
          <div class="accordion-body">
            <p>Gestão administrativa e financeira eficiente para projetos de ensino, pesquisa e extensão. Contamos com uma equipe técnica especializada que proporciona suporte completo.</p>
            <a href="{{ route('projetos.menuprojetos') }}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingReservas">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReservas" aria-expanded="false" aria-controls="collapseReservas">
            <i class="bi bi-calendar-event me-2"></i> Reservas de Salas
          </button>
        </h2>
        <div id="collapseReservas" class="accordion-collapse collapse" aria-labelledby="headingReservas" data-bs-parent="#servicosAccordion">
          <div class="accordion-body">
            <p>Agendamento de espaços físicos para reuniões e eventos com capacidade para até 80 pessoas.</p>
            <a href="http://150.162.78.4:8080/manager_reservasala/reservasala" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingCursos">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCursos" aria-expanded="false" aria-controls="collapseCursos">
            <i class="bi bi-mortarboard me-2"></i> Cursos e Eventos
          </button>
        </h2>
        <div id="collapseCursos" class="accordion-collapse collapse" aria-labelledby="headingCursos" data-bs-parent="#servicosAccordion">
          <div class="accordion-body">
            <p>Crie e gerencie seu evento através da nossa plataforma completa, prática e intuitiva.</p>
            <a href="https://eventos.fapeu.com.br/eventos/public" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingImportacao">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseImportacao" aria-expanded="false" aria-controls="collapseImportacao">
            <i class="bi bi-box-seam me-2"></i> Importação de Bens e Insumos
          </button>
        </h2>
        <div id="collapseImportacao" class="accordion-collapse collapse" aria-labelledby="headingImportacao" data-bs-parent="#servicosAccordion">
          <div class="accordion-body">
            <p>Realizamos a importação de equipamentos e insumos para pesquisa com isenção fiscal, conforme a Lei nº 8.010/1990.</p>
            <a href="{{route('homepage.importacao')}}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingNagefi">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNagefi" aria-expanded="false" aria-controls="collapseNagefi">
            <i class="bi bi-graph-up me-2"></i> NAGEFI
          </button>
        </h2>
        <div id="collapseNagefi" class="accordion-collapse collapse" aria-labelledby="headingNagefi" data-bs-parent="#servicosAccordion">
          <div class="accordion-body">
            <p>NAGEFI auxilia empresas públicas e privadas no aprimoramento de processos, gestão e compliance financeiro, fiscal e tributário.</p>
            <a href="{{route('homepage.nagefi')}}" class="servico-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="apoiadas">
  <div class="container-fluid">
    <div class="containerapoiadas mx-auto">
      <div>
        <h2 class="text-center apoiadas-title">Instituições Apoiadas</h2>
        <p class="text-muted text-center">Instituições que possuem credenciamento para pesquisa e extensão junto à FAPEU</p>
      </div>
      <div class="row align-items-center">
        <div class="col-auto col-md-1 apoiadas link-hover mx-auto">
          <a href="https://ufsc.br/">
            <img src="images/ufsc.png" alt="Apoiada UFSC" class="img-fluid img-sublink">
          </a>
        </div>
        <div class="col-auto col-md-1 apoiadas link-hover mx-auto">
          <a href="https://www.uffs.edu.br/">
            <img src="images/uffs.png" alt="Apoiada UFFS" class="img-fluid img-sublink">
          </a>
        </div>
        <div class="col-auto col-md-1 apoiadas link-hover mx-auto">
          <a href="https://ifc.edu.br/">
            <img src="images/ifc.png" alt="Apoiada IFC" class="img-fluid img-sublink">
          </a>
        </div>
        <div class="col-auto col-md-1 apoiadas link-hover mx-auto">
          <a href="https://unipampa.edu.br/">
            <img src="images/unipampa.png" alt="Apoiada Unipampa" class="img-fluid img-sublink">
          </a>
        </div>
        <div class="col-auto apoiadas link-hover mx-auto">
          <a href="https://www.gov.br/ebserh/pt-br/hospitais-universitarios/regiao-sul/hu-ufsc">
            <img src="images/huufsc-completo.png" alt="Apoiada HUUFSC" class="img-fluid img-sublink">
          </a>
        </div>
        <div class="col-auto col-md-1 apoiadas link-hover mx-auto">
          <a href="https://www.udesc.br/">
            <img src="images/udesc.png" alt="Apoiada Udesc" class="img-fluid img-sublink">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid afiliacao">
    <div class="container">
      <h2 class="text-center apoiadas-title">Afiliação</h2>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 p-3 mb-4 link-hover">
          <a href="https://www.confies.org.br/" target="_blank" class="text-decoration-none">
            <img src="{{ asset('images/confies.png') }}" alt="Logo do CONFIES" class="img-fluid mx-auto d-block" style="max-width: 40%; height: auto;">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('.responsive').slick({
      dots: true,
      infinite: true,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: '<button type="button" class="slick-prev"><i class="bi bi-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="bi bi-chevron-right"></i></button>',
      responsive: [{
          breakpoint: 864,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        }
      ]
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    function toggleResponsiveElements() {
      const width = window.innerWidth;
      const isMobile = width < 992;

    }

    toggleResponsiveElements();
    window.addEventListener('resize', toggleResponsiveElements);
  });
</script>
@endsection