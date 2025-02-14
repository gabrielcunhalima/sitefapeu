<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

  <link rel="shortcut icon" href="{{ asset('images/fapeu_ico.ico') }}">

  <title>FAPEU</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<style>
  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }

  .navbar-toggler {
    border: none;
    background-color: transparent;
  }

  @media (max-width: 768px) {
    .accessibility-buttons {
      right: 5px;
    }
  }

  .prev {
    display: block;
    height: 20px;
    width: 20px;
    background: url('img/back.png') no-repeat;
  }

  .next {
    display: block;
    height: 20px;
    width: 20px;
    background: url('../img/next.png') no-repeat;
  }

  a {
    text-decoration: none !important;
  }

  .link-hover {
    transition: transform 0.3s ease, background-color 0.3s ease;
  }


  .link-hover:hover {
    transform: translateY(-10px);
  }
</style>

<body>
  <!-- <div class="text-center py-1 bg-cinza">
    Boas festas!
  </div> -->

  <div class="accessibility-buttons d-none d-lg-block">
    <button id="toggle-accessibility" class="btn bg-info btn-info">
      <img src="images/IconsAreaADM/man_8022646.png" alt="Acessibilidade" height="34">
    </button>
    <div id="accessibility-buttons-container" class="accessibility-buttons d-none mt-5">
      <button id="increase-font" class="btn bg-info">A+</button>
      <button id="decrease-font" class="btn bg-info">A-</button>
      <button id="toggle-contrast" class="btn bg-info">Alto Contraste</button>
      <button id="toggle-grayscale" class="btn bg-info">Escala de Cinza</button>
      <button id="reset-accessibility" class="btn bg-info">Restaurar</button>
      <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

  <header>
    <nav class="navbar navbar-expand-lg navbar-custom font-montserrat">
      <div class="container">
        <div class="logofapeu">
          <a class="navbar-brand logofapeu" href="{{ route('homepage.home') }}">
            <img src="images\logo2branca.png" alt="Logo Fapeu" height="110">
          </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <p>
              <li class="nav-item dropdown text-white">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Institucional
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('quemsomos.sobre')}}">Sobre a FAPEU</a>
                  <a class="dropdown-item" href="{{route('quemsomos.estatuto')}}">Estatuto</a>
                  <a class="dropdown-item" href="{{route('quemsomos.regimentointerno')}}">Regimento Interno</a>
                  <a class="dropdown-item" href="{{route('quemsomos.organograma')}}">Organograma</a>
                  <a class="dropdown-item" href="{{route('quemsomos.administracao')}}">Administração</a>
                  <a class="dropdown-item" href="{{route('quemsomos.identidadevisual')}}">Identidade Visual</a>
                  <a class="dropdown-item" href="{{route('quemsomos.revistafapeu')}}">Revista FAPEU</a>
                  <a class="dropdown-item" href="{{route('noticias.noticiasrecentes')}}">Noticias</a>
                  <a class="dropdown-item" href="{{route('noticias.noticiaspost')}}">Adicionar Notícias (testes)</a>
                </div>
              </li>
            </p>
            <p>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Projetos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('projetos.captacao')}}">Captação de Recursos e Oportunidade</a>
                  <a class="dropdown-item" href="{{route('projetos.espacocoordenador')}}">Espaço Coordenador</a>
                  <a class="dropdown-item" href="{{route('projetos.manualcompras')}}">Manual de Compras e Contratações</a>
                  <a class="dropdown-item" href="{{route('projetos.formulariosprojetos')}}">Formulários</a>
                  <a class="dropdown-item" href="{{route('noticias.noticiasrecentes')}}">Noticias</a>
                </div>
              </li>
            </p>
            <p>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('transparencia.projetostransparencia')}}" id="navbarDropdown" role="button">
                  Portal da Transparência
                </a>
              </li>
            </p>
            <p>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Políticas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('politica.anticorrupcao')}}">Política Anticorrupção</a>
                  <a class="dropdown-item" href="{{route('politica.integridade')}}">Programa de Integridade</a>
                  <a class="dropdown-item" href="{{route('politica.codigoconduta')}}">Código de Conduta</a>
                  <a class="dropdown-item" href="{{route('politica.comiteetica')}}">Comitê de Ética e Comitê<br> de Gestão de Riscos</a>
                  <a class="dropdown-item" href="#">*LGPD</a>
                  <a class="dropdown-item" href="{{route('politica.politicaprivacidade')}}">Política de Privacidade</a>
                  <a class="dropdown-item" href="{{route('politica.politicacookies')}}">Política de Cookies</a>
                  <a class="dropdown-item" href="{{route('politica.boaspraticas')}}">Boas Práticas</a>
                </div>
              </li>
            </p>
            <p>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Legislação e Normas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('legislacao.legislacao')}}">Legislação</a>
                  <a class="dropdown-item" href="{{route('legislacao.normas')}}">Normas Internas FAPEU e Instituições Apoiadas</a>
                </div>
              </li>
            </p>
            <p>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fornecedor
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('transparencia.selecoespublicas')}}">Seleções Públicas</a>
                  <a class="dropdown-item" href="{{route('fornecedor.dispensa')}}">Dispensa de Licitação</a>
                  <a class="dropdown-item" href="{{route('fornecedor.inexibilidade')}}">Inexibilidade</a>
                  <a class="dropdown-item" href="{{route('fornecedor.espacofornecedor')}}">Espaço do Fornecedor</a>
                </div>
              </li>
            </p>
            <p>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Colaborador
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <!-- <a class="dropdown-item" href="{{route('colaborador.areaadministrativa')}}">Área Administrativa</a> -->
                  <a class="dropdown-item" href="http://drhflow.fapeu.com.br:8080/DRHFlow">DRHFlow</a>
                  <a class="dropdown-item" href="http://admflow.fapeu.com.br:8080/ADMFlow">ADMFlow</a>
                  <a class="dropdown-item" href="https://webmail.fapeu.org.br">WebMail</a>
                  <a class="dropdown-item" href="{{route('colaborador.formularioscolaborador')}}">Formulários</a>
                  <a class="dropdown-item" href="{{route('colaborador.acordocoletivo')}}">Acordo Coletivo</a>
                  <a class="dropdown-item" href="{{route('colaborador.informerendimentos')}}">Informe de Rendimentos</a>
                  <a class="dropdown-item" href="{{route('colaborador.programainclusao')}}">Programa FAPEU de Inclusão</a>
                  <a class="dropdown-item" href="{{route('colaborador.vagasdisponiveis')}}">Vagas Disponíveis</a>
                </div>
              </li>
            </p>
            <p>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fale Conosco
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('faleconosco.contato')}}">Contato</a>
                  <a class="dropdown-item" href="{{route('faleconosco.canaldenuncia')}}">Canal de Comunicações e Denúncias</a>
                </div>
              </li>
            </p>
          </ul>
        </div>
        <div style="position:absolute;top:45px;right:45px;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <!-- <div class="botao-direita">
            <a href="">
              <div class="rounded-pill p-3 bg-light font-weight-bold text-center" style="color: #099072;" id="tragaseuprojeto">Traga seu projeto para a FAPEU</div>
            </a>
          </div>
      </div> -->
    </nav>
  </header>


  <main class="bg-principal">
    @yield('conteudo')
  </main>

  <div>
    @include('layout.footer')
  </div>

  <!-- <script>
 function toggleButtonVisibility() {
    const button = document.getElementById("tragaseuprojeto");
    if (window.innerWidth < 1550) {
      button.style.display = "none";
    } else {
      button.style.display = "block";
    }
  }

  // Executa a função ao carregar a página e ao redimensionar a janela
  window.addEventListener("load", toggleButtonVisibility);
  window.addEventListener("resize", toggleButtonVisibility);
</script> -->

  <script>
    const toggleAccessibilityButton = document.getElementById('toggle-accessibility');
    const accessibilityButtonsContainer = document.getElementById('accessibility-buttons-container');

    toggleAccessibilityButton.addEventListener('click', () => {
      accessibilityButtonsContainer.classList.toggle('d-none');
    });



    const increaseFontButton = document.getElementById('increase-font');
    const decreaseFontButton = document.getElementById('decrease-font');
    const toggleContrastButton = document.getElementById('toggle-contrast');
    const toggleGrayScaleButton = document.getElementById('toggle-grayscale');
    const resetAccessibilityButton = document.getElementById('reset-accessibility');


    //tamanho da fonte
    const originalFontSize = window.getComputedStyle(document.body).fontSize;
    let fontSize = parseInt(window.getComputedStyle(document.body).fontSize);

    increaseFontButton.addEventListener('click', () => {
      fontSize += 2;
      document.body.style.fontSize = fontSize + 'px';

      document.querySelectorAll('h1, h2, h3, h4, h5, h6').forEach(header => {
        let headerFontSize = parseInt(window.getComputedStyle(header).fontSize);
        header.style.fontSize = (headerFontSize + 2) + 'px';
      });
    });

    decreaseFontButton.addEventListener('click', () => {
      if (fontSize > 10) {
        fontSize -= 2;
        document.body.style.fontSize = fontSize + 'px';

        document.querySelectorAll('h1, h2, h3, h4, h5, h6').forEach(header => {
          let headerFontSize = parseInt(window.getComputedStyle(header).fontSize);
          header.style.fontSize = (headerFontSize - 2) + 'px';
        });
      }
    });



    resetAccessibilityButton.addEventListener('click', () => {
      document.querySelectorAll('h1, h2, h3, h4, h5, h6, p, div:not(#accessibility-buttons-container):not(#naoalterar), span, a').forEach(el => {
        el.style.fontSize = ''; // Remove a personalização, volta ao padrão do CSS
        el.style.fontFamily = ''; // Remove a personalização da fonte
        document.body.style.fontSize = '';
      });

      // Remove classes de acessibilidade
      document.body.classList.remove('high-contrast', 'grayscale');
      // Remove a classe de fundo dos botões
      toggleContrastButton.classList.remove('bg-acessibilidade2');
      toggleGrayScaleButton.classList.remove('bg-acessibilidade2');
      toggleUnderlineLinksButton.classList.remove('bg-acessibilidade2');
      setReadableFontButton.classList.remove('bg-acessibilidade2');

    });
  </script>
  <script>
    toggleContrastButton.addEventListener('click', () => {
      document.body.classList.toggle('high-contrast');
    });
  </script>
  <script>
    toggleGrayScaleButton.addEventListener('click', () => {
      const isActive = document.body.classList.toggle('grayscale');
      toggleGrayScaleButton.classList.toggle('bg-acessibilidade2', isActive);
    });
  </script>
  <script>
    function toggleElements() {
      const tragaprojetodentro = document.getElementById("tragaprojetodentro");
      const tragaprojetofora = document.getElementById("tragaprojetofora");

      if (window.matchMedia("(max-width: 993px)").matches) {
        tragaprojetodentro.classList.remove("d-none"); // Exibe o elemento
        tragaprojetodentro.classList.add("d-block");

        tragaprojetofora.classList.remove("d-block"); // Oculta o outro elemento
        tragaprojetofora.classList.add("d-none");
      } else {
        tragaprojetodentro.classList.remove("d-block"); // Oculta o elemento
        tragaprojetodentro.classList.add("d-none");

        tragaprojetofora.classList.remove("d-none"); // Exibe o outro elemento
        tragaprojetofora.classList.add("d-block");
      }
    }

    // Chama a função ao carregar a página e quando a janela é redimensionada
    window.addEventListener("load", toggleElements);
    window.addEventListener("resize", toggleElements);
  </script>
</body>

</html>