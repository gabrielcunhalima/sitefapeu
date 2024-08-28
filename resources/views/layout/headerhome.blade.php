<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>@yield('title')</title>
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
</head>
<body>
    <header>
      <div class="branco container forceright">
        <span class="cabecalho"><i class="bi bi-telephone"></i> (48) 3331-7400</span>
        <span class="cabecalho"><i class="bi bi-envelope"></i> contato@fapeu.org.br</span>
        <a href="https://instagram.com/@fapeu_" class="sociais" target="_blank"><i class="bi bi-instagram branco"></i></a>
        <a href="https://www.facebook.com/fapeu/?locale=pt_BR" class="sociais" target="_blank"> <i class="bi bi-facebook branco"></i></a>
        <a href="https://www.linkedin.com/company/fapeu/" class="sociais" target="_blank"><i class="bi bi-linkedin branco"></i></a>
      </div>
    </header>
    <div class="mb-3">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
          <div class="containerheader">
            <img src="..\public\images\logo2.png" alt="logofapeu" class="logo">
            <div class="collapse navbar-collapse justify-content-flex-start" id="navbarSupportedContent">
            <a class="navbar-brand homepage" href="http://localhost:8080/sitefapeu/public/home">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <ul class="navbar-nav forceleft">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Quem somos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('quemsomos.sobre')}}">Sobre a FAPEU</a>
                    <a class="dropdown-item" href="#">Estatuto</a>
                    <a class="dropdown-item" href="#">Regimento Interno</a>
                    <a class="dropdown-item" href="{{route('quemsomos.organograma')}}">Organograma</a>
                    <a class="dropdown-item" href="{{route('quemsomos.administracao')}}">Administração</a>
                    <a class="dropdown-item" href="{{route('quemsomos.identidadevisual')}}">Identidade Visual</a>
                    <a class="dropdown-item" href="{{route('quemsomos.revistafapeu')}}">Revista FAPEU</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projetos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Captação de Recursos e Oportunidade</a>
                    <a class="dropdown-item" href="{{route('projetos.espacocoordenador')}}">Espaço Coordenador</a>
                    <a class="dropdown-item" href="#">Manual de Compras e Contratações</a>
                    <a class="dropdown-item" href="{{route('projetos.formulariosprojetos')}}">Formulários</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Transparência
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Projetos</a>
                    <a class="dropdown-item" href="#">Relatório Técnico Semestral</a>
                    <a class="dropdown-item" href="{{route('transparencia.relanualgestao')}}">Relatório Anual de Gestão</a>
                    <a class="dropdown-item" href="{{route('transparencia.avaliacaodesempenho')}}">Avaliação de Desempenho</a>
                    <a class="dropdown-item" href="{{route('transparencia.fiscal_auditorias')}}">Fiscalização e Auditorias</a>
                    <a class="dropdown-item" href="{{route('transparencia.demonstracoescontabeis')}}">Demonstrações Contábeis</a>
                    <a class="dropdown-item" href="{{route('transparencia.compras')}}">Compras, Contratos e Aquisições</a>
                    <a class="dropdown-item" href="{{route('transparencia.pagamentos')}}">Pagamentos Efetuados PF/PJ</a>
                    <a class="dropdown-item" href="{{route('transparencia.selecoespublicas')}}">Seleções Públicas</a>
                    <a class="dropdown-item" href="{{route('transparencia.habilitacaojuridica')}}">Habilitação Jurídica e Regularidade Fiscal</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Políticas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('politica.anticorrupcao')}}">Política Anticorrupção</a>
                    <a class="dropdown-item" href="{{route('politica.integridade')}}">Programa de Integridade</a>
                    <a class="dropdown-item" href="{{route('politica.codigoconduta')}}">Código de Conduta</a>
                    <a class="dropdown-item" href="{{route('politica.comiteetica')}}">Comitê de Ética e Comitê Gestão de Riscos</a>
                    <a class="dropdown-item" href="#">LGPD</a>
                    <a class="dropdown-item" href="#">Política de Privacidade</a>
                    <a class="dropdown-item" href="#">Política de Cookies</a>
                    <a class="dropdown-item" href="{{route('politica.boaspraticas')}}">Boas Práticas</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Legislação e Normas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('legislacao.legislacao')}}">Legislação</a>
                    <a class="dropdown-item" href="{{route('legislacao.normas')}}">Normas Internas FAPEU e Instituições</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fornecedor
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('transparencia.selecoespublicas')}}">Seleções Públicas</a>
                    <a class="dropdown-item" href="{{route('fornecedor.dispensa')}}">Dispensa de Licitação</a>
                    <a class="dropdown-item" href="{{route('fornecedor.inexibilidade')}}">Inexibilidade</a>
                    <a class="dropdown-item" href="{{route('fornecedor.espacofornecedor')}}">Espaço do Fornecedor</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Colaborador
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">DRHFlow</a>
                    <a class="dropdown-item" href="#">ADMFlow</a>
                    <a class="dropdown-item" href="#">WebMail</a>
                    <a class="dropdown-item" href="{{route('colaborador.formularioscolaborador')}}">Formulários</a>
                    <a class="dropdown-item" href="{{route('colaborador.acordocoletivo')}}">Acordo Coletivo</a>
                    <a class="dropdown-item" href="{{route('colaborador.informerendimentos')}}">Informe de Rendimentos</a>
                    <a class="dropdown-item" href="{{route('colaborador.programainclusao')}}">Programa FAPEU de Inclusão</a>
                    <a class="dropdown-item" href="#">Vagas Disponíveis</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contato
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('faleconosco.contato')}}">Contato</a>
                    <a class="dropdown-item" href="#">Canal de Comunicações e Denúncias</a>
                  </div>
                </li>
              </ul>
              <form class="d-flex mx-auto pesquisa">
                <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div>
          </div>
      </nav>
    </div>

    <div>
        @yield('inicio')
    </div>
    
    <div>
        @yield('conteudo')
    </div>


<footer>
    @include('layout.footer')
</footer>
</body>
</html>