    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <!-- Bootstrap CSS -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

      <!-- jQuery and Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Fapeu</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="http://127.0.0.1:8000/style.css">
    </head>

    <body>

      <header>

        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
          <div class="container">


            <!-- Adiciona a logo no canto esquerdo -->
            <a class="navbar-brand" href="{{ route('site.home') }}">
              <img src="/sitefapeu/public/images/logo2.png" alt="Logo Fapeu" height="60">

            </a>
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
                  <a class="dropdown-item" href="{{route('legislacao.normas')}}">Normas Internas FAPEU e Instituições Apoiadas</a>
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
        </nav>
      </header>

      <div class="container">
        <div class="row">

          <nav id="sidebarMenu" class="col-md-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <h6 class="sidebar-heading">Conteúdos</h6>
              <ul class="nav flex-column">


                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.quemsomos') }}">Quem Somos</a>
                  </li>

                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('site.noticias') }}">Noticias</a>
                    </li>



                    <li class="nav-item">
                      <a class="nav-link" href="#">Captação de Recursos & Oportunidades para novos Projetos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('site.espaco_do_coordenador') }}">Espaço do Coordenador</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('site.noticias') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Formulários</a>
                    </li>
                  </ul>






                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Seleções Públicas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Dispensa de Licitação</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Inexigibilidade</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Espaço do Fornecedor</a>
                    </li>
                  </ul>





            </div>
          </nav>

          <!-- Conteúdo Principal -->
          <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
            @yield('content')
          </main>
        </div>
      </div>

      <!-- FOOTER -->
      <footer class=" px-5">
        <div class="row text-center">
          <div class="col-md-4 mb-3">
            <h5>Local</h5>
            <p class="text-justify">Rua Delfino Conti, Campus Universitário Reitor João David Ferreira Lima, Bairro Trindade Florianópolis/SC - CEP 88040-370 <br>
              Horário de Funcionamento: Segunda a Sexta-feira das 8h às 12h e das 13h às 17h<br>

              AC Cidade Universitária,
              Caixa Postal 5078, Bairro Trindade, Florianópolis/SC, CEP 88035-972 <br>
              CNPJ: 83.476.911/0001-17 <br>
              Inscrição Estadual: ISENTO
              Inscrição Municipal: 61.274-0</p>
          </div>
          <div class="col-md-4 mb-3">
            <h5>Links Úteis</h5>
            <ul class="list-unstyled">
              <li><a href="#">Home</a></li>
              <li><a href="#">Quem Somos</a></li>
              <li><a href="#">Transparência</a></li>
              <li><a href="#">Fale Conosco</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3">
            <h5>Contato</h5>
            <p>Email: <a href="mailto:contato@fapeu.org">contato@fapeu.org</a></p>
            <p>Telefone: (48)3331-7400</p>
          </div>
        </div>
        <div class="row text-center mt-3">
          <div class="col">
            <p class="float-right"><a href="#">Voltar ao topo</a></p>
            <p>&copy; <?= date('Y') ?> FAPEU &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
          </div>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+d10Axt6q1TM13K29L7Lxkl2YRIvX0CAqyI54S4rS3E6tctWj" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    </body>

    </html>