@extends('layout.header')
@section('title',' Captação e Implantação de Projetos')

@section('conteudo')
<style>
  .captacao-section {
    padding: 30px 0 40px;
    background-color: #f8f9fa;
  }

  .section-header {
    position: relative;
    margin-bottom: 40px;
    font-weight: 700;
    color: #333;
  }

  .section-header:after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 0;
    width: 60px;
    height: 4px;
    background-color: #06551A;
  }

  .welcome-text {
    font-size: 2.2rem;
    font-weight: 300;
    color: #06551A;
    margin-bottom: 30px;
    text-align: center;
  }

  .intro-text {
    font-size: 1rem;
    line-height: 1.8;
    color: #555;
    margin-bottom: 40px;
    text-align: justify;
  }

  .feature-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    height: 90%;
  }

  .feature-icon {
    color: #06551A;
    font-size: 2.5rem;
    margin-bottom: 20px;
  }

  .feature-title {
    color: #333;
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .feature-list {
    padding-left: 0;
    list-style-type: none;
  }

  .feature-list li {
    margin-bottom: 10px;
    position: relative;
    padding-left: 28px;
    color: #555;
    font-size: 1.05rem;
  }

  .feature-list li:before {
    content: "\F26A";
    font-family: "bootstrap-icons";
    color: #06551A;
    position: absolute;
    left: 0;
    top: 2px;
  }

  .process-img {
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    max-width: 100%;
    height: auto;
  }

  .contact-banner {
    background: linear-gradient(135deg, #33874f 0%, #06551A 100%);
    padding: 40px;
    border-radius: 12px;
    margin: 40px 0;
    color: #fff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .contact-banner h3 {
    font-weight: 600;
    margin-bottom: 20px;
  }

  .contact-banner p {
    font-size: 1.2rem;
    opacity: 0.9;
  }

  .form-container {
    background-color: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
    margin-bottom: 50px;
  }

  .form-title {
    font-size: 1.6rem;
    color: #333;
    margin-bottom: 30px;
    text-align: center;
  }

  .personalizado {
    border-radius: 8px;
    padding: 12px 15px;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
  }

  .personalizado:focus {
    border-color: #06551A;
    box-shadow: 0 0 0 0.2rem rgba(6, 85, 26, 0.25);
  }

  .form-label {
    font-weight: 600;
    color: #444;
    margin-bottom: 8px;
  }

  .action-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .action-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  }

  .action-card .card-title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
  }

  .action-card .card-text {
    flex-grow: 1;
    color: #555;
    font-size: 1.05rem;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .action-card .btn {
    align-self: flex-start;
  }

  @media (max-width: 768px) {
    .captacao-section {
      padding: 50px 0 30px;
    }

    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }

    .welcome-text {
      font-size: 1.8rem;
    }

    .form-container {
      padding: 30px 20px;
    }
  }
</style>

<section class="captacao-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <!-- <h3 class="welcome-text">Elabore seu projeto com o apoio da FAPEU!</h3> -->

        <div class="lead">
          <p>A área de Captação e Implantação de Projetos da Fundação de Amparo à Pesquisa e Extensão Universitária (FAPEU) está à disposição de pesquisadores, docentes e técnicos-administrativos das instituições apoiadas para auxiliar na elaboração de projetos, na submissão de propostas e orçamentos a diferentes fontes de fomento, bem como nos trâmites formais de contratação.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="container">
  <div class="row">
    <h2 class="section-header">Nossos diferenciais</h2>
    <div class="col-lg-6">
      <div class="feature-card">
        <div class="feature-icon">
          <i class="bi bi-trophy"></i>
        </div>
        <h3 class="feature-title">Experiência e Excelência</h3>
        <ul class="feature-list">
          <li>Mais de 40 anos de experiência na gestão de projetos de ensino, pesquisa e extensão</li>
          <li>Milhares de projetos executados e aprovados, com alto índice de sucesso</li>
          <li>Capacidade técnica para análise e suporte no gerenciamento administrativo e operacional</li>
          <li>Acompanhamento completo, desde a elaboração até a prestação de contas</li>
        </ul>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="feature-card">
        <div class="feature-icon">
          <i class="bi bi-gear"></i>
        </div>
        <h3 class="feature-title">Suporte Completo</h3>
        <ul class="feature-list">
          <li>Rigor documental, com atenção às exigências legais e aos modelos dos financiadores</li>
          <li>Agilidade e precisão no atendimento a questionamentos e solicitações</li><br>
          <li>Equipe atualizada com normas dos órgãos de controle e financiamento</li><br>
          <li>Execução eficiente conforme as exigências dos financiadores</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="container mt-5">
  <div class="row">
    <h2 class="section-header">Mais Informações</h2>
    
    <div class="col-md-4">
      <div class="action-card">
        <h3 class="card-title">Instituições Apoiadas</h3>
        <p class="card-text">A FAPEU é credenciada a diversas universidades e hospitais universitários. Acesse as orientações específicas para cada instituição apoiada.</p>
        <a href="{{ route('projetos.instituicoesapoiadas') }}" class="btn btn-success">Ver orientações</a>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="action-card">
        <h3 class="card-title">Cálculo de Ressarcimento</h3>
        <p class="card-text">Obtenha informações sobre o cálculo de ressarcimento para a gestão administrativa e financeira do seu projeto pela FAPEU.</p>
        <a href="{{ route('projetos.calculoressarcimento') }}" class="btn btn-success">Calcular ressarcimento</a>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="action-card">
        <h3 class="card-title">Contato e Agendamento</h3>
        <p class="card-text">Agende uma reunião com nossa equipe para discutir o seu projeto ou obtenha informações de contato direto.</p>
        <a href="{{ route('projetos.orientacoescontato') }}" class="btn btn-success">Agendar reunião</a>
      </div>
    </div>
  </div>
</section>

<!-- <section class="container">
  <h2 class="section-header mt-5">Etapas do Projeto na FAPEU</h2>
  <div class="text-center mt-4">
    <img src="images/etapascaptacao.png" class="img-fluid process-img" alt="Etapas do Projeto na FAPEU">
  </div>
</section> -->

<!-- <section class="container" id="form-contact">
  <div class="form-container mt-5">
    <h3 class="form-title">Formulário de Contato</h3>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('captacao.salvar') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="inputNome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="inputNome" name="nome" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="inputEmail" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="inputEmail" name="Email" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="inputTelefone" class="form-label">Telefone para contato com DDD</label>
          <input type="text" class="form-control" id="inputTelefone" name="Telefone" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="inputCPF" class="form-label">CPF (Não obrigatório)</label>
          <input type="text" class="form-control" id="inputCPF" name="CPF">
        </div>
        <div class="col-md-4 mb-3">
          <label for="inputOrgaoDeOrigem" class="form-label">Órgão de Origem</label>
          <input type="text" class="form-control" id="inputOrgaoDeOrigem" name="OrgaoDeOrigem" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="inputFuncaoQueOcupa" class="form-label">Função que Ocupa</label>
          <input type="text" class="form-control" id="inputFuncaoQueOcupa" name="FuncaoQueOcupa" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="inputCentroAcademico" class="form-label">Centro Acadêmico</label>
          <input type="text" class="form-control" id="inputCentroAcademico" name="CentroAcademico" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="inputDepartamentoLaboratorio" class="form-label">Departamento/Laboratório</label>
          <input type="text" class="form-control" id="inputDepartamentoLaboratorio" name="DepartamentoLaboratorio" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="inputAreaInteresse" class="form-label">Áreas de Interesse</label>
          <input type="text" class="form-control" id="inputAreaInteresse" name="AreaInteresse" required>
        </div>
      </div>

      <div class="text-end mt-4">
        <button type="submit" class="fapeu-btn">
          <i class="bi bi-send me-2"></i>Enviar
        </button>
      </div>
    </form>

    @if($errors->any())
    <div class="alert alert-danger mt-4">
      <ul class="mb-0">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
</section> -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const formLink = document.querySelector('a[href="#form-contact"]');

    if (formLink) {
      formLink.addEventListener('click', function(e) {
        e.preventDefault();

        const formElement = document.getElementById('form-contact');

        if (formElement) {
          formElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    }
  });
</script>
@endsection