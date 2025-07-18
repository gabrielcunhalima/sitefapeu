@extends('layout.header')
@section('title',' Programa de Inclusão')
@section('conteudo')
<div class="bg-light pb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-justify">
        <div class="mb-4 text-center">
          <img src="images/logo3.png" alt="Logo FAPEU" class="img-fluid" style="max-height: 150px;">
        </div>
        <h1 class="display-4 fw-bold text-success mb-3">Programa FAPEU de Inclusão</h1>
        <p class="lead text-secondary mb-4">
          Acreditamos que um mercado de trabalho inclusivo é fundamental. Na FAPEU, estamos comprometidos em oferecer oportunidades e qualificação para todos, incluindo Pessoas com Deficiência.
        </p>
        <p class="fs-5 text-secondary">
          O mercado busca profissionais qualificados e com vivência. Nosso programa de inclusão visa proporcionar essa experiência e capacitação para o seu desenvolvimento profissional.
          Entendemos que a inclusão social é uma responsabilidade coletiva e estamos abrindo portas para talentos diversos.
        </p>
        <p class="fs-5 text-secondary">
          Valorizamos a singularidade de cada indivíduo e cremos no potencial do crescimento humano através da troca de experiências.
          <br><br>
          Venha fazer parte da família FAPEU e contribua para um ambiente mais rico e igualitário!
        </p>
        <p class="fw-bold text-success fs-5">Acesse nosso Portal de Oportunidades:</p>
        <div class="mt-4 text-center">
          <a href="http://150.162.78.45:8080/Curriculo/" target="_blank" class="btn btn-success btn-lg rounded-pill px-4 py-2">
            <i class="bi bi-link-45deg me-2"></i> Cadastre-se Aqui
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .btn-success {
    background-color: #198754 !important;
    border-color: #198754 !important;
  }

  .btn-success:hover {
    background-color: #135e3d !important;
    border-color: #135e3d !important;
  }
</style>
@endsection