@extends('layout.header')
@section('title', 'Cálculo de Encargos')
@section('conteudo')

<style>
  .calculator-section {
    padding: 30px 0;
    background-color: #f8f9fa;
    min-height: 60vh;
  }

  .section-header {
    position: relative;
    margin-bottom: 50px;
    font-weight: 700;
    color: #333;
    text-align: center;
  }

  .section-header:after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background-color: #06551a;
  }

  .calculator-card {
    background-color: #fff;
    border-radius: 10px;
    padding: 40px 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .calculator-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(135deg, #06551a, #30755c);
  }

  .calculator-card:hover {
    box-shadow: 0 20px 40px rgba(6, 85, 26, 0.15);
  }

  .calculator-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #06551a, #30755c);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    color: #fff;
    font-size: 2rem;
    box-shadow: 0 8px 20px rgba(6, 85, 26, 0.2);
  }

  .calculator-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
    line-height: 1.3;
  }

  .calculator-description {
    color: #666;
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 30px;
  }

  .calculator-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 28px;
    background-color: #06551a;
    color: #ffffff;
    font-weight: 600;
    font-size: 1rem;
    border-radius: 50px;
    border: 2px solid #06551a;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(6, 85, 26, 0.2);
    width: 100%;
    max-width: 250px;
  }

  .calculator-link:hover {
    background-color: #06551a;
    box-shadow: 0 8px 25px rgba(6, 85, 26, 0.3);
    color: #ffffff;
    text-decoration: none;
  }

  .calculator-link:active {
    box-shadow: 0 4px 15px rgba(6, 85, 26, 0.2);
  }

  .calculator-link i {
    margin-left: 8px;
    font-size: 1.1rem;
  }

  .intro-text {
    text-align: center;
    color: #666;
    font-size: 1.1rem;
    margin-bottom: 40px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
  }

  @media (max-width: 768px) {
    .calculator-section {
      padding: 50px 0;
    }

    .calculator-grid {
      grid-template-columns: 1fr;
      gap: 25px;
      padding: 0 15px;
    }

    .calculator-card {
      padding: 35px 25px;
    }

    .section-header {
      font-size: 1.8rem;
      margin-bottom: 30px;
    }

    .calculator-icon {
      width: 70px;
      height: 70px;
      font-size: 1.8rem;
    }

    .calculator-title {
      font-size: 1.2rem;
    }

    .intro-text {
      font-size: 1rem;
      padding: 0 15px;
    }
  }

  @media (max-width: 480px) {
    .calculator-card {
      padding: 30px 20px;
    }

    .calculator-link {
      padding: 12px 24px;
      font-size: 0.95rem;
    }
  }
</style>

<section class="calculator-section">
  <div class="container">
    <h1 class="section-header">Cálculo de Encargos</h1>

    <p class="intro-text">
      Escolha o tipo de cálculo que deseja realizar para obter os valores de encargos de forma precisa e automatizada.
    </p>
    <div class="row">
      <div class="col-md-4 col-12 mb-4">
        <div class="calculator-card">
          <div class="calculator-icon">
            <i class="bi bi-calculator"></i>
          </div>
          <h2 class="calculator-title">Cálculo pelo Valor Bruto</h2>
          <p class="calculator-description">
            Calcule os encargos a partir do valor bruto do projeto, obtendo uma visão completa dos custos envolvidos.
          </p>
          <a href="{{ route('calculorpabruto.form') }}" class="calculator-link">
            Calcular Bruto
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="col-md-4 col-12 mb-4">
        <div class="calculator-card">
          <div class="calculator-icon">
            <i class="bi bi-currency-dollar"></i>
          </div>
          <h2 class="calculator-title">Cálculo pelo Valor Líquido</h2>
          <p class="calculator-description">
            Calcule os encargos a partir do valor líquido desejado, determinando o valor bruto necessário.
          </p>
          <a href="{{ route('calculorpaliquido.form') }}" class="calculator-link">
            Calcular Líquido
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="col-md-4 col-12 mb-4">
        <div class="calculator-card">
          <div class="calculator-icon">
            <i class="bi bi-people"></i>
          </div>
          <h2 class="calculator-title">Simulador de Custos CLT</h2>
          <p class="calculator-description">
            Calcule todos os encargos e custos relacionados à contratação de colaboradores, incluindo benefícios e provisões.
          </p>
          <a href="{{ route('calculoclt.form') }}" class="calculator-link">
            Calcular CLT
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection