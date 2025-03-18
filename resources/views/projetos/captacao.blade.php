@extends('layout.header')
@section('title','FAPEU | Captação de Recursos e Oportunidades para Novos Projetos')

@section('conteudo')
<div class="container">
  <div class="row justify-content-center">
    <h3 class="font-weight-normal text-center mb-5 bg-success-subtle rounded p-2 text-success-emphasis">
      Elabore seu projeto com o apoio da FAPEU!
    </h3>
  </div>
  <p class="text-justify">A área de Captação e Implantação de Projetos da Fundação de Amparo à Pesquisa e Extensão Universitária (Fapeu) espera, você, pesquisador, para elaborar e apresentar propostas e orçamentos de projetos que poderão ser apresentados a diferentes financiadores. O servidor docente ou técnico-administrativo da entidade apoiada que desejar que a FAPEU gerencie um projeto sob a sua coordenação, deverá entrar em contato para iniciar as tratativas com Coordenação de Captação e Implantação da Gerência de Projetos, que é a unidade técnica capacitada e experiente para assessorar na elaboração, envio e acompanhamento de novos projetos a diferentes órgãos financiadores, com foco no orçamento, no plano de trabalho e na organização da documentação necessária à elaboração das propostas.</p>

  <h4>Nossos diferenciais:</h4><br>
  <p><i class="bi bi-arrow-return-right"></i> Mais de 40 anos de experiência;</p>
  <p><i class="bi bi-arrow-return-right"></i> Milhares de projetos executados e aprovados;</p>
  <p><i class="bi bi-arrow-return-right"></i> Experiência para analisar o mérito, escopo, objetivos e metodologias do projeto a ser proposto aos diferentes financiadores;</p>
  <p><i class="bi bi-arrow-return-right"></i> Capacidade para orientar e acompanhar todas as fases do projeto, desde a elaboração, acompanhamento na execução até a aprovação final;</p>
  <p><i class="bi bi-arrow-return-right"></i> Atenção para que documentos obrigatórios e adicionais sejam devidamente preenchidos, conforme as orientações nos modelos disponibilizados pelo financiador, seguindo estritamente ao disposto nas legislações;</p>
  <p><i class="bi bi-arrow-return-right"></i> Preparo e agilidade no fornecimento de respostas a eventuais questionamentos;</p>
  <p><i class="bi bi-arrow-return-right"></i> Atualização e reciclagem constante em relação às exigências de agentes financiadores e órgãos de controle;</p>
  <p><i class="bi bi-arrow-return-right"></i> Sala do Coordenador na sede da Fundação(espaço coworking), adequada a apoiar às atividades da coordenação, com toda infraestrutura tecnológica, equipamentos multimídia, internet de alta velocidade, climatizada, mesa para reuniões, pequenos treinamentos e cursos, água e café;</p>
  <p><i class="bi bi-arrow-return-right"></i> Auditório com equipamentos multimídia, confortável, com ar condicionado e de fácil acesso. O auditório é configurável para o tamanho do seu evento até no máximo 80 pessoas(Aluguel sob consulta).</p>
  <h3 class="my-4 font-weight-bold">Etapas do Projeto na FAPEU</h3>
  <img src="images/etapascaptacao.png" class="img-fluid" alt="Responsive image"><br>
  <p class="mt-5"><b>Venha elaborar e submeter seu projeto com o apoio da equipe FAPEU.</b></p><br>
  <!--
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
                <li class="list-inline-item pt-4 text-justify"> Clique abaixo e saiba mais!</li> <br>
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
    </div> -->
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <div class="row">
    <div class="form">
      <form action="{{ route('captacao.salvar') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputNome">Nome</label>
              <input type="text" class="form-control" id="inputNome" name="nome" required>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" name="Email" required>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputTelefone">Telefone para contato com DDD</label>
              <input type="text" class="form-control" id="inputTelefone" name="Telefone" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputCPF">CPF (Não obrigatório):</label>
              <input type="text" class="form-control" id="inputCPF" name="CPF" required>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputOrgaoDeOrigem">Orgao de Origem</label>
              <input type="text" class="form-control" id="inputOrgaoDeOrigem" name="OrgaoDeOrigem" required>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputFuncaoQueOcupa">Funçao que Ocupa</label>
              <input type="text" class="form-control" id="inputFuncaoQueOcupa" name="FuncaoQueOcupa" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputCentroAcademico">Centro Acadêmico</label>
              <input type="text" class="form-control" id="inputCentroAcademico" name="CentroAcademico" required>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputDepartamentoLaboratorio">Departamento Laboratório</label>
              <input type="text" class="form-control" id="inputDepartamentoLaboratorio" name="DepartamentoLaboratorio" required>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="font-weight-bold" for="inputAreaInteresse">Informe as Áreas de Interesse</label>
              <input type="text" class="form-control" id="inputAreaInteresse" name="AreaInteresse" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group mt-4">
              <button type="submit" class="btn btn-primary px-5" style="color: #fff;">Enviar</button>
            </div>
          </div>
        </div>
      </form>
      <div class="text-center rounded-pill bg-success-subtle text-success-emphasis pb-3 pt-4 mt-5">
        <p>Venha nos visitar ou agende um horário que iremos até você!</p>
        <p class="font-weight-bold">Nosso contato: projetos@fapeu.org.br (48) 3331-7495 ou 3331-7411</p>
      </div>
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    </div>
  </div>
</div>
@endsection