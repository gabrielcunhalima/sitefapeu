@extends('layout.header')
@section('title',' Formulários para Colaboradores')

@section('conteudo')
<style>
  .form-card {
    background-color: #fff;
    border-radius: 12px;
    transition: all 0.3s ease;
    margin-bottom: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    border-left: 4px solid #06551A;
  }

  .form-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  }

  .form-card a {
    display: flex;
    padding: 20px;
    text-decoration: none;
    color: #333;
    justify-content: space-between;
    align-items: center;
  }

  .form-card a:hover {
    color: #06551A;
  }

  .form-info {
    display: flex;
    flex-direction: column;
  }

  .form-title {
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 5px;
  }

  .form-date {
    color: #6c757d;
    font-size: 0.9rem;
  }

  .download-icon {
    color: #06551A;
    font-size: 1.5rem;
    transition: all 0.3s ease;
  }

  .form-card:hover .download-icon {
    transform: scale(1.2);
  }

  @media (max-width: 768px) {
    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }
  }
</style>

<section class="formularios-section">
  <div class="container">
    
    <p class="lead mb-4">Aqui você encontra todos os formulários necessários para procedimentos administrativos. Clique sobre o documento para fazer o download.</p>
    
    <div class="row">
      <div class="col-lg-12">
        <div class="form-card">
          <a href="pdfs/Colaborador/Formularios/atualizacao_cadastro_empregado.doc" target="_blank">
            <div class="form-info">
              <span class="form-title">Atualização Cadastral do Empregado</span>
              <span class="form-date">Última atualização: 15/12/2011</span>
            </div>
            <i class="bi bi-file-earmark-word download-icon"></i>
          </a>
        </div>
        
        <div class="form-card">
          <a href="pdfs/Colaborador/Formularios/formulario_motivo_falta.doc" target="_blank">
            <div class="form-info">
              <span class="form-title">Motivo Falta ao Trabalho</span>
              <span class="form-date">Última atualização: 30/03/2015</span>
            </div>
            <i class="bi bi-file-earmark-word download-icon"></i>
          </a>
        </div>
        
        <div class="form-card">
          <a href="pdfs/Colaborador/Formularios/solicitacao_cracha.doc" target="_blank">
            <div class="form-info">
              <span class="form-title">Solicitação de Crachá</span>
              <span class="form-date">Última atualização: 22/07/2010</span>
            </div>
            <i class="bi bi-file-earmark-word download-icon"></i>
          </a>
        </div>
        
        <div class="form-card">
          <a href="pdfs/Colaborador/Formularios/solicitacao_vale_transporte.doc" target="_blank">
            <div class="form-info">
              <span class="form-title">Solicitação de Vale Transporte</span>
              <span class="form-date">Última atualização: 16/04/2024</span>
            </div>
            <i class="bi bi-file-earmark-word download-icon"></i>
          </a>
        </div>
        
        <div class="form-card">
          <a href="pdfs/Colaborador/Formularios/formulario_alteracao_aux_alimentacao (1).doc" target="_blank">
            <div class="form-info">
              <span class="form-title">Alteração de Vale Alimentação</span>
              <span class="form-date">Última atualização: 16/08/2013</span>
            </div>
            <i class="bi bi-file-earmark-word download-icon"></i>
          </a>
        </div>
      </div>
    </div>
    
    <!-- <div class="text-center mt-5">
      <p class="text-muted">Caso precise de outros formulários não listados aqui, entre em contato com o setor de Recursos Humanos.</p>
      <a href="{{ route('faleconosco.contato') }}" class="btn btn-outline-success rounded-pill px-4 py-2">
        <i class="bi bi-envelope me-2"></i>Contato
      </a>
    </div> -->
  </div>
</section>
@endsection