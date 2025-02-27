@extends('layout.header')
@section('title','FAPEU | Captação de Recursos e Oportunidades')

@section('conteudo')
<div class="pricing2 py-5">
  <div class="container">
    <div class="row justify-content-center">
      <br>
      <h4 class="font-weight-normal text-center">
        Elabore seu projeto com o apoio da FAPEU!
      </h4> <br><br>
    </div>

    <!-- Wrapper para centralização do card -->
    <div class="row justify-content-center" style="min-height: 50vh;">
      <div class="col-lg-6 col-md-7 d-flex justify-content-center align-items-center">
        <div class="card card-shadow border-0 mb-4 shadow p-3 mb-5 bg-creme rounded">
          <div class="p-4">
            <div class="d-flex align-items-center">
              <div class="plan-text">
                <h4 class="mb-0"></h4>
                <h6 class="subtitle text-justify">NOVAS OPORTUNIDADES!</h6>
              </div>
            </div>

            <div style="width: 210px; height: 4px; background-color: #009270; margin-right: 20px; margin-bottom: 10px;"></div>

            <ul class="list-inline mb-3">
              <li class="list-inline-item py-2 text-justify">
                A FAPEU convida você, pesquisador, a transformar suas ideias em realidade!
                Nossa área de Captação e Implantação de Projetos está pronta para orientar e apoiar a elaboração de propostas e orçamentos para projetos, que podem ser submetidos a diversas fontes de financiamento.
                Por que solicitar o apoio da FAPEU?<br>
                <br>- Suporte especializado na construção do seu projeto;
                <br>- Acesso a oportunidades de financiamento;
                <br>- Parceria estratégica para o sucesso da sua pesquisa;<br>
                

              </li>
              <div class="text-center">
                <li class="list-inline-item py-2 text-justify"> Clique abaixo e saiba mais!</li> <br>
            </ul>
            <div class="text-center ">
              <a class="btn btn-success btn-md rounded-pill text-white" href="https://fap6.fapeu.org.br/scripts/fapeusite.pl/swfwfap199" target="_blank">
                Oportunidade para projetos
              </a>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection