@extends('layout.header')
@section('title','Administração')

@section('conteudo')

<div id="accordion container">
    <div class="card container">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0 text-center">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Conselho Curador
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
    <div class="card container">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0 text-center">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Conselho Fiscal
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
    <div class="card container">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0 text-center">
                    Diretoria Executiva
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </button>
    </div>

    <div class="card container">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0 text-center">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Superintendência
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>
</div>

<section id="conselhocurador" class="py-3">
    <div class="bg-administracao container pt-4 rounded shadow-lg">
        <h2 class="title_spectial">Conselho Curador</h2>
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" alt="">
                        <h3>Mario Steindel</h3>
                        <p>Presidente</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div><!--- END COL -->
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid" alt="">
                            <h3>Alexandre Verzani Nogueira</h3>
                            <p>Titular</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid" alt="">
                            <h3>Fabrício Augusto Menegon</h3>
                            <p>Titular</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="img-fluid" alt="">
                            <h3>Janine da Silva Alves Bello</h3>
                            <p>Titular</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="img-fluid" alt="">
                            <h3>Jovelino Falqueto</h3>
                            <p>Titular</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div><!--- END COL -->
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
                            <h3>Lucio José Botelho</h3>
                            <p>Titular</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div>
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
                            <h3>Roberto Ferreira de Melo</h3>
                            <p>Titular</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div>
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
                            <h3>Valdir Rosa Correia</h3>
                            <p>Titular</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div>
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
                            <h3>Viviane Maria Heberle</h3>
                            <p>Titular</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
                            <h3>Alison Fiuza da Silva</h3>
                            <p>Suplente</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div>
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
                            <h3>Augusto Humberto Bruciapaglia</h3>
                            <p>Suplente</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div>
                <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                    <div class="our-team">
                        <div class="single-team">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
                            <h3>Irineu Afonso Frey</h3>
                            <p>Suplente</p>
                        </div>
                    </div><!--- END OUR TEAM -->
                </div>
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
</section>
<section id="conselhofiscal" class="py-3">
    <div class="bg-administracao container pt-4 rounded shadow-lg">
        <h2 class="title_spectial">Conselho Fiscal</h2>
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid" alt="">
                        <h3>Sinesio Stefano Dubiela Ostroski</h3>
                        <p>Presidente</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div>
        </div><!--- END COL -->
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid" alt="">
                        <h3>João Santana</h3>
                        <p>Titular</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div><!--- END COL -->
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid" alt="">
                        <h3>Silvana de Gaspari</h3>
                        <p>Titular</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div><!--- END COL -->
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="img-fluid" alt="">
                        <h3>Celso Spada</h3>
                        <p>Suplente</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div><!--- END COL -->
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="img-fluid" alt="">
                        <h3>Paulo Roberto Medeiros dos Santos</h3>
                        <p>Suplente</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div><!--- END COL -->
        </div><!--- END COL -->
    </div><!--- END CONTAINER -->
</section>
<section id="diretoriaexecutiva" class="py-3">
    <div class="bg-administracao container pt-4 rounded shadow-lg">
        <h2 class="title_spectial">Diretoria Executiva</h2>
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid" alt="">
                        <h3>Felício Wessling Margotti</h3>
                        <p>Diretor Presidente</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div><!--- END COL -->
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid" alt="">
                        <h3>Wilson Erbs</h3>
                        <p>Diretor de Projetos</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div><!--- END COL -->
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="img-fluid" alt="">
                        <h3>Julio Felipe Szeremeta</h3>
                        <p>Diretor Financeiro</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div>
        </div><!--- END COL -->
    </div><!--- END CONTAINER -->
</section>
<section id="superintendencia" class="py-3">
    <div class="bg-administracao container pt-4 rounded shadow-lg">
        <h2 class="title_spectial">Superintendência</h2>
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
                <div class="our-team">
                    <div class="single-team">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid" alt="">
                        <h3>Fábio Silva de Souza</h3>
                        <p>Superintendente</p>
                    </div>
                </div><!--- END OUR TEAM -->
            </div><!--- END COL -->
        </div><!--- END COL -->
    </div><!--- END CONTAINER -->
</section>

@endsection