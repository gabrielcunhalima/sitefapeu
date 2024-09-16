    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fapeu</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="http://127.0.0.1:8000/style.css">

        <style>
        @import url('https://fonts.googleapis.com/css2?family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap');
        </style>
        

        <style>

            
        /* Reduzindo o tamanho da fonte e o espaçamento do menu lateral */
        #sidebarMenu {
            font-size: 0.9rem; /* Reduz o tamanho da fonte */
            
        }

        #sidebarMenu .nav-link {
            padding: 0.8rem; /* Reduz o espaçamento interno dos links */
            font-size: 0.9rem; /* Reduz o tamanho da fonte dos links */
        }

        .sidebar-heading {
            font-size: 5rem; /* Reduz o tamanho da fonte dos cabeçalhos */
            font-family: 'Noticia Text';
            margin-bottom: 0.5rem; /* Reduz o espaçamento abaixo dos cabeçalhos */
        }

        /* Ajustando o conteúdo principal */
        main {
            padding: 1rem; /* Reduz o padding interno do conteúdo principal */
        }

        /* Reduzindo o tamanho da fonte e o espaçamento do footer */
        footer {
            font-size: 0.85rem; /* Reduz o tamanho da fonte do footer */
            padding: 1rem 0; /* Reduz o espaçamento do footer */
        }

        footer .col-md-4 h5 {
            font-size: 1rem; /* Reduz o tamanho da fonte dos títulos no footer */
        }

        footer p, footer a {
            margin-bottom: 0.3rem; /* Reduz o espaçamento entre parágrafos e links */
        }

        footer ul {
            padding-left: 0; /* Remove o padding da lista */
            list-style: none; /* Remove os bullets da lista */
        }

        footer ul li {
            margin-bottom: 0.3rem; /* Reduz o espaçamento entre os itens da lista */
        }
    </style>

        
        <style>
        /* Menu lateral */
        #sidebarMenu {
        position: sticky;
        top: 100px; /* Ajuste a posição conforme necessário */
        width: auto; /* Largura automática para se ajustar ao conteúdo */
        max-width: 300px; /* Aumenta a largura máxima */
        padding: 12px; /* Espaçamento interno */
        background-color: #f8f9fa; /* Cor de fundo do menu */
        border-radius: 8px; /* Bordas arredondadas */
        box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2); /* Sombra para efeito 3D */
        z-index: 1000; /* Garante que o menu fique no topo de outros elementos */
        overflow-y: auto; /* Adiciona barra de rolagem vertical se necessário */
        height: min-content;
        white-space: normal; /* Permite quebra de linha */
        
        }

    /* Ajustes nos links dentro do menu */
    #sidebarMenu .nav-link {
        padding: 0.5rem 1rem; /* Reduz o espaçamento interno dos links */
        font-size: 0.87rem; /* Tamanho da fonte dos links */
        white-space: normal; /* Permite quebra de linha dentro do link */
        overflow: visible; /* Exibe todo o conteúdo dos links */
        text-overflow: clip; /* Não trunca o texto */
        display: block; /* Exibe os links como blocos para ocupar toda a largura */
    }


    /* Estilo responsivo para telas menores */
    @media (max-width: 768px) {
        #sidebarMenu {
            width: 100%; /* Largura total da tela em dispositivos menores */
            margin-bottom: 15px; /* Margem inferior para dar espaço */
            height: auto; /* Altura automática sem restrições */
            overflow-y: visible; /* Remove barra de rolagem em telas pequenas */
        }

        main {
            margin-left: 0; /* Remove margem esquerda em telas pequenas */
        }
    }

    /* Ajuste da largura dos subtítulos */
    #sidebarMenu h2, #sidebarMenu h3 {
        font-size: 1rem; /* Tamanho de fonte para subtítulos */
        margin-bottom: 0.5rem; /* Espaçamento inferior */
        white-space: normal; /* Permite quebra de linha em subtítulos */
    }

        /* Estilo para o menu header */
        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 15px; /* Reduzido o padding */
            }

        .navbar-custom .navbar-nav .nav-link {
            font-size: 0.9rem; /* Reduzido o tamanho da fonte */
            padding: 5px 8px; /* Ajustado o padding */
            white-space: nowrap; /* Impede quebra de linha */
            color: #408c68; /* cor para os links */

    
            }

            .navbar-custom .navbar-nav .nav-link:hover {
                color: #28946c; /* Cor mais escura ao passar o mouse */
            }

            .navbar-custom .navbar-nav .nav-link.active {
                background-color: #146551;
                color: #ffffff;
                border-radius: 4px; /* Reduzido o arredondamento das bordas */
                padding: 6px 10px; /* Reduzido o padding do link ativo */
            }

            .navbar-custom .navbar-nav .nav-link:hover {
                color: #146551;
            }

            .navbar-custom .search-bar {
                background-color: #f0f0f5;
                border-radius: 15px; /* Reduzido o arredondamento das bordas */
                padding: 5px 10px; /* Reduzido o padding */
                display: flex;
                align-items: center;
                width: 240px; /* Reduzido a largura da barra de busca */
            }

            .navbar-custom .search-bar input[type="text"] {
                border: none;
                background: transparent;
                outline: none;
                width: 100%;
                padding: 5px;
                color: #333333;
            }

            .navbar-custom .search-bar .fa-search {
                color: #888888;
            }

            /* Estilo para o footer */
            footer {
                background-color: #f8f9fa;
                padding: 10px 0; /* Reduzido o padding */
                border-top: 1px solid #dee2e6;
            }
            footer h5 {
                margin-bottom: 5px; /* Reduzido o espaçamento abaixo do título */
                font-size: 1.1em; /* Ajustado o tamanho da fonte */
            }
            footer p {
                margin: 0;
                font-size: 0.9em; /* Ajustado o tamanho da fonte */
            }
            footer ul {
                padding: 0;
                list-style: none;
            }
            footer ul li {
                margin-bottom: 4px; /* Reduzido o espaçamento entre itens */
            }
            footer a {
                text-decoration: none;
                color: #146551;
            }
            footer a:hover {
                text-decoration: underline;
            }

            /* Estilo para os cabeçalhos no menu lateral */
            .sidebar-heading {
                background-color: #146551; /* Cor de fundo desejada */
                color: #ffffff; /* Cor do texto */
                padding: 10px; /* Padding para o texto ficar bem posicionado */
                border-radius: 4px; /* Arredondamento das bordas */
                margin-bottom: 10px; /* Espaçamento abaixo do cabeçalho */
                font-weight: bold; /* Deixar o texto em negrito */
                white-space: normal; /* Impede a quebra de linha */
                overflow: hidden; /* Oculta o texto excedente */
                font-size: 0.9em; /* Reduzido o tamanho da fonte */
            }



            /* Estilo para os links do menu lateral */
            #sidebarMenu .nav-link {
            color: #146551; /* Cor padrão dos links */
            text-decoration: none; /* Remove o sublinhado padrão */
            }

            #sidebarMenu .nav-link:hover,
            #sidebarMenu .nav-link:focus {
                color: #0d3c2f; /* Cor ao passar o mouse ou focar no link */
                text-decoration: underline; /* Adiciona sublinhado ao passar o mouse */
            }



        </style>



                    <style>
                .btn-primary {
                    background-color: #146551 !important;
                    border-color: #146551 !important;
                }
                    </style>

    </head>
    <body>

    <header>
    
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container">
                    

              <!-- Adiciona a logo no canto esquerdo -->
        <a class="navbar-brand" href="{{ route('site.home') }}">
            <img src="/sitefapeu/public/images/logo2.png" alt="Logo Fapeu" width="40" height="40">
            
        </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.home') }}">Home</a></li>
                    <li class="nav-item {{ (Route::current()->getName() === 'site.quemsomos' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.quemsomos') }}">Quem somos</a></li>
                    <li class="nav-item {{ (Route::current()->getName() === 'site.transparencia' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.transparencia') }}">Transparência</a></li>
                    <li class="nav-item {{ (Route::current()->getName() === 'site.legislacao' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.legislacao') }}">Legislação e Normas Internas</a></li>
                    <li class="nav-item {{ (Route::current()->getName() === 'site.colaborador' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.colaborador') }}">Espaço do Colaborador</a></li>
                    <li class="nav-item {{ (Route::current()->getName() === 'site.noticias' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.noticias') }}">Notícias</a></li>
                    <li class="nav-item {{ (Route::current()->getName() === 'site.contact' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.contact') }}">Fale Conosco</a></li>
                    <li class="nav-item {{ (Route::current()->getName() === 'site.politica' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.politica') }}">Politica de Integridade</a></li>
                    
                    
                    
                
                </ul>
                <div class="search-bar">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Buscar...">
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            
            <!-- Menu Lateral Flutuante -->
             
            <nav id="sidebarMenu" class="col-md-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h6 class="sidebar-heading">Links Úteis</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Captação de Recursos & Oportunidades para novos Projetos</a>
                        </li>
                        <li class="nav-item">
                <a class="nav-link" href="{{ route('site.espaco_do_coordenador') }}">Espaço do Coordenador</a>
            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Manual de Compras e Contratações </a>
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
    <footer class="container mt-4">
        <div class="row text-center">
            <div class="col-md-4 mb-3">
                <h5>Sobre Nós</h5>
                <p>FAPEU é uma organização dedicada ao desenvolvimento de projetos e à gestão de recursos para promover a educação e o bem-estar social.</p>
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
                <p>Telefone: (11) 1234-5678</p>
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
