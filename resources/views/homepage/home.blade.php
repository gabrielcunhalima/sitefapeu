@extends('layout.headerhome')
@section('title','FAPEU Novo')

@section('conteudo')
<div class="container">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <h6 class="sidebar-heading">Conteúdos</h6>
                <ul class="nav flex-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('quemsomos.sobre') }}">Quem Somos</a>
                        </li>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Noticias</a>
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
@endsection