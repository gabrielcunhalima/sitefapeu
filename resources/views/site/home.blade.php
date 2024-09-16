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
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver mais </a></p>
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
        <!-- Seção de Serviços -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h2 class="servicos-titulo">Serviços</h2>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>

            <!-- Primeira linha de cards -->
            <div class="row g-4">
                <!-- Exemplo de card -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
                   
                        <div class="card-body">
                            <h5 class="card-title">Reservas de Salas</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
                        </div>
                    </div>
                </div>
                <!-- Repita para os outros cards -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
                    
                        <div class="card-body">
                            <h5 class="card-title">Cursos e Eventos</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
       
                        <div class="card-body">
                        <h5 class="card-title">Importação de Bens e Insumos</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Segunda linha de cards -->
            <div class="row g-4 mt-2">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
                  
                        <div class="card-body">
                            <h5 class="card-title">NAGEFI</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
                      
                        <div class="card-body">
                            <h5 class="card-title">LATIC</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
                      
                        <div class="card-body">
                            <h5 class="card-title">Concursos</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
                            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Estilo do card da seção Serviços */
.card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombras sutis */
    transition: box-shadow 0.3s ease; /* Transição suave para a sombra */
    background-color: #f0f2f2; /* Cor de fundo dos cards */
    border: none; /* Remove borda do card */
    padding: 10px; /* Ajusta o padding para um tamanho menor */
    height: 270px; /* Define uma altura fixa para os cards */
}

.card-body {
    font-size: 14px; /* Reduz o tamanho do texto */
}

.card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25); /* Sombra mais intensa ao passar o mouse */
}

.card-title {
    font-size: 16px; /* Reduz o tamanho do título */
}

/* Ajuste para os títulos */
.card-header, .card-title {
    font-size: 16px; /* Tamanho reduzido do título */
}

/* Ajustes gerais */
.row.g-4 .col-md-6 .card {
    min-height: 250px; /* Altura mínima para manter o layout consistente */
}

</style>

  

        <!-- FEATUREZINHAS *-* -->
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Vagas Disponíveis <span class="text-muted"> </span></h2>
            <p class="lead">Confira as oportunidades perfeita para você!</p>
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
