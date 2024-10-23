

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

  <!-- jQuery and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <link href="{{ asset('../css/app.css') }}" rel="stylesheet">

  <title>FAPEU</title>
  <style>
    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
    }

    a:hover {
      text-decoration: none;
    }

    a:active {
      text-decoration: none;
    }

    .card-deck {
      display: flex;
      flex-wrap: wrap;
      align-items: stretch;
    }

    .card {
      flex: 1 0 auto;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .navbar-toggler {
      border: none;
      background-color: transparent;
    }
  </style>
</head>

<body>
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-custom shadow" style="font-family: 'Montserrat', sans-serif;">
      <div class="container-fluid">
        <div class="logofapeu">
          <a class="navbar-brand logofapeu" href="{{ route('homepage.home') }}">
            <img src="..\images\logo2branca.png" alt="Logo Fapeu" height="75">
          </a>
        </div>
        <div class="d-flex justify-content-end">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <p>
              <li class="nav-item dropdown text-white">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Quem somos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('quemsomos.sobre')}}">Sobre a FAPEU</a>
                  <a class="dropdown-item" href="{{route('quemsomos.estatuto')}}">Estatuto</a>
                  <a class="dropdown-item" href="{{route('quemsomos.regimentointerno')}}">Regimento Interno</a>
                  <a class="dropdown-item" href="{{route('quemsomos.organograma')}}">Organograma</a>
                  <a class="dropdown-item" href="{{route('quemsomos.administracao')}}">Administração</a>
                  <a class="dropdown-item" href="{{route('quemsomos.identidadevisual')}}">Identidade Visual</a>
                  <a class="dropdown-item" href="{{route('quemsomos.revistafapeu')}}">Revista FAPEU</a>
                </div>
              </li>
            </p>
            <p>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Projetos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">*Captação de Recursos e Oportunidade</a>
                  <a class="dropdown-item" href="{{route('projetos.espacocoordenador')}}">Espaço Coordenador</a>
                  <a class="dropdown-item" href="{{route('projetos.manualcompras')}}">Manual de Compras e Contratações</a>
                  <a class="dropdown-item" href="{{route('projetos.formulariosprojetos')}}">Formulários</a>
                  <a class="dropdown-item" href="{{route('projetos.projetos')}}">Projetos</a>
                </div>
              </li>
            </p>
            <p>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Transparência
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('transparencia.projetostransparencia')}}">Projetos</a>
                  <a class="dropdown-item" href="#">*Relatório Técnico Semestral</a>
                  <a class="dropdown-item" href="{{route('transparencia.relanualgestao')}}">Relatório Anual de Gestão</a>
                  <a class="dropdown-item" href="{{route('transparencia.avaliacaodesempenho')}}">Avaliação de Desempenho</a>
                  <a class="dropdown-item" href="{{route('transparencia.fiscal_auditorias')}}">Fiscalização e Auditorias</a>
                  <a class="dropdown-item" href="{{route('transparencia.demonstracoescontabeis')}}">Demonstrações Contábeis</a>
                  <a class="dropdown-item" href="{{route('transparencia.compras')}}">Compras, Contratos e Aquisições</a>
                  <a class="dropdown-item" href="{{route('transparencia.pagamentos')}}">Pagamentos Efetuados PF/PJ</a>
                  <a class="dropdown-item" href="{{route('transparencia.selecoespublicas')}}">Seleções Públicas</a>
                  <a class="dropdown-item" href="{{route('transparencia.habilitacaojuridica')}}">Habilitação Jurídica<br> e Regularidade Fiscal</a>
                  <a class="dropdown-item" href="{{route('transparencia.faq')}}">FAQ - Perguntas Frequentes</a>
                </div>
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
                  <a class="dropdown-item" href="{{route('legislacao.normas')}}">Normas Internas FAPEU e Instituições</a>
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
                  <a class="dropdown-item" href="{{route('colaborador.drhflow')}}">DRHFlow</a>
                  <a class="dropdown-item" href="{{route('colaborador.ADMFlow')}}">ADMFlow</a>
                  <a class="dropdown-item" href="{{route('colaborador.WebMail')}}">WebMail</a>
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
                  <a class="dropdown-item" href="#">Canal de Comunicações e Denúncias</a>
                </div>
              </li>
            </p>
          </ul>
          <div class="rounded p-3 bg-light font-weight-bold" style="color: #099072;" id="tragaseuprojeto">Traga seu projeto para a FAPEU</div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Bootstrap JS (inclui Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <div>
    @yield('inicio')
  </div>
  <main class="bg-principal pt-4">
    @yield('conteudo')
  </main>
  <div>
    @include('layout.footer')
  </div>
</body>

<script>
function toggleElements() {
    const tragaseuprojeto = document.getElementById("tragaseuprojeto");

    if (window.matchMedia("(max-width: 780px)").matches) {
      // tela pequena
      tragaseuprojeto.classList.remove("tragaseuprojeto");
    } else {
      // tela maior q a pequena
      tragaseuprojeto.classList.add("tragaseuprojeto");
    }
  }

  window.addEventListener("load", toggleElements);
  window.addEventListener("resize", toggleElements);
</script>
</body>

</html>
