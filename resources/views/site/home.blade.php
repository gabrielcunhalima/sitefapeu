@extends('site.master.layout')
@section('content')




<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Fapeu</h1>
                @if (date('H')>= 0 && date('H') <= 12)
                    <p> Bom dia!</p>
                @elseif (date('H')>= 13 && date('H') <= 18)
                    <p> Boa tarde!</p>
                @else
                    <p> Boa noite!</p>
                @endif
                <p>FAPEU é uma organização dedicada ao desenvolvimento de projetos e à gestão de recursos para promover a educação e o bem-estar social.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Outra manchete</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver mais</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p> outra manchete </p>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
      </div>

      <div class="container marketing">
        <!-- Três colunas de texto, abaixo do carousel -->
         
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h2 class="servicos-titulo">Serviços</h2>
                    <h1 class="display-4 mb-4"></h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>

                <!-- Primeira linha com 3 colunas -->
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item d-flex flex-column p-4 pt-0 h-100">
                            <div class="feature-icon p-4 mb-4">
                                <i class="far fa-handshake fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Reservas de Salas</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4 mt-auto" href="#">Ver mais</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item d-flex flex-column p-4 pt-0 h-100">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-dollar-sign fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Cursos e Eventos</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4 mt-auto" href="#">Ver mais</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item d-flex flex-column p-4 pt-0 h-100">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-bullseye fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Importação de Bens e Insumos</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4 mt-auto" href="#">Ver mais</a>
                        </div>
                    </div>
                </div>

                <!-- Segunda linha com 3 colunas, com menor espaçamento -->
                <div class="row g-4 mt-2">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item d-flex flex-column p-4 pt-0 h-100">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-headphones fa-3x"></i>
                            </div>
                            <h4 class="mb-4">NAGEFI</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4 mt-auto" href="#">Ver mais</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.0s">
                        <div class="feature-item d-flex flex-column p-4 pt-0 h-100">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-graduation-cap fa-3x"></i>
                            </div>
                            <h4 class="mb-4">LATIC</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4 mt-auto" href="#">Ver mais</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="feature-item d-flex flex-column p-4 pt-0 h-100">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-gavel fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Concursos</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4 mt-auto" href="#">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FEATUREZINHAS *-* -->
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Vagas Disponíveis <span class="text-muted"> </span></h2>
            <p class="lead">Confira as oportunidades perfeita para você!</p>
          </div>
          
        </div>

       
        </div>


<!-- Seção "Apoiadas" -->
<hr class="featurette-divider">

<!-- Seção "Apoiadas" -->
<div class="row featurette apoiadas-section">
  <div class="col-md-7">
    <h2 class="featurette-heading">Apoiadas <span class="text-muted"></span></h2>
    <p class="lead">Confira as iniciativas que estamos apoiando!</p>
  </div>
</div>

<hr class="featurette-divider">





        <!-- /FIM DAS FEATUREZINHAS *-* -->

      </div><!-- /.container -->
@endsection
