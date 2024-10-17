@extends('layout.header')
@section('title', 'Projetos')

@section('conteudo')

<body>

    <div class="container">
    


        <!-- Card Layout Section -->
        <div class="row mt-1">
            <div class="col-md-12">
                <div class="card mb-3">
                <img class="card-img-top shadow" src="images/Paginas/regimentointerno.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <br><br>
                        <h5 class="card-title text-center font-weight-bold" style="color: #099072;">Projetos de Transparência</h5> <br>

                        <!-- Adding new content to the card -->
                        <p class="lead text-dark text-justify">
                            Os ressarcimentos relativos ao uso dos recursos não financeiros da UFSC (recursos humanos e materiais tais como: laboratórios, salas de aula, materiais de apoio e de escritório, nome e imagem da instituição, redes de tecnologia de informação,
                             documentação acadêmica e demais itens de patrimônio tangível ou intangível) utilizados em seus projetos (convênios/contratos/acordos e similares), em conformidade com as determinações do Acordão nº 1.178/2018/TCU e em aderência ao Acordão no. 2.731/2008/TCU, 
                             e regidos pela Lei nº 8.958/1994, seguem os seguintes regramentos: </a>
                        </p>
                        <p class="lead text-dark">
                            <a href="/pdfs/Transparencia/Projetos/ResolucaoNormativa/resolucao_normativa_47_2014_pesquisa.pdf" target="_blank" class="text-dark">Resolução Normativa 47/2014/CUn - Projetos de Pesquisa - 10%</a><br>
                            <a href="/pdfs/Transparencia/Projetos/ResolucaoNormativa/resolucao_normativa_88_2016_extensao.pdf" target="_blank" class="text-dark">Resolução Normativa 88/2016/CUn - Projetos de Extensão - 7%</a><br>
                            <a href="/pdfs/Transparencia/Projetos/ResolucaoNormativa/resoluao_normativa_15_cun_2011_curso_especializacao.pdf" target="_blank" class="text-dark">Resolução Normativa 15/2011/CUn - Projetos de Ensino Pós-graduação, latusensu - 15%</a><br>
                            <a href="/pdfs/Transparencia/Projetos/ResolucaoNormativa/resolução_13_cun_2011.pdf" target="_blank" class="text-dark">Resolução Normativa 13/2011/CUn - Projetos de Ensino Graduação e Pós-Graduação stricto sensu - 1%</a><br>
                        </p>
                    
                        <!-- End of new content -->
                        
            
                        <br><br><div class="row mt-4">
            <div class="col-md-12 text-center">
                <a href="http://link-para-portal-de-transparencia" class="btn btn-primary" style="background-color: #a044b4; font-size: 18px; padding: 10px 20px;">
                    Transparência Projetos
                </a>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card Layout Section -->


    </div>




    

    <!-- Projetos em destaque - Carousel -->
    <section class="my-5" id="blog">
        <div class="container">
            <div id="projectCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="https://www.bootdey.com/image/350x280/FFB6C1/000000" class="card-img-top" alt="">
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
                    <!-- Adicione mais itens de carousel aqui -->
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
                                <div class="card">
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


    

    <style>

.carousel-item {
            background-color: transparent; /* Remove o fundo cinza dos slides */
        }


</style> 
</body>


@endsection
