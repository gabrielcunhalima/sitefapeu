<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script src='https://painel.facillgpd.com.br/api/plugin/cookies/67cee18ae62bd7f979bf4438?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbXByZXNhIjoiNjdhY2VmMGZmZGIxYTM0YmUxN2NkN2I4IiwiaWF0IjoxNzQzNDI1MzkzfQ.TgT5mkwCX5apFLqc575DH0aLuwrdShCK2FXAlO-OcUg'></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>@yield('title') - Fundação de Amparo à Pesquisa e Extensão Universitária</title>
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

  @stack('styles')

</head>

<body>
  <header class="main-header shownav">
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
                <li><a class="dropdown-item" href="http://dashboard.fapeu.org.br" target="_blank">Relatório Gerencial<i class="bi bi-box-arrow-up-right me-1"></i></a></li>
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
                <li><a class="dropdown-item" href="{{route('politica.comites')}}">Comissões e Comitês Institucionais</a></li>
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
                <li><a class="dropdown-item" href="{{route('fornecedor.espacofornecedor')}}">Portal do Fornecedor</a></li>
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
                <li><a class="dropdown-item" href="https://webmail.fapeu.org.br" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>Zimbra</a></li>
                <li><a class="dropdown-item" href="https://mail.google.com" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>Gmail</a></li>
                <li><a class="dropdown-item" href="https://eventos.fapeu.com.br/integridade/public/"><i class="bi bi-box-arrow-up-right me-1"></i>Programa de Integridade</a></li>
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
  Request::route()->getName() !== 'licitacoes.listar' &&
  Request::route()->getName() !== 'calculo.menu' &&
  Request::route()->getName() !== 'calculo.calculobruto' &&
  Request::route()->getName() !== 'calculo.calculoliquido')
  <div class="page-header">
    <div class="container">
      <h1>{{ $titulo }}</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage.home') }}">Início</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $titulo }}</li>
        </ol>
      </nav>
    </div>
  </div>
  @endif

  @if (Request::route()->getName() !== 'noticias.noticiasleitura' &&
  Request::route()->getName() !== 'homepage.home' &&
  Request::route()->getName() !== 'calculo.calculoliquido' &&
  Request::route()->getName() !== 'calculo.calculobruto' &&
  Request::route()->getName() !== 'calculo.calculo')
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
    /* ================================================
       NAVBAR – FAPEU (Redesign Moderno)
    ================================================ */
    .main-header {
      background: linear-gradient(135deg, #044313 0%, #06551A 58%, #0d7a2a 100%);
      position: sticky;
      top: 0;
      z-index: 1040;
      transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1),
        background 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 2px 20px rgba(0, 0, 0, 0.18);
    }

    .main-header.scrolled {
      background: linear-gradient(135deg, #033810 0%, #055018 58%, #0a6a24 100%);
      box-shadow: 0 4px 28px rgba(0, 0, 0, 0.30);
    }

    .top-bar {
      font-size: 0.93rem;
      font-family: 'Montserrat', sans-serif;
    }

    /* ---- Logo ---- */
    .navbar-brand {
      transition: opacity 0.25s ease, transform 0.25s ease;
    }

    .navbar-brand:hover {
      opacity: 0.88;
    }

    /* ---- Nav Links ---- */
    .shownav {
      color: rgba(255, 255, 255, 0.93) !important;
    }

    .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.93) !important;
      padding: 28px 14px;
      font-weight: 500;
      font-size: 0.9rem;
      letter-spacing: 0.01em;
      position: relative;
      transition: color 0.25s ease;
    }

    /* Underline animado */
    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      bottom: 16px;
      left: 14px;
      right: 14px;
      height: 2px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 2px;
      transform: scaleX(0);
      transform-origin: center;
      transition: transform 0.26s ease;
    }

    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after {
      transform: scaleX(1);
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: #ffffff !important;
    }

    /* ---- Dropdown ---- */
    .dropdown-menu {
      border: none;
      border-radius: 12px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.13), 0 2px 8px rgba(0, 0, 0, 0.07);
      padding: 8px;
      min-width: 230px;
      margin-top: 4px;
      background: #ffffff;
      border-top: 3px solid #06551A;
    }

    .dropdown-item {
      padding: 10px 16px;
      font-size: 0.88rem;
      font-weight: 400;
      color: #2d2d2d;
      border-radius: 8px;
      transition: background 0.22s ease, color 0.22s ease, padding-left 0.22s ease;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
      background: linear-gradient(135deg, rgba(6, 85, 26, 0.09) 0%, rgba(13, 122, 42, 0.06) 100%);
      color: #06551A;
      padding-left: 15px;
    }

    .dropdown-item i {
      color: #06551A;
      font-size: 0.85rem;
      width: 16px;
      text-align: center;
    }

    .dropdown-menu.animate {
      animation: navDropIn 0.22s cubic-bezier(0.4, 0, 0.2, 1) both;
    }

    @keyframes navDropIn {
      from {
        opacity: 0;
        transform: translateY(10px) scale(0.97);
      }

      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .slideIn {
      animation-name: navDropIn;
    }

    /* ---- Toggler Mobile ---- */
    .navbar-toggler {
      border: none;
      padding: 8px 10px;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.12);
      color: #fff;
      transition: background 0.25s ease;
    }

    .navbar-toggler:hover {
      background: rgba(255, 255, 255, 0.22);
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* ---- Mobile Menu ---- */
    @media (max-width: 991.98px) {
      .navbar-nav .nav-link {
        padding: 13px 4px;
        font-size: 0.95rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      }

      .navbar-nav .nav-link::after {
        display: none;
      }

      .dropdown-menu {
        background: rgba(3, 58, 16, 0.97);
        border-radius: 10px;
        border-top: none;
        border-left: 3px solid rgba(255, 255, 255, 0.22);
        box-shadow: none;
        padding: 4px 0;
        margin: 0 0 6px 2px;
      }

      .dropdown-item {
        color: rgba(255, 255, 255, 0.88);
        padding: 10px 16px;
        border-radius: 6px;
        font-size: 0.85rem;
      }

      .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.10);
        color: #fff;
      }

      .dropdown-item i {
        color: rgba(255, 255, 255, 0.65);
      }
    }

    /* ---- Page Header ---- */
    .page-header {
      background: linear-gradient(135deg, #f1f5f2 0%, #e5ede7 50%, #ddeae0 100%);
      border-bottom: 1px solid rgba(6, 85, 26, 0.13);
      padding: 28px 0 22px;
    }

    .page-header h1 {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: #1a2e1d;
      margin-bottom: 4px;
    }

    .breadcrumb {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      background: transparent;
      padding: 0;
      margin: 8px 0 0;
      list-style: none;
      gap: 0;
    }

    .breadcrumb-item {
      display: flex;
      align-items: center;
      font-size: 0.88rem;
      line-height: 1;
    }

    .breadcrumb-item a {
      color: #06551A;
      text-decoration: none;
      font-weight: 500;
      font-size: 0.88rem;
      transition: color 0.2s ease;
      line-height: 1;
    }

    .breadcrumb-item a:hover {
      color: #044313;
    }

    .breadcrumb-item.active {
      color: #5a7060;
      font-size: 0.88rem;
      line-height: 1;
    }

    .breadcrumb-item+.breadcrumb-item::before {
      content: "›";
      color: #8aab8e;
      font-size: 1rem;
      padding: 0 6px;
      display: inline-flex;
      align-items: center;
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const header = document.querySelector('.main-header');
      if (!header) return;
      window.addEventListener('scroll', function() {
        header.classList.toggle('scrolled', window.scrollY > 50);
      }, {
        passive: true
      });
    });
  </script>
  <script src='https://painel.facillgpd.com.br/api/plugin?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbXByZXNhIjoiNjdhY2VmMGZmZGIxYTM0YmUxN2NkN2I4IiwiY29uZmlnUmVxdWlzaWNhbyI6IjY3YWNlZjEyZmRiMWEzNGJlMTdjZGQwNCIsImlhdCI6MTc0MzQyNTQyOX0.50fBzDOU3r1_ASg8HotqPnMJ_YDRQpv-iuNoXM4KTfQ'></script>
</body>

</html>