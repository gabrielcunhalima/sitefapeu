@extends('layout.headerhome')
@section('title','FAPEU')
@section('conteudo')
<style>
  .blog-post {
    -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
    transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
  }

  .blog-post .blog-img .overlay,
  .blog-post .blog-img .post-meta {
    position: absolute;
    opacity: 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }

  .blog-post .blog-img .overlay {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .blog-post .blog-img .post-meta {
    bottom: 5%;
    right: 5%;
    z-index: 1;
  }

  .blog-post .blog-img .post-meta .read-more:hover {
    color: #6dc77a !important;
  }

  .blog-post .content h1,
  .blog-post .content h2,
  .blog-post .content h3,
  .blog-post .content h4,
  .blog-post .content h5,
  .blog-post .content h6 {
    line-height: 1.2;
  }

  .blog-post .content .title {
    font-size: 18px;
  }

  .blog-post .content .title:hover {
    color: #6dc77a !important;
  }

  .blog-post .content .author .name:hover {
    color: #6dc77a !important;
  }

  .blog-post:hover {
    -webkit-transform: translateY(-7px);
    transform: translateY(-7px);
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  }

  .blog-post:hover .blog-img .overlay {
    opacity: 0.65;
  }

  .blog-post:hover .blog-img .post-meta {
    opacity: 1;
  }

  .blog-post .post-meta .like i,
  .profile-post .like i {
    -webkit-text-stroke: 2px #dd2427;
    -webkit-text-fill-color: transparent;
  }

  .blog-post .post-meta .like:active i,
  .blog-post .post-meta .like:focus i,
  .profile-post .like:active i,
  .profile-post .like:focus i {
    -webkit-text-stroke: 0px #dd2427;
    -webkit-text-fill-color: #dd2427;
  }

  .avatar.avatar-ex-sm {
    height: 36px;
  }

  .text-muted {
    color: #8492a6 !important;
  }

  .para-desc {
    max-width: 600px;
  }

  .section-title .title {
    letter-spacing: 0.5px;
    font-size: 30px;
  }

  .slick-prev:before,
  .slick-next:before {
    color: black;
  }

  .slick-prev,
  .slick-next {
    width: 10%;
    height: 25%;
    z-index: 100;
  }

  .slick-prev {
    left: -100px;
  }

  .slick-next {
    right: -100px;
  }

  .responsive img {
    width: auto;
    height: auto;
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
  }

  .slick-dots {
    left:0;
    right:0;
  }

</style>

<script>
  $(document).ready(function() {
    $('.responsive').slick({
      prevArrow: '<button type="button" class="slick-prev custom-arrow">Anterior</button>',
      nextArrow: '<button type="button" class="slick-next custom-arrow">Próximo</button>',
      dots: true,
      infinite: true,
      speed: 700,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            speed: 400,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 400
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 400
          }
        }
      ]
    });
  });
</script>

<div class="alert alert-danger mb-0 text-center" role="alert">
  <h2><a href="{{ route('colaborador.informerendimentos') }}">Clique aqui para conferir os Informes de Rendimento!</a></h2>
</div>

<div class="jumbotron jumbotron-fluid bg-homebotoes py-4 mb-0">
  <h1 class="container transformando text-center font-weight-bold" style="font-size: 2.75em;">Fundação de Amparo à Pesquisa e Extensão Universitária</h1>
</div>
<!-- 3 menus principais -->
<div class="bg-homebotoes pb-4">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 col-sm-12 d-flex justify-content-center">
        <div class="card bg-principal mb-3 card w-100 text-center grow shadow" style="width: 18rem;">
          <a href="{{route('projetos.espacocoordenador')}}">
            <div class="card-body">
              <p class="card-text text-white font-weight-bold" style="font-size: 1.2em;">Espaço do Coordenador</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 d-flex justify-content-center">
        <div class="card bg-principal mb-3 card w-100 text-center grow shadow" style="width: 18rem;">
          <a href="{{route('transparencia.projetostransparencia')}}">
            <div class="card-body">
              <p class="card-text text-white font-weight-bold" style="font-size: 1.2em;">Transparência</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 d-flex justify-content-center">
        <div class="card bg-principal mb-3 card w-100 text-center grow shadow" style="width: 18rem;">
          <a href="{{ route('fornecedor.espacofornecedor') }}">
            <div class="card-body">
              <p class="card-text text-white font-weight-bold" style="font-size: 1.2em;">Espaço do Fornecedor</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Noticias -->
<div class="bg-light">
  <div class="section-title jumbotron py-2 mb-0 bg-light">
      <h2 class="container my-2 text-center">Notícias recentes</h2>
      <p class="text-muted text-center mb-0">Confira o que aconteceu na FAPEU no nosso portal de notícias.</p>
  </div>

  <div class="responsive container mt-0">
      @foreach($news as $post)
          <div class="col-lg-4 col-md-6 col-sm-12 mt-4 pt-2">
              <div class="blog-post rounded border">
                  <a href="{{ route('noticias.noticiasleitura', $post->link) }}">
                      <div class="blog-img d-block overflow-hidden position-relative bg-claro">
                          <img src="{{ asset($post->imagem) }}" class="mx-auto img-fluid" alt="{{ $post->titulo }}" style="max-height: 20vh; min-height:20vh;object-fit: cover;">
                          <div class="overlay rounded-top bg-dark"></div>
                          <div class="post-meta justify-content-center">
                              <a href="{{ route('noticias.noticiasleitura', $post->link) }}" class="text-light read-more">
                                  Clique para ler tudo
                              </a>
                          </div>
                      </div>
                  </a>
                  <div class="content p-3">
                  <small class="text-muted">{{ $post->created_at->format('d/m/Y') }}</small>
                      <h4 class="mt-2">
                          <a href="{{ route('noticias.noticiasleitura', $post->link) }}" class="text-dark title">
                              {{ $post->titulo }}
                          </a>
                      </h4>
                      <!-- <p class="text-muted mt-2">{{ Str::limit(strip_tags($post->corpo), 100) }}</p> -->
                  </div>
              </div>
          </div><!--end col-->
      @endforeach
  </div>

  <div class="container col-12 d-flex justify-content-center">
      <div class="card bg-principal my-3 card text-center shadow grow2">
          <a href="{{ route('noticias.noticiasrecentes') }}">
              <div class="card-body" style="min-width:15vw;">
                  <h5 class="card-text text-white">Mais notícias</h5>
              </div>
          </a>
      </div>
  </div>
</div>


<!-- Servicos -->
<div class="feature">
  <div class="container">
    <div class="text-center mx-auto wow fadeInUp">
      <div class="section-title my-4 py-4" style="margin-right: 23vw;margin-left:23vw">
        <h2 class="card-text title font-montserratbold text-white">Serviços</h2>
      </div>
      <div class="accordion accordion-flush d-none pb-4" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Licitações</b>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Gestão administrativa e financeira eficiente para projetos de ensino, pesquisa e extensão. Contamos com uma equipe técnica especializada que proporciona suporte completo, além de organização, conformidade e otimização de recursos para o sucesso do projeto.<br><a class="btn text-white rounded-pill py-2 px-4 my-2 bg-dark" href="http://150.162.78.4:8080/transparencia/transparencia/transparenciainstitucional">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              <b>Reservas de Salas</b>
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Agendamento de espaços físicos para reuniões e eventos com capacidade para até 80 pessoas.<br><a class="btn text-white rounded-pill py-2 px-4 my-2 bg-dark" href="http://150.162.78.4:8080/manager_reservasala/reservasala">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              <b>Cursos e Eventos</b>
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Crie e gerencie seu evento através da nossa plataforma completa, prática e intuitiva.<br><a class="btn text-white rounded-pill py-2 px-4 my-2 bg-dark" href="https://eventos.fapeu.com.br/eventos/public">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              <b>Importação de Bens e Insumos</b>
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Realizamos a importação de equipamentos e insumos para pesquisa com isenção fiscal, conforme a Lei nº 8.010/1990. Instituições credenciadas no CNPq podem aproveitar esse benefício para otimizar seus projetos científicos e tecnológicos.<br><a class="btn text-white rounded-pill py-2 px-4 my-2 bg-dark" href="{{route('homepage.importacao')}}">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
              <b>NAGEFI</b>
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">NAGEFI auxilia empresas públicas e privadas no aprimoramento de processos, gestão e compliance financeiro, fiscal e tributário.<br><a class="btn text-white rounded-pill py-2 px-4 my-2 bg-dark" href="{{route('homepage.nagefi')}}">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingSix">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
              <b>LATIC</b>
            </button>
          </h2>
          <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Infraestrutura completa e tecnologias inovadoras para comunicação, ensino e aprendizado à distância.<br><a class="btn text-white rounded-pill py-2 px-4 my-2 bg-dark" href="{{route('homepage.latic')}}">Saiba mais</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- TELA GRANDE -->
    <div class="collapse d-block" id="servicosCollapse">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Gestão de Projetos</h5>
              <p class="card-text">Gestão administrativa e financeira eficiente para projetos de ensino, pesquisa e extensão. Contamos com uma equipe técnica especializada que proporciona suporte completo, além de organização, conformidade e otimização de recursos para o sucesso do projeto.</p><br>
              <a class="btn text-white rounded-pill py-2 px-4 mt-auto bg-dark" href="{{ route('projetos.menuprojetos') }}">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Reservas de Salas</h5>
              <p class="card-text">Agendamento de espaços físicos para reuniões e eventos com capacidade para até 80 pessoas.</p><br><br><br><br><br>
              <a class="btn text-white rounded-pill py-2 px-4 mt-auto bg-dark" href="http://150.162.78.4:8080/manager_reservasala/reservasala">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Cursos e Eventos</h5>
              <p class="card-text">Crie e gerencie seu evento através da nossa plataforma completa, prática e intuitiva.</p><br><br><br><br><br>
              <a class="btn text-white rounded-pill py-2 px-4 mt-auto bg-dark mx-auto text-decoration-none" href="https://eventos.fapeu.com.br/eventos/public">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-4 mt-2 pb-5 mb-md-5">
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Importação de Bens e Insumos</h5>
              <p class="card-text">Realizamos a importação de equipamentos e insumos para pesquisa com isenção fiscal, conforme a Lei nº 8.010/1990. Instituições credenciadas no CNPq podem aproveitar esse benefício para otimizar seus projetos científicos e tecnológicos.</p> <br>
              <a class="btn text-white rounded-pill py-2 px-4 mt-auto bg-dark" href="{{route('homepage.importacao')}}">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.0s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">NAGEFI</h5>
              <p class="card-text">NAGEFI auxilia empresas públicas e privadas no aprimoramento de processos, gestão e compliance financeiro, fiscal e tributário.<br><br><br><br></p> <br>
              <a class="btn text-white rounded-pill py-2 px-4 mt-auto bg-dark" href="{{route('homepage.nagefi')}}">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.2s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">LATIC</h5>
              <p class="card-text">Infraestrutura completa e tecnologias inovadoras para comunicação, ensino e aprendizado à distância.</p><br><br><br><br>
              <a class="btn text-white rounded-pill py-2 px-4 mt-auto bg-dark" href="{{route('homepage.latic')}}">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Apoiadas -->
<div class="jumbotron jumbotron-fluid bg-light" style="margin-bottom:0 !important;">
  <div class="containerapoiadas mx-auto">
    <div class="section-title mb-4 pb-2">
      <h4 class="title text-center font-montserratbold">Instituições Apoiadas</h4>
    </div>
    <div class="row align-items-center">
      <div class="col-sm apoiadas link-hover">
        <a href="https://ufsc.br/">
          <img src="images/ufsc.png" alt="Apoiada UFSC" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas link-hover">
        <a href="https://www.uffs.edu.br/">
          <img src="images/uffs.png" alt="Apoiada UFFS" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas link-hover">
        <a href="https://www.udesc.br/">
          <img src="images/udesc.png" alt="Apoiada Udesc" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas link-hover">
        <a href="https://ifc.edu.br/">
          <img src="images/ifc.png" alt="Apoiada IFC" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas link-hover">
        <a href="https://unipampa.edu.br/">
          <img src="images/unipampa.png" alt="Apoiada Unipampa" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas link-hover">
        <a href="https://www.gov.br/ebserh/pt-br">
          <img src="images/ebserh.png" alt="Apoiada ebserh" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas link-hover">
        <a href="https://www.gov.br/ebserh/pt-br/hospitais-universitarios/regiao-sudeste/hu-ufjf">
          <img src="images/huufjf.png" alt="hu ufjf" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas link-hover">
        <a href="https://www.gov.br/ebserh/pt-br/hospitais-universitarios/regiao-sul/hu-ufsc">
          <img src="images/huufsc.png" alt="Apoiada HUUFSC" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas link-hover">
        <a href="https://confies.org.br/">
          <img src="images/confies.png" alt="Apoiada confies" class="img-fluid img-sublink">
        </a>
      </div>
    </div>
  </div>
</div>

<script>
  
  document.addEventListener('DOMContentLoaded', function () {
  function toggleContent() {
    const servicosCollapse = document.getElementById('servicosCollapse');
    const accordionFlushExample = document.getElementById('accordionFlushExample');
    const telaPequena = window.innerWidth < 992;

    if (telaPequena) {
      servicosCollapse.classList.add('d-none');
      accordionFlushExample.classList.remove('d-none');
    } else {
      servicosCollapse.classList.remove('d-none');
      accordionFlushExample.classList.add('d-none');
    }
  }

toggleContent();

  window.addEventListener('resize', toggleContent);
});
</script>
@endsection