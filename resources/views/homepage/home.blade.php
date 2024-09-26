@extends('layout.header')
@section('title','FAPEU Novo')
@section('conteudo')

<!-- Faixa de sublinks -->

<Style>
    .img-sublink {
    max-width: 60px;  /* ajuste o valor conforme necessário */
    height: auto;
    margin: auto;
}

.img-sublink {
        max-width: 50px;
        height: auto;
        margin: auto;
    }

    /* Ajuste específico para a Unipampa */
    .img-sublink[src="/images/redimensionada/unipampa.jpeg"] {
        max-width: 120px; /* Ajuste o valor conforme necessário */
    }

    /* Ajuste específico para a Udesc */
    .img-sublink[src="/images/redimensionada/udesc.png"] {
        max-width: 90px; /* Ajuste o valor conforme necessário */
    }

    /* Ajuste específico para a ufjf */
    .img-sublink[src="/images/redimensionada/ufjf.png"] {
        max-width: 90px; /* Ajuste o valor conforme necessário */
    }
</style>

<!-- Carrossel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Segundo Slide" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<!-- Seção de apoiadas -->
<div class="card mt-4">
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
</div>

@endsection
