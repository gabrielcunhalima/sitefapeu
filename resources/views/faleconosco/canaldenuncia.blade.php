@extends('layout.header')
@section('title',' Canal de Denúncia')

@section('conteudo')
<style>
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

  .channel-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    height: 100%;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
  }

  .channel-icon {
    width: 80px;
    height: 80px;
    margin-bottom: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
  }

  .channel-primary {
    background-color: #06551A;
    color: white;
  }

  .channel-secondary {
    background-color: #6c757d;
    color: white;
  }

  .channel-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: #333;
  }

  .channel-description {
    color: #6c757d;
    margin-bottom: 25px;
    flex-grow: 1;
  }

  .btn-channel {
    padding: 12px 25px;
    margin-right:auto;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
  }

  .btn-primary-channel {
    background-color: #06551A;
    color: white;
    border: none;
  }

  .btn-primary-channel:hover {
    background-color: #054615;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(5, 70, 21, 0.2);
  }

  .btn-secondary-channel {
    background-color: #6c757d;
    color: white;
    border: none;
  }

  .btn-secondary-channel:hover {
    background-color: #5a6268;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(108, 117, 125, 0.2);
  }

  .btn-icon {
    margin-right: 10px;
    font-size: 1.2rem;
  }

  @media (max-width: 768px) {
    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }
    
    .channel-card {
      margin-bottom: 30px;
    }
  }
</style>

<section class="denuncia-section">
  <div class="container">    
    <div class="row mb-4">
      <div class="col-12">
        <p class="lead">O Canal de Denúncias da FAPEU é um instrumento essencial para assegurar a transparência e integridade de nossas operações. Através dele, colaboradores, fornecedores, parceiros e o público em geral podem reportar condutas suspeitas, irregulares ou antiéticas. Todas as denúncias são recebidas e tratadas com total confidencialidade, sendo encaminhadas para análise independente a fim de garantir uma investigação imparcial.</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="channel-card">
          <div class="channel-icon channel-primary">
            <i class="bi bi-shield-check"></i>
          </div>
          <h3 class="channel-title">Canal de Denúncias</h3>
          <p class="channel-description">Acesse o sistema seguro para registrar denúncias sobre possíveis irregularidades, condutas antiéticas, fraudes ou violações às políticas da FAPEU. Sua identidade será preservada e todas as informações são tratadas com total confidencialidade.</p>
          <a href="https://www.contatoseguro.com.br/fapeu" target="_blank" class="btn btn-channel btn-primary-channel">
            <i class="bi bi-box-arrow-up-right btn-icon"></i>
            Acessar o Canal de Denúncias da FAPEU
          </a>
        </div>
      </div>
      
      <div class="col-lg-6 mb-4">
        <div class="channel-card">
          <div class="channel-icon channel-secondary">
            <i class="bi bi-book"></i>
          </div>
          <h3 class="channel-title">Guia de Orientações</h3>
          <p class="channel-description">Consulte nosso guia com instruções detalhadas sobre como utilizar o Canal de Denúncias, tipos de situações que devem ser reportadas e procedimentos adotados para investigação. O documento contém todas as informações necessárias para realizar uma denúncia efetiva.</p>
          <a href="https://heyzine.com/flip-book/8f6fd00b00.html" target="_blank" class="btn btn-channel btn-secondary-channel">
            <i class="bi bi-file-earmark-text btn-icon"></i>
            Baixar Orientações
          </a>
        </div>
      </div>
    </div>
    
    <div class="mt-5 p-4 bg-light rounded">
      <div class="row align-items-center">
        <div class="col-md-1 text-center mb-3 mb-md-0">
          <i class="bi bi-info-circle-fill text-primary" style="font-size: 2rem;"></i>
        </div>
        <div class="col-md-11">
          <h4>Compromisso com a integridade</h4>
          <p class="mb-0">A FAPEU tem o compromisso de promover a cultura de ética e integridade em todas as suas atividades. Para conhecer mais sobre nossas políticas internas, acesse nossa <a href="{{ route('politica.integridade') }}" class="text-primary">Política de Integridade</a> e <a href="{{ route('politica.codigoconduta') }}" class="text-primary">Código de Conduta</a>.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection