@extends('layout.header')
@section('title', ' Gestão de Projetos')
@section('conteudo')
<style>
  .projeto-section {
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

  .info-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    padding-bottom: 0;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
  }

  .info-icon {
    font-size: 2.5rem;
    color: #06551A;
    margin-bottom: 20px;
  }

  .info-title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
    border-bottom: 2px solid #e9ecef;
    padding-bottom: 10px;
  }

  .contact-banner {
    background: linear-gradient(135deg, #33874f 0%, #06551A 100%);
    padding: 30px;
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
    font-size: 1.1rem;
    opacity: 0.9;
    margin-bottom: 0;
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
  }

  .feature-list li:before {
    content: "\F26A";
    font-family: "bootstrap-icons";
    color: #06551A;
    position: absolute;
    left: 0;
    top: 2px;
  }

  @media (max-width: 768px) {
    .projeto-section {
      padding: 30px 0;
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

<section class="projeto-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        
        <div class="contact-banner">
          <div class="row align-items-center">
            <div class="col-md-9 mb-4">
              <h3><i class="bi bi-envelope-fill me-2"></i>Entre em contato</h3>
              <p>Para iniciar as tratativas do seu projeto ou obter mais informações, entre em contato com o Setor de Captação e Implantação de Projetos.</p>
            </div>
            <div class="col-md-3 text-md-end text-center mt-3 mt-md-0">
              <span class="bg-light py-3 px-5 rounded-pill text-verde"><b>projetos@fapeu.org.br</b></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-12">
        <div class="info-card">
          <p>O processo de gestão de projetos pela FAPEU compreende o gerenciamento administrativo e financeiro em todas as etapas, com soluções adequadas às especificidades e permanente diálogo com os coordenadores.</p>
          
          <p>Uma equipe técnica capacitada, constantemente incentivada à atualização, comprometida com a missão da Fundação e qualificada em gestão financeira e de pessoal, em compras, licitações, importações, contabilidade e prestação de contas, oferece segurança, transparência e agilidade para execução de projetos.</p>
          
          <p>No processo de gestão de projetos, constituem-se em diferencial os serviços de apoio e assessoria oferecidos pela FAPEU:</p>
        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-lg-6 mb-4">
        <div class="info-card">
          <div class="info-icon">
            <i class="bi bi-lightbulb"></i>
          </div>
          <h3 class="info-title">Captação e Implantação de Projetos</h3>
          <ul class="feature-list">
            <li>Assessoria no planejamento e elaboração de projetos</li>
            <li>Assessoria na elaboração de orçamentos e propostas</li>
            <li>Acompanhamento de negociações e análises de propostas</li>
            <li>Assessoria jurídica</li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-6 mb-4">
        <div class="info-card">
          <div class="info-icon">
            <i class="bi bi-kanban"></i>
          </div>
          <h3 class="info-title">Gestão de Projetos</h3>
          <ul class="feature-list">
            <li>Acompanhamento da execução orçamentária e a disponibilidade financeira do projeto</li>
            <li>Encaminhamento dos pedidos para aquisição de bens, contratação de serviços, concessão de bolsas, etc.</li>
            <li>Acompanhamento e auxílio nas atividades administrativas e financeiras do projeto</li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="info-card">
          <div class="info-icon">
            <i class="bi bi-file-earmark-text"></i>
          </div>
          <h3 class="info-title">Modalidades de contratação para execução de projetos</h3>
          
          <div class="row mt-4">
            <div class="col-md-6 mb-4">
              <h5 class="fw-bold text-success"><i class="bi bi-building me-2"></i>Contratos Diretos</h5>
              <p>Contratos com empresas privadas para prestações de serviços, análises, relatórios técnicos e laboratoriais envolvendo Laboratórios das Universidades e Institutos apoiados.</p>
            </div>
            
            <div class="col-md-6 mb-4">
              <h5 class="fw-bold text-success"><i class="bi bi-calendar-event me-2"></i>Eventos</h5>
              <p>Gerenciamento de inscrições, assessoria jurídica para contratos de patrocínio e emissão de certificados e contratações de serviços para eventos.</p>
            </div>
            
            <div class="col-md-6 mb-4">
              <h5 class="fw-bold text-success"><i class="bi bi-house-door me-2"></i>Fundacionais</h5>
              <p>Contratos onde as Instituições Apoiadas contratam a FAPEU para a gestão de projetos de ensino, pesquisa, extensão, inovação, desenvolvimento institucional, cultural, científico e tecnológico, com financiamento por Ministérios, emendas parlamentares ou de empresas privadas.</p>
            </div>
            
            <div class="col-md-6 mb-4">
              <h5 class="fw-bold text-success"><i class="bi bi-people me-2"></i>Tripartites</h5>
              <p>Convênios realizados entre Fundação, Instituição Apoiada e empresa privada, para execução de projetos, usualmente, de pesquisa, financiados pela empresa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="d-flex justify-content-center mt-4">
          <a href="{{ route('projetos.captacao') }}" class="btn btn-success btn-lg rounded-pill me-3">
            <i class="bi bi-file-earmark-plus me-2"></i>Captação de Projetos
          </a>
          <a href="{{ route('projetos.espacocoordenador') }}" class="btn btn-outline-success btn-lg rounded-pill">
            <i class="bi bi-file-earmark-text me-2"></i>Espaço do Coordenador
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection