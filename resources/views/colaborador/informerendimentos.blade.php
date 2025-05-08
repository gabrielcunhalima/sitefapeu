@extends('layout.header')
@section('title',' Informe de Rendimentos')

@section('conteudo')
<style>
  .informe-section {
    padding: 60px 0;
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

  .informe-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  }

  .informe-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  }

  .informe-icon {
    width: 90px;
    height: 90px;
    margin: 0 auto 25px;
    background-color: rgba(6, 85, 26, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: #06551A;
  }

  .informe-title {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
  }

  .informe-description {
    color: #6c757d;
    margin-bottom: 25px;
    text-align: center;
  }

  .btn-informe {
    padding: 14px 30px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    background-color: #06551A;
    color: white;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
  }

  .btn-informe:hover {
    background-color: #054615;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(5, 70, 21, 0.2);
  }

  .btn-icon {
    margin-right: 10px;
    font-size: 1.2rem;
  }
  
  .divider {
    position: relative;
    height: 100%;
  }
  
  .divider:after {
    content: '';
    position: absolute;
    top: 10%;
    bottom: 10%;
    width: 1px;
    background-color: #dee2e6;
    left: 50%;
    transform: translateX(-50%);
  }

  @media (max-width: 991px) {
    .divider:after {
      display: none;
    }
    
    .informe-card {
      margin-bottom: 30px;
    }
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

<section class="informe-section">
  <div class="container">
    <h2 class="section-header">Informe de Rendimentos</h2>
    
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h3 class="mb-4 text-success">Acesso aos Informes de Rendimentos</h3>
        <p class="lead">Selecione o sistema de acordo com sua categoria para visualizar e gerar seus informes de rendimentos para fins de Declaração de Imposto de Renda.</p>
      </div>
    </div>
    
    <div class="row align-items-stretch">
      <div class="col-lg-5">
        <div class="informe-card h-100 d-flex flex-column">
          <div class="informe-icon">
            <i class="bi bi-person-badge"></i>
          </div>
          <h3 class="informe-title">Sem vínculo empregatício e Pessoa Jurídica</h3>
          <p class="informe-description flex-grow-1">
            Acesse este módulo para obter informes de rendimentos referentes a serviços prestados sem vínculo empregatício (autônomos) e pagamentos para Pessoas Jurídicas.
          </p>
          <a href="http://150.162.78.4:8080/manager_rendimento/relatoriorendimentos/" target="_blank" class="btn btn-informe mt-auto">
            <i class="bi bi-box-arrow-up-right btn-icon"></i>
            Acessar Sistema
          </a>
        </div>
      </div>
      
      <div class="col-lg-2 d-none d-lg-block">
        <div class="divider"></div>
      </div>
      
      <div class="col-lg-5">
        <div class="informe-card h-100 d-flex flex-column">
          <div class="informe-icon">
            <i class="bi bi-file-earmark-text"></i>
          </div>
          <h3 class="informe-title">Colaboradores CLT e Extrato Unimed</h3>
          <p class="informe-description flex-grow-1">
            Acesse este módulo para obter informes de rendimentos para colaboradores contratados em regime CLT e extratos de utilização do plano de saúde Unimed.
          </p>
          <a href="http://drhflow.fapeu.com.br:8080/InformesUnimed/" target="_blank" class="btn btn-informe mt-auto">
            <i class="bi bi-box-arrow-up-right btn-icon"></i>
            Acessar Sistema
          </a>
        </div>
      </div>
    </div>
    
    <!-- <div class="row mt-5">
      <div class="col-lg-8 mx-auto">
        <div class="alert alert-info d-flex align-items-center">
          <i class="bi bi-info-circle-fill me-3" style="font-size: 2rem;"></i>
          <div>
            <h5>Informações Adicionais</h5>
            <p class="mb-0">Para dúvidas relacionadas aos informes de rendimentos, entre em contato com o Departamento de Recursos Humanos pelo e-mail: <strong>rh@fapeu.org.br</strong> ou pelo telefone: <strong>(48) 3331-7442</strong>.</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>
@endsection