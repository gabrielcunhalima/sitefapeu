<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

  <!-- jQuery and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap and Icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- Slack -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

  <!-- Custom CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('images/fapeu_ico.ico') }}">

  <!--Acessibilidade -->
  <script src="https://cdn.userway.org/widget.js" data-account="YinJfS8smr"></script>


  <title>@yield('title')</title>
</head>

<style>
  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }

  .navbar-toggler {
    border: none;
    background-color: transparent;
  }

  .jumbotron-custom {
    background: linear-gradient(45deg, rgba(183, 182, 182, 1) 0%, rgba(190, 190, 190, 1) 17%, rgba(220, 228, 225, 1) 33%, rgba(200, 200, 200, 1) 55%, rgba(210, 210, 210, 1) 81%, rgba(211, 211, 211, 0.39) 100%),
    url('{{ asset("images/Paginas/" . $imagem) }}');
    background-size: contain;
    background-position: right;
    background-repeat: no-repeat;
    font-weight: bold;
  }

  @media (max-width: 876px) {
    .jumbotron-custom {
      background: linear-gradient(45deg, rgba(183, 182, 182, 1) 0%, rgba(190, 190, 190, 1) 17%, rgba(220, 228, 225, 1) 40%, rgba(200, 200, 200, 1) 60%, rgba(211, 211, 211, 0.3897934173669467) 100%),
      url('{{ asset("images/Paginas/" . $imagem) }}');
      background-size: contain;
      background-position: right;
      background-repeat: no-repeat;
    }
  }

  a {
    text-decoration: none !important;
  }

  .link-hover {
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .link-hover:hover {
    transform: translateY(-10px);
    background-color: #0F4B2F;
  }
</style>

<body>

  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-custom font-montserrat">
      <div class="container">
        <div class="logofapeu">
          <a class="navbar-brand logofapeu" href="{{ route('homepage.home') }}">
            <img src="{{ asset('images/logo2branca.png') }}" alt="Logo Fapeu" height="110">
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
                  <a class="dropdown-item" href="{{route('noticias.noticiasrecentes')}}">Notícias</a>
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
                  <a class="dropdown-item" href="{{route('politica.comites')}}">Comitê de Ética e Comitê<br> de Gestão de Riscos</a>
                  <a class="dropdown-item" href="https://www.minhalgpd.com.br/fapeu"><i class="bi bi-box-arrow-up-right"></i> LGPD</a>
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
                  <a class="dropdown-item" href="{{route('fornecedor.inexigibilidade')}}">Inexigibilidade</a>
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
                  <a class="dropdown-item" href="http://drhflow.fapeu.com.br:8080/DRHFlow" target="_blank"><i class="bi bi-box-arrow-up-right"></i> DRHFlow</a>
                  <a class="dropdown-item" href="http://admflow.fapeu.com.br:8080/ADMFlow" target="_blank"><i class="bi bi-box-arrow-up-right"></i> ADMFlow</a>
                  <a class="dropdown-item" href="https://webmail.fapeu.org.br" target="_blank"><i class="bi bi-box-arrow-up-right"></i> WebMail</a>
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
          </div> -->
      </div>
    </nav>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  @if (Request::route()->getName() !== 'noticias.noticiasleitura' && Request::route()->getName() !== 'noticias.noticiasrecentes' && Request::route()->getName() !== 'homepage.home' && Request::route()->getName() !== 'transparencia.projetostransparencia' && Request::route()->getName() !== 'colaborador.programainclusao' && Request::route()->getName() !== 'homepage.home' && Request::route()->getName() !== 'fornecedor.adicionarlicitacao' && Request::route()->getName() !== 'colaborador.informerendimentos')
  <div class="py-5 jumbotron-custom">
    <div class="container">
      <h1 class="font-weight-bold">{{$titulo}}</h1>
    </div>
  </div>
  @endif
  <main class="pt-4">
    @yield('conteudo')
  </main>
  <div class="pt-5">
    @include('layout.footer')
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script> -->

</body>

</html>