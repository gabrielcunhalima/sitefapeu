@extends('layout.header')
@section('title', 'Portal da Transparência')

@section('conteudo')

<body>
    <style>
        .botaotransparencia {
            min-width:20vw;
        }
    </style>
    <div class="container">
        <div class="row mt-1">
            <div class="col-md-12">
                <div class="card mb-3 shadow-lg">
                    <img class="card-img-top shadow" src="images/Fapeu_bg.png" alt="Imagem de capa do card">

                    <div class="card-body">
                        <br>
                        <h4 class="card-title text-center font-weight-bold shadow p-3 mb-5 bg-white rounded border border-success" style="color: #099072;">
                            Portal da Transparência
                        </h4>
                        <br>
                        <div class="list-group">
                            <p class="lead text-justify">
                                Os ressarcimentos relativos ao uso dos recursos não financeiros da UFSC (recursos humanos e materiais tais como: laboratórios, salas de aula, materiais de apoio e de escritório...) seguem os seguintes regramentos:
                            </p>
                            <p class="lead text-dark">
                                <a href="pdfs/Transparencia/Projetos/ResolucaoNormativa/resolucao_normativa_47_2014_pesquisa.pdf" target="_blank" class="link-underline-primary list-group-item list-group-item-action list-group-item-light ">Resolução Normativa 47/2014/CUn - Projetos de Pesquisa - 10%</a>
                                <a href="pdfs/Transparencia/Projetos/ResolucaoNormativa/resolucao_normativa_88_2016_extensao.pdf" target="_blank" class="link-underline-primary list-group-item list-group-item-action list-group-item-light">Resolução Normativa 88/2016/CUn - Projetos de Extensão - 7%</a>
                                <a href="pdfs/Transparencia/Projetos/ResolucaoNormativa/resoluao_normativa_15_cun_2011_curso_especializacao.pdf" target="_blank" class="link-underline-primary list-group-item list-group-item-action list-group-item-light">Resolução Normativa 15/2011/CUn - Projetos de Ensino Pós-graduação, latusensu - 15%</a>
                                <a href="pdfs/Transparencia/Projetos/ResolucaoNormativa/resolução_13_cun_2011.pdf" target="_blank" class="link-underline-primary list-group-item list-group-item-action list-group-item-light">Resolução Normativa 13/2011/CUn - Projetos de Ensino Graduação e Pós-Graduação stricto sensu - 1%</a>
                            </p>
                        </div>
                        <br><br>
                        <div class="row mt-4">
                            <div class="col-md-4 col-sm-12 text-center">
                                <a href="http://150.162.78.4:8080/transparencia/transparencia/transparenciainstitucional" class="btn btn-primary shadow p-3 mb-5 bg-white rounded botaotransparencia" target="_blank" style="background-color: #a044b4; font-size: 18px; padding: 10px 20px;">
                                    Institucional
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 text-center">
                                <a href="http://150.162.78.4:8080/transparencia/transparencia" class="btn btn-primary shadow p-3 mb-5 bg-white rounded botaotransparencia" target="_blank" style="font-size: 18px; padding: 10px 20px;">
                                    Projetos
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 text-center">
                                <a href="{{route('transparencia.faq')}}" class="btn btn-primary shadow p-3 mb-5 bg-white rounded botaotransparencia" style="background-color: #a044b4; font-size: 18px; padding: 10px 20px;">
                                    Perguntas Frequentes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card Layout Section -->



        <!-- card confira nossos destaque -->


        <!-- <div class="row mt-1">
            <div class="col-md-12">
                <br><br>
                <div class="card shadow-lg ">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h4 class="card-title font-weight-bold text-center rounded-top" style="color: #099072; font-family: 'Raleway', sans-serif;">
                                <br><br>Confira Projetos em destaque!
                            </h4>

                        </div>
                        <section class="my-4" id="blog">
                            <div class="container">
                                <div id="projectCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card ">
                                                        <img src="https://www.bootdey.com/image/350x280/FFB6C1/000000" class="card-img-top rounded-left" alt="">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                                            <a href="#" class="btn btn-primary">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <img src="https://www.bootdey.com/image/350x280/87CEFA/000000" class="card-img-top" alt="">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                                            <a href="#" class="btn btn-primary">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <img src="https://www.bootdey.com/image/350x280/FF7F50/000000" class="card-img-top" alt="">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                                            <a href="#" class="btn btn-primary">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <img src="https://www.bootdey.com/image/350x280/32CD32/000000" class="card-img-top" alt="">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><a href="#">Another Project Example</a></h5>
                                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                                            <a href="#" class="btn btn-primary">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <img src="https://www.bootdey.com/image/350x280/FF6347/000000" class="card-img-top" alt="">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><a href="#">Another Project Example</a></h5>
                                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                                            <a href="#" class="btn btn-primary">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card ">
                                                        <img src="https://www.bootdey.com/image/350x280/4682B4/000000" class="card-img-top" alt="">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><a href="#">Another Cool Project</a></h5>
                                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                                            <a href="#" class="btn btn-primary">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div> -->
</body>

@endsection