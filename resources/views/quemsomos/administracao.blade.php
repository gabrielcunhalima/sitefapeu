@extends('layout.header')
@section('title','Administração')

@section('conteudo')

<div class="accordion container" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Conselho Curador
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
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
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Conselho Fiscal
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
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
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Diretoria Executiva
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
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
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Superintendência
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
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