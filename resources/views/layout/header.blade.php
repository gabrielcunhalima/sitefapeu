<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- jQuery and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Custom CSS -->
  <link href="{{ asset('../css/app.css') }}" rel="stylesheet">

  <title>FAPEU</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid row justify-content-md-center">
        <div class="col-1">
          <a class="navbar-brand d-flex justify-content-end" href="{{ route('homepage.home') }}">
            <img src="..\images\logo2branca.png" alt="Logo Fapeu" height="75">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-auto">
          <ul class="navbar-nav forceleft text-white">
            <li class="nav-item dropdown text-white">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Projetos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">*Captação de Recursos e Oportunidade</a>
                <a class="dropdown-item" href="{{route('projetos.espacocoordenador')}}">Espaço Coordenador</a>
                <a class="dropdown-item" href="{{route('projetos.manualcompras')}}">Manual de Compras e Contratações</a>
                <a class="dropdown-item" href="{{route('projetos.formulariosprojetos')}}">Formulários</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Transparência
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">*Projetos</a>
                <a class="dropdown-item" href="#">*Relatório Técnico Semestral</a>
                <a class="dropdown-item" href="{{route('transparencia.relanualgestao')}}">Relatório Anual de Gestão</a>
                <a class="dropdown-item" href="{{route('transparencia.avaliacaodesempenho')}}">Avaliação de Desempenho</a>
                <a class="dropdown-item" href="{{route('transparencia.fiscal_auditorias')}}">Fiscalização e Auditorias</a>
                <a class="dropdown-item" href="{{route('transparencia.demonstracoescontabeis')}}">Demonstrações Contábeis</a>
                <a class="dropdown-item" href="{{route('transparencia.compras')}}">Compras, Contratos e Aquisições</a>
                <a class="dropdown-item" href="{{route('transparencia.pagamentos')}}">Pagamentos Efetuados PF/PJ</a>
                <a class="dropdown-item" href="{{route('transparencia.selecoespublicas')}}">Seleções Públicas</a>
                <a class="dropdown-item" href="{{route('transparencia.habilitacaojuridica')}}">Habilitação Jurídica e Regularidade Fiscal</a>
                <a class="dropdown-item" href="{{route('transparencia.faq')}}">FAQ - Perguntas Frequentes</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Políticas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('politica.anticorrupcao')}}">Política Anticorrupção</a>
                <a class="dropdown-item" href="{{route('politica.integridade')}}">Programa de Integridade</a>
                <a class="dropdown-item" href="{{route('politica.codigoconduta')}}">Código de Conduta</a>
                <a class="dropdown-item" href="{{route('politica.comiteetica')}}">Comitê de Ética e Comitê de Gestão de Riscos</a>
                <a class="dropdown-item" href="#">*LGPD</a>
                <a class="dropdown-item" href="{{route('politica.politicaprivacidade')}}">Política de Privacidade</a>
                <a class="dropdown-item" href="{{route('politica.politicacookies')}}">Política de Cookies</a>
                <a class="dropdown-item" href="{{route('politica.boaspraticas')}}">Boas Práticas</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Legislação e Normas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('legislacao.legislacao')}}">Legislação</a>
                <a class="dropdown-item" href="{{route('legislacao.normas')}}">Normas Internas FAPEU e Instituições</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Colaborador
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('colaborador.DRHFlow')}}">DRHFlow</a>
                <a class="dropdown-item" href="#">ADMFlow</a>
                <a class="dropdown-item" href="#">WebMail</a>
                <a class="dropdown-item" href="{{route('colaborador.formularioscolaborador')}}">Formulários</a>
                <a class="dropdown-item" href="{{route('colaborador.acordocoletivo')}}">Acordo Coletivo</a>
                <a class="dropdown-item" href="{{route('colaborador.informerendimentos')}}">Informe de Rendimentos</a>
                <a class="dropdown-item" href="{{route('colaborador.programainclusao')}}">Programa FAPEU de Inclusão</a>

                <a class="dropdown-item" href="{{route('colaborador.vagasdisponiveis')}}">Vagas Disponíveis</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fale Conosco
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('faleconosco.contato')}}">Contato</a>
                <a class="dropdown-item" href="#">Canal de Comunicações e Denúncias</a>
              </div>
            </li>
          </ul>
        </div>
        <!-- <div class="col-2">
              <form action="{{ route('search') }}" method="GET" class="search-bar">
                <input type="text" class='form-control' name="q" placeholder="Buscar..." required>
                <button type="submit"><i class="fa fa-search" style="color:black"></i></button>
              </form>
            </div> -->
      </div>
    </nav>
  </header>
  <div>
    @yield('inicio')
  </div>
  <main class="bg-cinza pt-4">
    @yield('conteudo')
  </main>
  <div>
    @include('layout.footer')
  </div>
</body>

<script>
  document.getElementById('search-button').addEventListener('click', function() {
    var query = document.getElementById('search-input').value;
    if (query) {

      var searchUrl = '127./search?q=' + encodeURIComponent(query);
      window.location.href = searchUrl;
    } else {
      alert('Por favor, insira um termo de busca.');
    }
  });

  document.getElementById('search-input').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
      document.getElementById('search-button').click();
    }
  });
</script>
</body>

</html>