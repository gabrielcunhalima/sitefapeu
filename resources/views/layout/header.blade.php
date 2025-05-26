<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script src='https://painel.facillgpd.com.br/api/plugin/cookies/67cee18ae62bd7f979bf4438?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbXByZXNhIjoiNjdhY2VmMGZmZGIxYTM0YmUxN2NkN2I4IiwiaWF0IjoxNzQzNDI1MzkzfQ.TgT5mkwCX5apFLqc575DH0aLuwrdShCK2FXAlO-OcUg'></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>@yield('title') | Fundação de Amparo à Pesquisa e Extensão Universitária</title>
  <link rel="shortcut icon" href="{{ asset('images/fapeu_ico.ico') }}">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HWYDQ8SY8W"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-HWYDQ8SY8W');
  </script>

  <script>
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      const userwayScript = document.createElement('script');
      userwayScript.src = "https://cdn.userway.org/widget.js";
      userwayScript.setAttribute("data-account", "YinJfS8smr");
      document.head.appendChild(userwayScript);
    }
  </script>

  @turnstileScripts()

</head>

<body>
  <header class="main-header shadow-sm shownav">
    <nav class="navbar navbar-expand-lg py-0">
      <div class="container">
        <a class="navbar-brand py-2" href="{{ route('homepage.home') }}">
          <img src="{{ asset('images/logo2branca.png') }}" alt="FAPEU" height="80">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
          aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse top-bar" id="navbarMain">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle shownav shownav" href="#" id="institutionalDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Institucional
              </a>
              <ul class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="institutionalDropdown">
                <li><a class="dropdown-item" href="{{route('quemsomos.sobre')}}">Sobre a FAPEU</a></li>
                <li><a class="dropdown-item" href="{{route('quemsomos.estatuto')}}">Estatuto</a></li>
                <li><a class="dropdown-item" href="{{route('quemsomos.regimentointerno')}}">Regimento Interno</a></li>
                <li><a class="dropdown-item" href="{{route('quemsomos.organograma')}}">Organograma</a></li>
                <li><a class="dropdown-item" href="{{route('quemsomos.administracao')}}">Administração</a></li>
                <li><a class="dropdown-item" href="{{route('quemsomos.identidadevisual')}}">Identidade Visual</a></li>
                <li><a class="dropdown-item" href="{{route('quemsomos.revistafapeu')}}">Revista FAPEU</a></li>
                <li><a class="dropdown-item" href="{{route('noticias.noticiasrecentes')}}">Notícias</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle shownav" href="#" id="projectsDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Projetos
              </a>
              <ul class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="projectsDropdown">
                <li><a class="dropdown-item" href="{{route('projetos.captacao')}}">Captação e Implantação de Recursos</a></li>
                <!-- <li><a class="dropdown-item" href="{{route('projetos.manualcompras')}}">Manual de Compras</a></li> -->
                <!-- <li><a class="dropdown-item" href="{{route('projetos.formulariosprojetos')}}">Formulários</a></li> -->
                <li><a class="dropdown-item" href="{{route('projetos.menuprojetos')}}">Gestão de Projetos</a></li>
                <li><a class="dropdown-item" href="{{route('projetos.espacocoordenador')}}">Espaço do Coordenador</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('transparencia.projetostransparencia')}}">
                Transparência
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle shownav" href="#" id="policiesDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Políticas
              </a>
              <ul class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="policiesDropdown">
                <li><a class="dropdown-item" href="{{route('politica.anticorrupcao')}}">Política Anticorrupção</a></li>
                <li><a class="dropdown-item" href="{{route('politica.integridade')}}">Programa de Integridade</a></li>
                <li><a class="dropdown-item" href="{{route('politica.codigoconduta')}}">Código de Conduta</a></li>
                <li><a class="dropdown-item" href="{{route('politica.comites')}}">Comitê de Ética e <br>Comitê de Gestão de Riscos</a></li>
                <li><a class="dropdown-item" href="{{route('politica.lgpd') }}">LGPD</a></li>
                <li><a class="dropdown-item" href="{{route('politica.politicaprivacidade')}}">Política de Privacidade</a></li>
                <li><a class="dropdown-item" href="{{route('politica.politicacookies')}}">Política de Cookies</a></li>
                <li><a class="dropdown-item" href="{{route('politica.boaspraticas')}}">Boas Práticas</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle shownav" href="#" id="legDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Legislação e Normas
              </a>
              <ul class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="legDropdown">
                <li><a class="dropdown-item" href="{{route('legislacao.legislacao')}}">Legislação</a></li>
                <li><a class="dropdown-item" href="{{route('legislacao.normas')}}">Normas Internas</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle shownav" href="#" id="supplierDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Fornecedor
              </a>
              <ul class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="supplierDropdown">
                <li><a class="dropdown-item" href="{{route('fornecedor.selecoespublicas')}}">Seleções Públicas</a></li>
                <li><a class="dropdown-item" href="{{route('fornecedor.dispensa')}}">Dispensa de Licitação</a></li>
                <li><a class="dropdown-item" href="{{route('fornecedor.inexigibilidade')}}">Inexigibilidade de Licitação</a></li>
                <li><a class="dropdown-item" href="{{route('fornecedor.espacofornecedor')}}">Espaço do Fornecedor</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle shownav" href="#" id="collaboratorDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Colaborador
              </a>
              <ul class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="collaboratorDropdown">
                <li><a class="dropdown-item" href="http://drhflow.fapeu.com.br:8080/DRHFlow" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>DRHFlow</a></li>
                <li><a class="dropdown-item" href="http://admflow.fapeu.com.br:8080/ADMFlow" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>ADMFlow</a></li>
                <li><a class="dropdown-item" href="https://webmail.fapeu.org.br" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>WebMail</a></li>
                <li><a class="dropdown-item" href="{{route('colaborador.formularioscolaborador')}}">Formulários</a></li>
                <li><a class="dropdown-item" href="{{route('colaborador.acordocoletivo')}}">Acordo Coletivo</a></li>
                <li><a class="dropdown-item" href="{{route('colaborador.informerendimentos')}}">Informe de Rendimentos</a></li>
                <li><a class="dropdown-item" href="{{route('colaborador.programainclusao')}}">Programa de Inclusão</a></li>
                <li><a class="dropdown-item" href="{{route('colaborador.vagasdisponiveis')}}">Vagas Disponíveis</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle shownav" href="#" id="contactDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Contato
              </a>
              <ul class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="contactDropdown">
                <li><a class="dropdown-item" href="{{route('faleconosco.contato')}}">Fale Conosco</a></li>
                <li><a class="dropdown-item" href="{{route('faleconosco.canaldenuncia')}}">Canal de Denúncias</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  @if (Request::route()->getName() !== 'noticias.noticiasleitura' &&
  Request::route()->getName() !== 'homepage.home' &&
  Request::route()->getName() !== 'colaborador.programainclusao' &&
  Request::route()->getName() !== 'projetos.calculoressarcimento' &&
  Request::route()->getName() !== 'projetos.instituicoesapoiadas' &&
  Request::route()->getName() !== 'projetos.orientacoescontato' &&
  Request::route()->getName() !== 'licitacoes.form' &&
  Request::route()->getName() !== 'licitacoes.listar')
  <div class="page-header py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="fw-bold mb-3">{{ $titulo }}</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('homepage.home') }}">Início</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $titulo }}</li>
              @if (Route::currentRouteName() === 'noticias.editarnoticias')
              <li class="breadcrumb-item">
                <a href="{{ route('admin.menu') }}">Retornar ao painel administrativo</a>
              </li>
              @endif
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  @endif

  @if (Request::route()->getName() !== 'noticias.noticiasleitura' &&
  Request::route()->getName() !== 'homepage.home')
  <main class="my-4">
    @yield('conteudo')
  </main>
  @else
  <main>
    @yield('conteudo')
  </main>
  @endif

  <div>
    @include('layout.footer')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .top-bar {
      font-size: 1.0rem;
      font-family: 'Montserrat', sans-serif;
    }

    .main-header {
      background-color: #06551A;
    }

    .navbar-nav .nav-link {
      color: #fff;
      padding: 2rem 1rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .shownav {
      color: white !important;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: #fff;
      background-color: rgba(255, 255, 255, 0.1);
    }

    .dropdown-menu {
      border: none;
      border-radius: 0.5rem;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      padding: 1rem 0;
      min-width: 220px;
      margin-top: 0;
    }

    .dropdown-item {
      padding: 0.75rem 1.5rem;
      font-weight: 400;
      color: #333;
      transition: all 0.2s ease;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
      background-color: rgba(6, 85, 26, 0.1);
      color: #06551A;
    }

    .dropdown-item i {
      margin-right: 0.5rem;
      color: #06551A;
    }

    .dropdown-menu.animate {
      animation-duration: 0.3s;
      animation-fill-mode: both;
    }

    @keyframes slideIn {
      0% {
        transform: translateY(1rem);
        opacity: 0;
      }

      100% {
        transform: translateY(0rem);
        opacity: 1;
      }
    }

    .slideIn {
      animation-name: slideIn;
    }

    @media (max-width: 991.98px) {
      .navbar-nav .nav-link {
        padding: 1rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      }

      .dropdown-menu {
        background-color: rgba(6, 85, 26, 0.9);
        border: none;
        box-shadow: none;
        padding: 0;
      }

      .dropdown-item {
        color: #fff;
        padding: 0.75rem 1rem 0.75rem 2rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      }

      .dropdown-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
      }

      .dropdown-item i {
        color: #fff;
      }
    }

    .page-header {
      background: linear-gradient(135deg, #f5f5f5 0%, #e9ecef 100%);
      border-bottom: 1px solid #dee2e6;
    }

    .navbar-toggler {
      border: none;
      padding: 0.25rem 0.75rem;
      font-size: 1.25rem;
      background-color: transparent;
      color: #fff;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .breadcrumb {
      background: transparent;
      padding: 0;
      margin: 0;
    }

    .breadcrumb-item a {
      color: #06551A;
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #6c757d;
    }

    .breadcrumb-item+.breadcrumb-item::before {
      content: "›";
      color: #6c757d;
    }
  </style>
  <script src='https://painel.facillgpd.com.br/api/plugin?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbXByZXNhIjoiNjdhY2VmMGZmZGIxYTM0YmUxN2NkN2I4IiwiY29uZmlnUmVxdWlzaWNhbyI6IjY3YWNlZjEyZmRiMWEzNGJlMTdjZGQwNCIsImlhdCI6MTc0MzQyNTQyOX0.50fBzDOU3r1_ASg8HotqPnMJ_YDRQpv-iuNoXM4KTfQ'></script>
</body>

</html>