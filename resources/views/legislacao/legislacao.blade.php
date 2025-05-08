@extends('layout.header')
@section('title',' Legislação')

@section('conteudo')
<style>

  .section-header:after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 0;
    width: 60px;
    height: 4px;
    background-color: #06551A;
  }

  .legislation-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 40px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  }

  .legislation-title {
    color: #06551A;
    font-weight: 600;
    margin-bottom: 5px;
  }

  .legislation-item {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e9ecef;
  }

  .legislation-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
  }

  .legislation-link {
    color: #06551A;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .legislation-link:hover {
    color: #054615;
    text-decoration: underline;
  }

  .legislation-description {
    color: #555;
    margin-top: 5px;
    line-height: 1.6;
  }

  @media (max-width: 768px) {
    .legislation-section {
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

<section class="legislation-section">
  <div class="container">    
    <div class="legislation-card">
      <h4 class="mb-4"><b>Leis</b></h4>
      
      <div class="legislation-item">
        <h5 class="legislation-title">
          <a href="https://www.planalto.gov.br/ccivil_03/_Ato2011-2014/2014/Decreto/D8240.htm#art27" target="_blank" class="legislation-link">
            DECRETO Nº 8.240, DE 21 DE MAIO DE 2014
          </a>
        </h5>
        <p class="legislation-description">
          Regulamenta os convênios e os critérios de habilitação de empresas referidos no art. 1o-B da Lei no 8.958, de 20 de dezembro de 1994.
        </p>
      </div>
      
      <div class="legislation-item">
        <h5 class="legislation-title">
          <a href="https://www.planalto.gov.br/CCIVIL_03/_Ato2011-2014/2014/Decreto/D8241.htm" target="_blank" class="legislation-link">
            DECRETO Nº 8.241, DE 21 DE MAIO DE 2014
          </a>
        </h5>
        <p class="legislation-description">
          Regulamenta o art. 3o da Lei no 8.958, de 20 de dezembro de 1994, para dispor sobre a aquisição de bens e a contratação de obras e serviços pelas fundações de apoio.
        </p>
      </div>
      
      <div class="legislation-item">
        <h5 class="legislation-title">
          <a href="https://www.planalto.gov.br/ccivil_03/_Ato2007-2010/2010/Decreto/D7423.htm" target="_blank" class="legislation-link">
            DECRETO Nº 7.423, DE 31 DE DEZEMBRO DE 2010
          </a>
        </h5>
        <p class="legislation-description">
          Regulamenta a Lei no 8.958, de 20 de dezembro de 1994, que dispõe sobre as relações entre as instituições federais de ensino superior e de pesquisa científica e tecnológica e as fundações de apoio, e revoga o Decreto no 5.205, de 14 de setembro de 2004.
        </p>
      </div>
      
      <div class="legislation-item">
        <h5 class="legislation-title">
          <a href="https://www.planalto.gov.br/ccivil_03/_ato2007-2010/2008/lei/l11788.htm" target="_blank" class="legislation-link">
            LEI Nº 11.788, DE 25 DE SETEMBRO DE 2008
          </a>
        </h5>
        <p class="legislation-description">
          Dispõe sobre o estágio de estudantes; altera a redação do art. 428 da Consolidação das Leis do Trabalho – CLT, aprovada pelo Decreto-Lei no 5.452, de 1º de maio de 1943, e a Lei no 9.394, de 20 de dezembro de 1996; revoga as Leis nos 6.494, de 7 de dezembro de 1977, e 8.859, de 23 de março de 1994, o parágrafo único do art. 82 da Lei no 9.394, de 20 de dezembro de 1996, e o art. 6o da Medida Provisória no 2.164-41, de 24 de agosto de 2001; e dá outras providências.
        </p>
      </div>
      
      <div class="legislation-item">
        <h5 class="legislation-title">
          <a href="https://www.planalto.gov.br/ccivil_03/_ato2004-2006/2004/Lei/L10.973.htm" target="_blank" class="legislation-link">
            LEI No 10.973, DE 2 DE DEZEMBRO DE 2004
          </a>
        </h5>
        <p class="legislation-description">
          Dispõe sobre incentivos à inovação e à pesquisa científica e tecnológica no ambiente produtivo e dá outras providências.
        </p>
      </div>
      
      <div class="legislation-item">
        <h5 class="legislation-title">
          <a href="https://www.planalto.gov.br/ccivil_03/Leis/L8958.htm" target="_blank" class="legislation-link">
            LEI Nº 8.958, DE 20 DE DEZEMBRO DE 1994
          </a>
        </h5>
        <p class="legislation-description">
          Dispõe sobre as relações entre as instituições federais de ensino superior e de pesquisa científica e tecnológica e as fundações de apoio e dá outras providências.
        </p>
      </div>
    </div>
    
    <div class="legislation-card">
      <h4 class="mb-4"><b>Portarias</b></h4>
      
      <div class="legislation-item">
        <h5 class="legislation-title mb-3">MCT/FNDCT/FINEP</h5>
        
        <h5 class="legislation-title">
          <a href="https://antigo.mctic.gov.br/mctic/opencms/legislacao/outros_atos/instrucoes_normativas/Instrucao_Normativa_CDFNDCT_n_1_de_25062010.html" target="_blank" class="legislation-link">
            INSTRUÇÃO NORMATIVA CDFNDCT /MCT nº 1, de 25 de JUNHO de 2010 (IN CDFNDCT 01/10)
          </a>
        </h5>
        <p class="legislation-description">
          Estabelece normas e diretrizes para transferência, utilização e prestação de contas dos recursos do FNDCT na modalidade não reembolsável, por meio de convênios, termos de cooperação e acordos de cooperação celebrados pela FINEP ou outra Agência de Fomento.
        </p>
      </div>
    </div>
  </div>
</section>
@endsection