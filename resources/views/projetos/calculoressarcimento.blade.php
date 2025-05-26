@extends('layout.header')
@section('title',' Cálculo de Ressarcimento')

@section('conteudo')
<style>
  .resource-section {
    padding: 50px 0;
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

  .form-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
  }

  .form-title {
    font-size: 1.6rem;
    color: #333;
    margin-bottom: 30px;
    text-align: center;
    font-weight: 600;
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

  .form-section {
    margin-bottom: 30px;
  }

  .back-link {
    display: inline-flex;
    align-items: center;
    color: #06551A;
    font-weight: 600;
    margin-bottom: 30px;
  }

  .back-link:hover {
    text-decoration: underline;
    color: #054615;
  }

  .back-link i {
    margin-right: 8px;
  }

  .info-card {
    background-color: #e8f5e9;
    border-left: 4px solid #06551A;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 30px;
  }

  .info-card p {
    margin-bottom: 0;
    color: #555;
  }

  @media (max-width: 768px) {
    .resource-section {
      padding: 40px 0;
    }

    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }
  }

  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type="number"] {
    -moz-appearance: textfield;
  }
</style>

<section class="resource-section">
  <div class="container">
    <a href="{{ route('projetos.captacao') }}" class="back-link">
      <i class="bi bi-arrow-left"></i> Voltar para a página de Captação
    </a>

    <h2 class="section-header">Cálculo de Ressarcimento</h2>

    <div class="info-card">
      <p>Caso deseje contratar a FAPEU para a gestão administrativa e financeira do seu projeto, podemos calcular o ressarcimento pelos nossos serviços de gerenciamento. Para isso, basta preencher os campos abaixo com as informações solicitadas. Nossa equipe realizará o cálculo de acordo com as diretrizes estabelecidas.</p>
    </div>

    <div class="form-container">
      <h3 class="form-title">Formulário de Solicitação de Cálculo</h3>

      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      <form action="{{ route('calcular.ressarcimento') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nome_projeto" class="form-label">Nome do projeto</label>
            <input type="text" class="form-control" id="nome_projeto" name="nome_projeto" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="nome_coordenador" class="form-label">Nome completo do coordenador</label>
            <input type="text" class="form-control" id="nome_coordenador" name="nome_coordenador" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="vigencia_meses" class="form-label">Vigência do projeto (em meses)</label>
            <input type="number" class="form-control" id="vigencia_meses" name="vigencia_meses" min="1" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="nome_financiador" class="form-label">Nome do financiador</label>
            <input type="text" class="form-control" id="nome_financiador" name="nome_financiador" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="num_parcelas" class="form-label">Número de parcelas previstas</label>
            <input type="number" class="form-control" id="num_parcelas" name="num_parcelas" min="1" required style="text-decoration:none;">
          </div>
          <div class="col-md-6 mb-3">
            <label for="planilha_orcamentaria" class="form-label">Planilha orçamentária do projeto com quantitativos</label>
            <input type="file" class="form-control" id="planilha_orcamentaria" name="planilha_orcamentaria" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nome_solicitante" class="form-label">Nome do solicitante</label>
            <input type="text" class="form-control" id="nome_solicitante" name="nome_solicitante" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="contato" class="form-label">Informações para contato (e-mail e/ou telefone)</label>
            <input type="text" class="form-control" id="contato" name="contato" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="instituicao_id" class="form-label">Instituição credenciada à qual o coordenador está vinculado</label>
          <select class="form-control" id="instituicao_id" name="instituicao_id" required>
            <option value="" selected disabled>Selecione uma instituição</option>
            <option value="1">Universidade Federal de Santa Catarina (UFSC)</option>
            <option value="2">Universidade Federal da Fronteira Sul (UFFS)</option>
            <option value="3">Instituto Federal Catarinense (IFC)</option>
            <option value="4">Universidade do Estado de Santa Catarina (UDESC)</option>
            <option value="5">Universidade Federal do Pampa (UNIPAMPA)</option>
            <option value="6">Hospital Universitário da UFSC (EBSERH HU-UFSC)</option>
          </select>
        </div>

        <div class="my-3 text-center">
          <x-turnstile data-theme="light"/>
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-success btn-lg">
            <i class="bi bi-calculator me-2"></i>Solicitar cálculo de ressarcimento
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

    <div class="text-center mt-4">
      <p class="text-muted">Após o preenchimento, nossa equipe entrará em contato com você para finalizar o cálculo e esclarecer quaisquer dúvidas.</p>
      <p class="text-muted">Para outras informações sobre nossos serviços, entre em contato pelo e-mail <strong>projetos@fapeu.org.br</strong> ou telefone <strong>(48) 3331-7400</strong>.</p>
    </div>
  </div>
</section>
@endsection