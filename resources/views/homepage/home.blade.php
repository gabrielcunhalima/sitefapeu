@extends('layout.header')
@section('title','FAPEU Novo')
@section('conteudo')

<!-- Faixa de sublinks -->


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

<div class="container-fluid feature bg-light py-5">
  <div class="container py-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
      <h2>Serviços</h2>
      <p class="mb-0 "></p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">

          <div class="card-body">
            <h5 class="card-title font-weight-bold">Reservas de Salas</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
        <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Cursos e Eventos</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
        <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Importação de Bens e Insumos</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p>
            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-4 mt-2">
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
        <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">NAGEFI</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.0s">
        <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">LATIC</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.2s">
        <div class="card text-dark bg-light mb-3" style="background-color: #f0f2f2;">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Concursos</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...</p> <br>
            <a class="btn btn-success rounded-pill py-2 px-4 mt-auto" href="#" style="background-color: #146551;">Ver mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Seção de apoiadas -->
<div class="jumbotron jumbotron-fluid rounded shadow5">
  <div class="container80">
  <div class='mx-0'>
    <h3 class="text-center bg-white rounded-pill py-2 px-4 mt-auto shadow-sm">Instituições Apoiadas</h3>
  </div>
    <div class="row align-items-center mx-5">
      <div class="col-sm">
        <a href="#">
          <img src="/images/ufsc.png" alt="Apoiada UFSC" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm text-center">
        <a href="#">
          <img src="/images/ifsc.png" alt="Apoiada IFSC" class="img-fluid img-sublink" style="max-height:13vh !important;">
        </a>
      </div>
      <div class="col-sm">
        <a href="#">
          <img src="/images/udesc.png" alt="Apoiada Udesc" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm">
        <a href="#">
          <img src="/images/uffs.png" alt="Apoiada uffs" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm">
        <a href="#">
          <img src="/images/unipampa.png" alt="Apoiada Unipampa" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm">
        <a href="#">
          <img src="/images/confies.png" alt="Apoiada confies" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm">
        <a href="#">
          <img src="/images/ufjf.png" alt="Apoiada ufjf" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm">
        <a href="#">
          <img src="/images/ebserh.png" alt="Apoiada ebserh" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm">
        <a href="#">
          <img src="/images/huufjf.png" alt="hu ufjf" class="img-fluid img-sublink">
        </a>
      </div>
      <div class="col-sm">
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

@endsection