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
            speed: 400
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

<div class="jumbotron jumbotron-fluid bg-transparentehome text-white my-0 pb-2 pt-4 text-center">
  <h1 class="container transformando font-weight-bold" style="font-family:'Petit Formal Script';font-size:3.6em;">Transformando ideias em ações!</h1>
</div>
<!-- 3 menus principais -->
<div class="container">
  <div class="row align-items-center mb-2">
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
      <div class="card bg-light mb-3 card w-100 text-center grow shadow" style="width: 18rem;">
        <a href="{{route('projetos.menuprojetos')}}">
          <div class="card-body">
            <p class="card-text text-verde font-weight-bold">Gestão de Projetos</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
      <div class="card bg-light mb-3 card w-100 text-center grow shadow" style="width: 18rem;">
        <a href="{{route('fornecedor.menulicitacao')}}">
          <div class="card-body">
            <p class="card-text text-verde font-weight-bold">Licitações e Prestadores de Serviço</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
      <div class="card bg-light mb-3 card w-100 text-center grow shadow" style="width: 18rem;">
        <a href="{{route('transparencia.menutransparencia')}}">
          <div class="card-body">
            <p class="card-text text-verde font-weight-bold">Transparência</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Projetos -->
<div class="bg-light p-4 m-0">
  <div class="section-title mb-4 pb-2 text-center">
    <h4 class="title mb-4 mt-3">Conheça os projetos que nós apoiamos</h4>
    <p class="text-muted para-desc mx-auto mb-0">A FAPEU conta com +250 projetos gerenciados com excelência.</p>
  </div>
  <div class="responsive container">
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
      <div class="blog-post rounded border">
        <a href="">
          <div class="blog-img d-block overflow-hidden position-relative">
            <img src="../images/teste.png" class="img-fluid rounded-top" alt="">
            <div class="overlay rounded-top bg-dark"></div>
            <div class="post-meta justify-content-center">
              <a href="javascript:void(0)" class="text-light read-more">Conheça o projeto<i class="mdi mdi-chevron-right"></i></a>
            </div>
          </div>
        </a>
        <div class="content p-3">
          <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">Quick guide on business with friends.</a></h4>
          <p class="text-muted mt-2">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p>
          <div class="pt-3 mt-3 border-top d-flex">
          </div>
        </div>
      </div><!--end blog post-->
    </div>
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
      <div class="blog-post rounded border">
        <a href="">
          <div class="blog-img d-block overflow-hidden position-relative">
            <img src="../images/teste.png" class="img-fluid rounded-top" alt="">
            <div class="overlay rounded-top bg-dark"></div>
            <div class="post-meta justify-content-center">
              <a href="javascript:void(0)" class="text-light read-more">Conheça o projeto<i class="mdi mdi-chevron-right"></i></a>
            </div>
          </div>
        </a>
        <div class="content p-3">
          <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">Quick guide on business with friends.</a></h4>
          <p class="text-muted mt-2">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p>
          <div class="pt-3 mt-3 border-top d-flex">
          </div>
        </div>
      </div><!--end blog post-->
    </div><!--end col-->
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
      <div class="blog-post rounded border">
        <a href="">
          <div class="blog-img d-block overflow-hidden position-relative">
            <img src="https://www.bootdey.com/image/350x280/6495ED/000000" class="img-fluid rounded-top" alt="">
            <div class="overlay rounded-top bg-dark"></div>
            <div class="post-meta">
              <a href="javascript:void(0)" class="text-light read-more">Conheça o projeto<i class="mdi mdi-chevron-right"></i></a>
            </div>
          </div>
        </a>
        <div class="content p-3">
          <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">Become more money-minded</a></h4>
          <p class="text-muted mt-2">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p>
          <div class="pt-3 mt-3 border-top d-flex">
          </div>
        </div>
      </div><!--end blog post-->
    </div><!--end col-->
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
      <div class="blog-post rounded border">
        <a href="">
          <div class="blog-img d-block overflow-hidden position-relative">
            <img src="../images/Paginas/anticorrupcao.png" class="img-fluid rounded-top" alt="">
            <div class="overlay rounded-top bg-dark"></div>
            <div class="post-meta">
              <a href="javascript:void(0)" class="text-light read-more">Conheça o projeto<i class="mdi mdi-chevron-right"></i></a>
            </div>
          </div>
        </a>
        <div class="content p-3">
          <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">Quick guide on business with friends.</a></h4>
          <p class="text-muted mt-2">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p>
          <div class="pt-3 mt-3 border-top d-flex">
          </div>
        </div>
      </div><!--end blog post-->
    </div><!--end col-->
  </div>
  <div class="container col-12 d-flex justify-content-center">
      <div class="card bg-verde mb-3 mt-2 card grow text-center shadow">
        <a href="{{route('projetos.projetos')}}">
          <div class="card-body">
            <h5 class="card-text text-white">Conheça mais projetos</h5>
          </div>
        </a>
      </div>
    </div>
</div>

<!-- Servicos -->
<div class="feature">
  <div class="container">
    <div class="text-center mx-auto wow fadeInUp">
      <div class="section-title mb-4 pb-2 pt-4">
        <h4 class="title mb-4 mt-3 text-white">Serviços</h4>
      </div>
      <div class="accordion accordion-flush d-none pb-4" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Reservas de Salas</b>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.<br><a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              <b>Cursos e Eventos</b>
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.<br><a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              <b>Importação de Bens e Insumos</b>
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.<br><a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              <b>NAGEFI</b>
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.<br><a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
              <b>LATIC</b>
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.<br><a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Saiba mais</a></div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingSix">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
              <b>Concursos</b>
            </button>
          </h2>
          <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.<br><a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Saiba mais</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse d-md-block" id="servicosCollapse">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold ">Reservas de Salas</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p><br>
              <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold ">Cursos e Eventos</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
              <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold ">Importação de Bens e Insumos</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
              <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-4 mt-2 pb-5 mb-md-5">
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold ">NAGEFI</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
              <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.0s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold ">LATIC</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
              <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.2s">
          <div class="card text-dark bg-light mb-3 shadow rounded">
            <div class="card-body">
              <h5 class="card-title font-weight-bold ">Concursos</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
              <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Apoiadas -->
<div class="jumbotron jumbotron-fluid bg-light" style="margin-bottom:0 !important;">
  <div class="container80">
    <div class="section-title mb-4 pb-2">
      <h4 class="title text-center">Instituições Apoiadas</h4>
    </div>
    <div class="row align-items-center">
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/ufsc.png" alt="Apoiada UFSC" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/ifc.png" alt="Apoiada IFSC" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/udesc.png" alt="Apoiada Udesc" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/uffs.png" alt="Apoiada uffs" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/unipampa.png" alt="Apoiada Unipampa" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/ufjf.png" alt="Apoiada ufjf" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/confies.png" alt="Apoiada confies" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/ebserh.png" alt="Apoiada ebserh" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/huufjf.png" alt="hu ufjf" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm apoiadas grow">
        <a href="#">
          <img src="/images/huufsc.png" alt="Apoiada uffs" class="img-fluid img-sublink">
        </a>
      </div>
    </div>
  </div>
</div>
<script>
  function toggleAccordion() {
    const accordion = document.getElementById('accordionFlushExample');

    if (window.innerWidth <= 768) {
      accordion.classList.remove('d-none');
    } else {
      accordion.classList.add('d-none');
    }
  }

  window.addEventListener('resize', toggleAccordion);
  window.addEventListener('load', toggleAccordion);
</script>
@endsection