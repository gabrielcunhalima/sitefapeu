@extends('layout.header')
@section('title','Captação de Recursos e Oportunidades')

@section('conteudo')
<div class="pricing2 py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <br> 
        <h4 class="text-white    font-weight-normal text-center ">
         Elabore seu projeto com o apoio da FAPEU!
        </h4> <br><br>
      </div>
    </div>
    
    <!-- Wrapper para centralização do card -->
    <div class="row justify-content-center" style="min-height: 50vh;">
      <div class="col-lg-6 col-md-7 d-flex justify-content-center align-items-center">
        <div class="card card-shadow border-0 mb-4 shadow p-3 mb-5 bg-white rounded">
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
                A área de Captação e Implantação de Projetos da Fundação de Amparo à Pesquisa e Extensão Universitária (Fapeu) 
                espera, você, pesquisador, para elaborar e apresentar propostas e orçamentos de projetos que poderão ser 
                apresentados a diferentes financiadores.
              </li>
              <div class="text-center">
              <li class="list-inline-item py-2 text-justify"> Clique abaixo para acessar!</li> <br>
            </ul>
            <div class="text-center ">
              <a class="btn btn-success btn-md rounded-pill text-white" href="#f1">
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
