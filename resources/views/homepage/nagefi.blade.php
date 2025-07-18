@extends('layout.header')
@section('title',' NAGEFI')

@section('conteudo')
<style>
  .nagefi-section {
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
    background-color: #06551a;
  }

  .content-container {
    background-color: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
  }

  .intro-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #555;
    margin-bottom: 40px;
  }

  .areas-section {
    margin-top: 50px;
  }

  .areas-header {
    font-size: 1.8rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 30px;
    position: relative;
  }

  .areas-header:after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 40px;
    height: 3px;
    background-color: #06551a;
  }

  .service-card {
    background: linear-gradient(to left, rgb(241, 241, 241), transparent);
    border-left: 4px solid #06551a;
    padding: 25px;
    margin-bottom: 25px;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .service-card:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  }

  .service-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #06551a;
    margin-bottom: 15px;
  }

  .service-description {
    color: #555;
    line-height: 1.7;
    text-align: justify;
  }

  .intro-description {
    color: #666;
    font-size: 1rem;
    margin-bottom: 25px;
  }

  .contact-section {
    background: linear-gradient(to right, #06551a, rgb(55, 133, 60));
    color: #fff;
    padding: 40px;
    border-radius: 12px;
    margin-top: 40px;
  }

  .contact-header {
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 25px;
    color: #fff;
  }

  .contact-info {
    line-height: 1.8;
  }

  .contact-info strong {
    color: #fff;
  }

  .contact-info a {
    color: #ffffff;
    text-decoration: underline;
  }

  .contact-info a:hover {
    color: #e8f5e9;
  }

  .divider {
    height: 2px;
    background: linear-gradient(to right, #06551a, transparent);
    margin: 40px 0;
    border: none;
  }

  @media (max-width: 768px) {
    .nagefi-section {
      padding: 30px 0;
    }

    .content-container {
      padding: 30px 20px;
    }

    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }

    .areas-header:after {
      left: 50%;
      transform: translateX(-50%);
    }

    .areas-header {
      text-align: center;
    }

    .service-card {
      padding: 20px;
    }

    .contact-section {
      padding: 30px 20px;
    }

    .service-description {
      text-align: left;
    }
  }
</style>

<section class="nagefi-section">
  <div class="container">
    <h2 class="section-header">Núcleo de Análise Gerencial e Fiscal</h2>
    <div class="content-container">
      <p class="intro-text">
        O Núcleo de Análise Gerencial e Fiscal (NAGEFI) visa proporcionar o desenvolvimento institucional de empresas públicas e privadas quanto ao compliance financeiro, contábil, fiscal, tributário, de gestão e à segurança e saúde do trabalho, por meio do alcance de melhorias e do fortalecimento de suas capacidades e estruturas, propiciando que atinjam seus objetivos de maneira mais eficaz e eficiente.<br><br>
        O nosso trabalho envolve o aperfeiçoamento de processos internos e a adoção de tecnologias e práticas modernas de gestão, capacitação e treinamento de seus colaboradores e, para isso, é constituído por uma equipe técnica própria, composta por consultores associados com comprovada experiência profissional.<br><br>
        Dessa forma, o serviço prestado pelo NAGEFI fortalecerá as capacidades das organizações, garantindo sua sustentabilidade e sucesso quanto ao compliance financeiro, contábil, fiscal, tributário, de gestão e em segurança e saúde do trabalho.
      </p>
      <hr class="divider">
      <div class="areas-section">
        <h3 class="areas-header">Áreas de atuação</h3>
        <p class="intro-description">Destacam-se como principais competências e serviços oferecidos:</p>
        <div class="service-card">
          <h4 class="service-title">Auditoria de Folha de Pagamento</h4>
          <p class="service-description">
            Tem por objeto a análise da incidência da Contribuição Previdenciária sobre as rubricas pagas pela empresa a seus empregados, bem como o correto enquadramento na tabela que determina o Grau de Incidência de Incapacidade Laborativa decorrente dos Riscos Ambientais do Trabalho - GILRAT/Fator Acidentário de Prevenção – FAP.
          </p>
        </div>
        <div class="service-card">
          <h4 class="service-title">Auditoria Fiscal</h4>
          <p class="service-description">
            Tem por objeto analisar a eficiência dos controles internos da empresa visando reduzir possíveis contingências e a análise da correta base de cálculo dos tributos: IR (Imposto de Renda), CSLL (Contribuição Social sobre o Lucro Líquido), PIS (Programa de Integração Social) / PASEP (Patrimônio do Servidor Público), COFINS (Contribuição para Financiamento da Seguridade Social).
          </p>
        </div>
        <div class="service-card">
          <h4 class="service-title">Auditoria de Débitos Constituídos</h4>
          <p class="service-description">
            Tem por objeto a revisão de débitos constituídos (declarados ou lançados pelo Fisco) para verificar se o valor declarado/apurado, incluindo multas e juros, está em conformidade com a legislação aplicável.
          </p>
        </div>
        <div class="service-card">
          <h4 class="service-title">Serviços de segurança e Saúde do Trabalho</h4>
          <p class="service-description">
            Consultoria, diagnóstico e auditoria de conformidade legal na gestão de segurança e saúde, na avaliação de ambiente físico de trabalho e identificação de situações de riscos visando auxiliar a empresa nas ações preventivas e na criação de medidas de correção.
          </p>
        </div>
        <div class="service-card">
          <h4 class="service-title">Treinamento e capacitação</h4>
          <p class="service-description">
            Treinamento técnico e gerencial, e cursos de capacitação e atualização nas áreas financeira, contábil, fiscal, tributária, segurança do trabalho e saúde do trabalho.
          </p>
        </div>
        <div class="service-card">
          <h4 class="service-title">Gerenciamento de Processos de Negócios (Business Process Management / BPM)</h4>
          <p class="service-description">
            Consultoria e assessoria a empresas para o registro e aperfeiçoamento de seus processos produtivos por meio de BPM, um conjunto de práticas de gestão voltada para a melhoria dos resultados das organizações.
          </p>
        </div>
        <div class="service-card">
          <h4 class="service-title">Gerenciamento de custos e ferramentas gerencias</h4>
          <p class="service-description">
            Desenvolvimento e implantação de sistemas de custos e ferramentas gerenciais, proporcionando o desenvolvimento institucional para entidades públicas, privadas e fundações.
          </p>
        </div>
        <div class="contact-section">
          <h4 class="contact-header">Entre em contato</h4>
          <div class="contact-info">
            <p>
              <strong>Telefone:</strong> (48) 3331-7417<br>
              <strong>E-mail:</strong> <a href="mailto:nagefi@fapeu.org.br">nagefi@fapeu.org.br</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection