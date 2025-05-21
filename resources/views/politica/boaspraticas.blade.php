@extends('layout.header')
@section('title',' Boas Praticas')

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

  .sustainability-banner {
    background: linear-gradient(135deg, #33874f 0%, #06551A 100%);
    padding: 30px;
    border-radius: 12px;
    margin-bottom: 40px;
    color: #fff;
    text-align: center;
  }

  .sustainability-banner h2 {
    font-weight: 700;
    margin-bottom: 10px;
  }

  .initiative-card {
    background-color: #fff;
    border-radius: 12px;
    margin: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    height: 100%;
  }

  .initiative-img {
    width: 100%;
    height: 330px;
    object-fit: contain;
    border-bottom: 3px solid #06551A;
    padding: 20px;
    background-color: #f9f9f9;
  }

  .initiative-content {
    padding: 25px;
  }

  .initiative-title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
    text-align: center;
  }

  .initiative-text {
    color: #555;
    line-height: 1.7;
    max-height: 200px;
    overflow-y: auto;
  }

  .initiative-link {
    color: #06551A;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
    margin-top: 10px;
  }

  .initiative-link:hover {
    color: #054615;
    transform: translateX(5px);
  }

  .slick-prev,
  .slick-next {
    width: 40px;
    height: 40px;
    background-color: #06551A !important;
    border-radius: 50%;
    z-index: 10;
  }

  .slick-prev {
    left: -100px;
  }

  .slick-next {
    right: -100px;
  }

  .slick-prev:before,
  .slick-next:before {
    color: white;
    font-family: 'bootstrap-icons';
    font-size: 20px;
    opacity: 1;
  }

  .slick-prev:before {
    content: "\F284";
  }

  .slick-next:before {
    content: "\F285";
  }

  .read-more-btn {
    display: block;
    text-align: center;
    margin-top: 15px;
    padding: 8px 15px;
    background-color: #06551A;
    color: white;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .read-more-btn:hover {
    background-color: #054615;
    color: white;
  }

  @media (max-width: 768px) {
    .sustainability-section {
      padding: 40px 0;
    }

    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }

    .initiative-img {
      height: 250px;
    }

    .slick-prev {
      left: 10px;
    }

    .slick-next {
      right: 10px;
    }
  }
</style>

<section class="sustainability-section">
  <div class="container">
    <div class="sustainability-banner">
      <h2>FAPEU Sustentável</h2>
      <p class="mb-0">Conheça as iniciativas de sustentabilidade da nossa fundação e como estamos contribuindo para um futuro mais consciente</p>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-header">Nossas Iniciativas Sustentáveis</h2>

        <p>As ações de sustentabilidade da Fundação de Amparo à Pesquisa e Extensão Universitária (FAPEU) começaram em 2015 com o projeto Recicla Fapeu.</p>

        <p>O projeto tem o objetivo de promover ações de soluções e descarte de resíduos sólidos em três categorias: orgânicos, recicláveis e rejeitos.</p>

        <p>A FAPEU é uma fundação que preza pela preservação do meio ambiente e se preocupa com a sustentabilidade. O Recicla Fapeu, além de propiciar conhecimento e conscientização ambiental, reduz o volume dos resíduos destinados a aterros sanitários.</p>

        <p>Além da coleta e descartes adequados, o projeto também desenvolve a comercialização de parte do material reciclável (papéis e papelões) em prol de ações coletivas revertidas aos funcionários da FAPEU.</p>

        <h4 class="mt-5 mb-4 text-success fw-bold">Outras ações de sustentabilidade desenvolvidas pela FAPEU</h4>
      </div>
    </div>
    <div class="initiatives-carousel">
      <div class="initiative-card">
        <img src="images/sustentavelecobag.png" alt="Ecobag" class="initiative-img">
        <div class="initiative-content">
          <h3 class="initiative-title">Ecobag FAPEU</h3>
          <div class="initiative-text">
            <p>Uma sacola plástica sozinha causa pouco estrago, mas o consumo excessivo estimulado pela gratuidade e disponibilidade tem grande impacto ambiental.</p>
            <p>No mundo são consumidas mais de 1 trilhão de sacolas plásticas por ano. No Brasil, cerca de 1,5 milhão de sacolas são distribuídas por hora.</p>
            <p>Ao completar 40 anos, em 2017, a FAPEU presenteou funcionários e clientes com uma bonita e ecologicamente correta sacola reciclável.</p>
          </div>
          <a href="https://indd.adobe.com/view/edbdff65-12b3-4735-b5c7-77fea43d4963" class="read-more-btn" target="_blank">Saiba mais</a>
        </div>
      </div>

      <div class="initiative-card">
        <img src="images/sustentavelcaneca.png" alt="Canecas" class="initiative-img">
        <div class="initiative-content">
          <h3 class="initiative-title">Canecas FAPEU</h3>
          <div class="initiative-text">
            <p>Todo colaborador que ingressa na FAPEU recebe uma caneca no seu primeiro dia de trabalho.</p>
            <p>A campanha busca reduzir o consumo de copos plásticos descartáveis na Fundação e incentivar a utilização da caneca reutilizável.</p>
          </div>
        </div>
      </div>

      <div class="initiative-card">
        <img src="images/sustentavelenergia.png" alt="Eficiência Energética" class="initiative-img">
        <div class="initiative-content">
          <h3 class="initiative-title">Eficiência Energética</h3>
          <div class="initiative-text">
            <p>A campanha de eficiência energética da FAPEU tem o objetivo de diminuir o consumo de energia elétrica no prédio da Fundação.</p>
            <p>O foco da campanha, além da consciência ambiental, é o combate ao desperdício de energia elétrica nos diferentes setores da Fundação.</p>
          </div>
        </div>
      </div>

      <div class="initiative-card">
        <img src="images/sustentavelvidro.png" alt="PEV" class="initiative-img">
        <div class="initiative-content">
          <h3 class="initiative-title">Ponto de Entrega Voluntária de Vidros</h3>
          <div class="initiative-text">
            <p>A FAPEU, junto com a Fundação Stemmer para Pesquisa, Desenvolvimento e Inovação (Feesc), aderiu ao programa municipal de doação de mobiliário para limpeza urbana com a doação de um Ponto de Entrega Voluntária (PEV) de Vidros que está localizado no Centro de Cultura e Eventos do campus da UFSC.</p>
            <p>Com a doação, a FAPEU auxilia a Companhia de Melhoramentos da Capital (Comcap) a expandir para o bairro Trindade a rede de PEVS de vidros.</p>
          </div>
        </div>
      </div>

      <div class="initiative-card">
        <img src="images/sustentavelcopo.png" alt="Eco copo" class="initiative-img">
        <div class="initiative-content">
          <h3 class="initiative-title">Eco copo FAPEU</h3>
          <div class="initiative-text">
            <p>A FAPEU, com o intuito de contribuir e alertar os colaboradores sobre a importância de estimular práticas sustentáveis no ambiente de trabalho, realizou, no final de 2018, a substituição dos copos descartáveis pelo uso dos eco copos.</p>
            <p>A FAPEU já havia aderido às canecas de porcelana para a diminuição do consumo dos copos descartáveis, mas com a chegada dos eco copos a intenção foi extinguir completamente os descartáveis na sede da Fundação.</p>
          </div>
        </div>
      </div>

      <div class="initiative-card">
        <img src="images/sustentavelpilha.png" alt="Coletor de pilhas" class="initiative-img">
        <div class="initiative-content">
          <h3 class="initiative-title">Coletor de pilhas FAPEU</h3>
          <div class="initiative-text">
            <p>As pilhas e baterias jogadas na natureza levam séculos para se decompor. Os metais pesados nunca se degradam e, em contato com a umidade, calor e outras substâncias químicas, vazam componentes tóxicos e contaminam o solo, a água, as plantas e os animais.</p>
            <p>Pensando nisso, a FAPEU disponibiliza em sua sede um coletor para o descarte correto de pilhas e baterias. Esta ação também faz parte do projeto de sustentabilidade implantado pela Fundação.</p>
          </div>
        </div>
      </div>

      <div class="initiative-card">
        <img src="images/sustentavellivro.png" alt="Estante de livros" class="initiative-img">
        <div class="initiative-content">
          <h3 class="initiative-title">Estante itinerante de livros e revista</h3>
          <div class="initiative-text">
            <p>Desde outubro de 2018, a FAPEU disponibiliza, gratuitamente, livros e revistas para os colaboradores e visitantes. O projeto tem o objetivo de facilitar o acesso a livros e revistas, incentivar o hábito da leitura, criar novos leitores e divulgar os mais diversos escritores, além de contribuir com o reuso dessas publicações.</p>
            <p>As doações para a Estante FAPEU podem ser feitas na Recepção da sede da Fundação. São aceitos livros científicos, de romance, conto, poesia, ficção, autoajuda, crônica, aventura, biografia, entre outros.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('.initiatives-carousel').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: '<button type="button" class="slick-prev"><i class="bi bi-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="bi bi-chevron-right"></i></button>',
      responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>
@endsection