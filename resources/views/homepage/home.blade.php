@extends('layout.headerhome')
@section('title','FAPEU')
@section('conteudo')
<div class="jumbotron jumbotron-fluid bg-transparentehome text-white my-0 py-2 text-center">
  <p class="container transformando" style="font-family:'Petit Formal Script';font-weight:bold; font-size:3.6em;">Transformando ideias em ações!</p>
</div>
<!-- 3 menus principais -->
<div class="container">
  <div class="row align-items-center mb-2">
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
      <div class="card bg-light mb-3 card w-75 text-center grow shadow" style="width: 18rem;">
        <a href="{{route('projetos.menuprojetos')}}">
          <div class="card-body">
            <p class="card-text text-verde font-weight-bold">Gestão de Projetos</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
      <div class="card bg-light mb-3 card w-75 text-center grow shadow" style="width: 18rem;">
        <a href="{{route('fornecedor.menulicitacao')}}">
          <div class="card-body">
            <p class="card-text text-verde font-weight-bold">Licitações e Prestadores de Serviço</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
      <div class="card bg-light mb-3 card w-75 text-center grow shadow" style="width: 18rem;">
        <a href="{{route('transparencia.menutransparencia')}}">
          <div class="card-body">
            <p class="card-text text-verde font-weight-bold">Transparência</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- <div id="carouselExampleIndicators" class="carousel slide container mb-4" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach($carousel as $index => $post)
    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
    @endforeach
  </ol>
  <div class="carousel-inner rounded-lg">
    @foreach($carousel as $index => $post)
    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
      <img class="d-block w-100" src="../images/noticias/{{ $post->imagem }}" alt="{{ $post->titulo }}">
      <div class="carousel-caption bg-transparente rounded-right" style="left:0;bottom:45px;">
        <h4 class="text-justify text-white px-3 font-weight-bolder">{{Str::upper( $post->titulo )}}</h4>
        <p class="text-justify text-white px-3 margemtelapequenaesquerda">{{ Str::limit($post->corpo, 150) }}</p>
      </div>
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon bg-preto rounded p-4" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon bg-preto rounded p-4" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div> -->
<div class="row">
  <div class="col-md-12 ">
    <div class="card mb-5 border-0">
      <div class="card-body border-0">
        <div class="d-flex justify-content-center container">
          <h3 class="card-title font-weight-bold p-5 bg-light rounded text-center container " style="color: #099072;">Confira os projetos apoiados pela FAPEU
          </h3>
        </div>
        <!-- Projetos em destaque - Carousel -->
        <section class="section" id="blog">
          <div class="container">
            <div id="projectCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-12">
                      <div class="card">
                        <img src="https://www.bootdey.com/image/350x280/FFB6C1/000000" class="card-img-top rounded-left" alt="">
                        <div class="card-body bg-cinza pb-5 bg-cinza pb-4">
                          <h5 class="card-title" style="word-wrap: break-word; white-space: normal;">
                            <a href="#">Prevent 75% of visitors from google analytics</a>
                          </h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                          <a href="#" class="btn btn-primary">Conheça o projeto</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                      <div class="card">
                        <img src="https://www.bootdey.com/image/350x280/87CEFA/000000" class="card-img-top" alt="">
                        <div class="card-body bg-cinza pb-5">
                          <h5 class="card-title"><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                          <a href="#" class="btn btn-primary">Conheça o projeto</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                      <div class="card">
                        <img src="https://www.bootdey.com/image/350x280/FF7F50/000000" class="card-img-top" alt="">
                        <div class="card-body bg-cinza pb-5">
                          <h5 class="card-title"><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                          <a href="#" class="btn btn-primary">Conheça o projeto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Adicione mais itens de carousel aqui -->
                <div class="carousel-item">
                  <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-12">
                      <div class="card">
                        <img src="https://www.bootdey.com/image/350x280/32CD32/000000" class="card-img-top" alt="">
                        <div class="card-body bg-cinza pb-5">
                          <h5 class="card-title"><a href="#">Another Project Example</a></h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                          <a href="#" class="btn btn-primary">Conheça o projeto</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                      <div class="card">
                        <img src="https://www.bootdey.com/image/350x280/FF6347/000000" class="card-img-top" alt="">
                        <div class="card-body bg-cinza pb-5">
                          <h5 class="card-title"><a href="#">Another Project Example</a></h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                          <a href="#" class="btn btn-primary">Conheça o projeto</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                      <div class="card">
                        <img src="https://www.bootdey.com/image/350x280/4682B4/000000" class="card-img-top" alt="">
                        <div class="card-body bg-cinza pb-5">
                          <h5 class="card-title"><a href="#">Another Cool Project</a></h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                          <a href="#" class="btn btn-primary">Conheça o projeto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" style="width:12.5%" href="#projectCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-transparente rounded" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" style="width:12.5%" href="#projectCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-transparente rounded" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<div class="feature">
  <div class="container">
    <div class="text-center mx-auto wow fadeInUp">
      <h3 class="text-center text-white pb-5 pt-2 mt-auto font-weight-bold mb-3">Serviços</h3>
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
      <!-- <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner rounded-lg">
          <div class="carousel-item active bg-light pt-5">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="card text-dark bg-light mb-3 rounded border-0">
                <div class="card-body">
                  <h3 class="card-title font-weight-bold">Reservas de Salas</h3><br>
                  <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-light pt-5">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="card text-dark bg-light mb-3 rounded border-0">
                <div class="card-body">
                  <h3 class="card-title font-weight-bold">Cursos e Eventos</h3><br>
                  <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-light pt-5">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="card text-dark bg-light mb-3 rounded border-0">
                <div class="card-body">
                  <h3 class="card-title font-weight-bold">NAGEFI</h3><br>
                  <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-light pt-5">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="card text-dark bg-light mb-3 rounded border-0">
                <div class="card-body">
                  <h3 class="card-title font-weight-bold">LATIC</h3><br>
                  <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-light pt-5">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="card text-dark bg-light mb-3 rounded border-0">
                <div class="card-body">
                  <h3 class="card-title font-weight-bold">Concursos</h3><br>
                  <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-light pt-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="card text-dark bg-light mb-3 rounded border-0">
                <div class="card-body">
                  <h3 class="card-title font-weight-bold">Importação de Bens e Insumos</h3>
                  <a class="btn btn-success rounded-pill py-2 px-4 mt-auto bg-verdeescuro" href="#">Ver mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div> -->
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

<!-- Seção de apoiadas -->
<div class="jumbotron jumbotron-fluid bg-light" style="margin-bottom:0 !important;">
  <div class="container80">
    <div class='mx-0'>
      <h3 class="text-center text-verde2 pb-3 mt-auto font-weight-bold ">Instituições Apoiadas</h3>
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
<!-- <div class="card mt-4">
  <div class="card-body text-center ">
    <h2>Apoiadas</h2> <br>
    <div class="row">
      <div class="col-md-3">
        <a href="#">
          <img src="/images/ufsc.png" alt="Apoiada UFSC" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-md-3">
        <a href="#">
          <img src="/images/redimensionada/ifsc.png" alt="Apoiada IFSC" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-md-3">
        <a href="#">
          <img src="/images/redimensionada/unipampa.jpeg" alt="Apoiada Unipampa" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-md-3">
        <a href="#">
          <img src="/images/redimensionada/udesc.png" alt="Apoiada Udesc" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-md-3">
        <a href="#">
          <img src="/images/redimensionada/ufjf.png" alt="Apoiada ufjf" class="img-fluid img-sublink">
        </a>
      </div>
    </div>
  </div>
</div> -->
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