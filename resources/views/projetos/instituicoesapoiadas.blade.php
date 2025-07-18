@extends('layout.header')
@section('title','Instituições Apoiadas')

@section('conteudo')
<style>
  .institution-section {
    background-color: #f8f9fa;
    padding: 50px 0;
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
    background-color: #06551a;
  }

  .institution-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
  }

  .institution-logo {
    max-height: 80px;
    margin-bottom: 20px;
    object-fit: contain;
  }

  .institution-title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
    border-bottom: 2px solid #e9ecef;
    padding-bottom: 10px;
  }

  .institution-contact {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .institution-contact i {
    color: #06551a;
    font-size: 1.2rem;
    margin-right: 10px;
  }

  .document-link {
    display: inline-flex;
    align-items: center;
    color: #06551a;
    font-weight: 600;
    transition: all 0.2s ease;
    margin-top: 15px;
  }

  .document-link:hover {
    color: #06551a;
    text-decoration: underline;
  }

  .document-link i {
    margin-right: 8px;
  }

  .back-link {
    display: inline-flex;
    align-items: center;
    color: #06551a;
    font-weight: 600;
    margin-bottom: 30px;
  }

  .back-link:hover {
    text-decoration: underline;
    color: #06551a;
  }

  .back-link i {
    margin-right: 8px;
  }

  @media (max-width: 768px) {
    .institution-section {
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
</style>

<section class="institution-section">
  <div class="container">
    <a href="{{ route('projetos.captacao') }}" class="back-link">
      <i class="bi bi-arrow-left"></i> Voltar para a página de Captação
    </a>
    
    <h2 class="section-header">Instituições Apoiadas e Orientações</h2>
    
    <p class="mb-5 lead">Ao clicar nos links abaixo, você pode acessar as orientações específicas de cada instituição para a contratação de projetos, bem como o e-mail de contato para esclarecimentos adicionais. Isso garantirá que seu projeto esteja em conformidade com os requisitos de cada parceiro credenciado.</p>
    
    <div class="row">

      <div class="col-lg-6 mb-4">
        <div class="institution-card">
          <img src="{{ asset('images/ufsc.png') }}" alt="UFSC" class="institution-logo">
          <h3 class="institution-title">Universidade Federal de Santa Catarina (UFSC)</h3>
          <div class="institution-contact">
            <i class="bi bi-envelope-fill"></i>
            <span>scf.cpc@contato.ufsc.br</span>
          </div>
          <a href="https://tramitafacil.ufsc.br/" class="document-link" target="_blank">
            <i class="bi bi-box-arrow-up-right"></i> Orientações para Contratação
          </a>
        </div>
      </div>
      
      <div class="col-lg-6 mb-4">
        <div class="institution-card">
          <img src="{{ asset('images/ifc.png') }}" alt="IFC" class="institution-logo">
          <h3 class="institution-title">Instituto Federal Catarinense (IFC)</h3>
          <div class="institution-contact">
            <i class="bi bi-envelope-fill"></i>
            <span>cecfa@ifc.edu.br</span>
          </div>
          <a href="https://fundacoesdeapoio.ifc.edu.br/orientacoes-fluxos-de-processos-e-documentos-de-apoio/" class="document-link" target="_blank">
            <i class="bi bi-box-arrow-up-right"></i> Orientações para Contratação
          </a>
        </div>
      </div>
      
      <div class="col-lg-6 mb-4">
        <div class="institution-card">
          <img src="{{ asset('images/unipampa.png') }}" alt="UNIPAMPA" class="institution-logo">
          <h3 class="institution-title">Universidade Federal do Pampa (UNIPAMPA)</h3>
          <div class="institution-contact">
            <i class="bi bi-envelope-fill"></i>
            <span>refa.tmp@unipampa.edu.br</span>
          </div>
          <a href="https://sites.unipampa.edu.br/propladi/nucleo-de-relacionamento-com-fundacoes-de-apoio/orientacoes-iniciais/" class="document-link" target="_blank">
            <i class="bi bi-box-arrow-up-right"></i> Orientações para Contratação
          </a>
        </div>
      </div>
      
      <div class="col-lg-6 mb-4">
        <div class="institution-card">
          <img src="{{ asset('images/udesc.png') }}" alt="UDESC" class="institution-logo">
          <h3 class="institution-title">Universidade do Estado de Santa Catarina (UDESC)</h3>
          <div class="institution-contact">
            <i class="bi bi-envelope-fill"></i>
            <span>cipi.reitoria@udesc.br</span>
          </div>
          <a href="https://www.udesc.br/inovacao" class="document-link" target="_blank">
            <i class="bi bi-box-arrow-up-right"></i> Orientações para Contratação
          </a>
        </div>
      </div>
      
      <div class="col-lg-6 mb-4">
        <div class="institution-card">
          <img src="{{ asset('images/uffs.png') }}" alt="UFFS" class="institution-logo">
          <h3 class="institution-title">Universidade Federal da Fronteira Sul (UFFS)</h3>
          <div class="institution-contact">
            <i class="bi bi-envelope-fill"></i>
            <span>sacf@uffs.edu.br</span>
          </div>
          <a href="https://site-antigo-2025.uffs.edu.br/institucional/pro-reitorias/administracao-e-infraestrutura/fundacoes-de-apoio/apresentacao" class="document-link" target="_blank">
            <i class="bi bi-box-arrow-up-right"></i> Orientações para Contratação
          </a>
        </div>
      </div>
      
      <!-- DEPOIS A NICOLY VAI PASSAR ESSES DADOS AQUI -->
      <div class="col-lg-6 mb-4">
        <div class="institution-card">
          <img src="{{ asset('images/huufsc-completo.png') }}" alt="HU-UFSC" class="institution-logo">
          <h3 class="institution-title">Hospital Universitário da UFSC (EHSERH HU - UFSC)</h3>
          <div class="institution-contact">
            <i class="bi bi-envelope-fill"></i>
            <span>contato-hu@fapeu.org.br</span>
          </div>
          <a href="{{ asset('pdfs/orientacoes-hu-ufsc.pdf') }}" class="document-link" target="_blank">
            <i class="bi bi-box-arrow-up-right"></i> Orientações para Contratação
          </a>
        </div>
      </div>
    </div>
    
    <div class="mt-5">
      <p class="text-center">Para mais informações sobre o credenciamento da FAPEU, acesse a seção de 
        <a href="{{ route('transparencia.habilitacaojuridica') }}">Habilitação Jurídica</a> em nosso Portal de Transparência.
      </p>
    </div>
  </div>
</section>
@endsection