@extends('site.master.layout')

@section('content')

<div class="container-fluid py-5"> <!-- Container fluido para usar toda a largura da tela -->

    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-4 py-md-5">
        <div class="container-fluid"> <!-- Container fluido -->
            <div class="row gy-4 gy-md-5 align-items-lg-center">
                <div class="col-12 col-lg-9 offset-lg-1"> <!-- Ajuste a largura e o deslocamento da coluna principal -->
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 class="mb-4">FAPEU</h2>
                            <p class="mb-5 text-justify"> <!-- Texto justificado -->
                                A Fundação de Amparo à Pesquisa e Extensão Universitária (FAPEU) é uma instituição privada, sem fins lucrativos, que apoia o desenvolvimento de projetos de ensino, pesquisa, extensão, desenvolvimento institucional, científico, tecnológico e inovação universitária.
                                <!-- Conteúdo restante -->
                            </p>
                            <div class="row gy-4">
                                <div class="col-12 col-md-4"> <!-- Ajuste para 4 colunas em md -->
                                    <div class="d-flex align-items-start">
                                        <div class="me-4 text-primary">
                                            <!-- SVG Ícone -->
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Missão</h2>
                                            <p class="text-secondary mb-2">Contribuir para o desenvolvimento científico, tecnológico e social por meio de apoio a projetos de pesquisa e extensão.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4"> <!-- Ajuste para 4 colunas em md -->
                                    <div class="d-flex flex-column">
                                        <div class="mb-4">
                                            <h2 class="h4 mb-3">Visão</h2>
                                            <p class="text-secondary mb-0">Ser reconhecida como instituição socialmente responsável e referência na gestão de projetos culturais, científicos, tecnológicos e de inovação.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4"> <!-- Ajuste para 4 colunas em md -->
                                    <div class="d-flex flex-column">
                                        <div>
                                            <h2 class="h4 mb-3">Valores</h2>
                                            <p class="text-secondary mb-0">Honestidade, Transparência; Conformidade, Equidade, Responsabilidade e Respeito à Vida, às Pessoas e ao Meio Ambiente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Vídeo embutido com largura maior -->
                            <div class="mt-5">
                                <iframe class="img-fluid rounded-3 w-100" style="height: 500px; margin-left: auto; margin-right: auto; display: block;" src="https://www.youtube.com/embed/R8EHA3pbG1E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2"> <!-- Ajuste a largura da coluna auxiliar -->
                    <!-- Conteúdo adicional ou imagem opcional -->
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

<!-- CSS personalizado para ajustar a cor dos links no menu -->
<style>
    .navbar-nav .nav-link {
        color: #146551 !important;
    }
    .navbar-nav .nav-link:hover {
        color: #0d4a3f !important;
    }
</style>
