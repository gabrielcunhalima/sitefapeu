@extends('layout.header')
@section('title','FAPEU - Administração')

@section('conteudo')
<style>
    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
</style>

<script>
    $(document).ready(function() {
        if ($('.responsive').length > 0) {
            $('.responsive').slick({
                prevArrow: '<button type="button" class="slick-prev custom-arrow">Previous</button>',
                nextArrow: '<button type="button" class="slick-next custom-arrow">Next</button>',
                dots: true,
                infinite: true,
                speed: 800,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            dots: true,
                            speed: 400,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            speed: 400,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            speed: 400,
                        },
                    },
                ],
            });
        }
    });
</script>

<!-- carousel conselho curador -->
<div class="text-center jumbotron bg-light p-4 m-0">
    <h1>Conselho Curador</h1>
    <h4>Mandato 4 anos<br>Gestão 01/10/2024 - 30/09/2028</h4>
    <section class="responsive container">
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" alt="">
            <h3>Mario Steindel</h3>
            <p>Presidente</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid" alt="">
            <h3>Alexandre Verzani Nogueira</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid" alt="">
            <h3>Fabrício Augusto Menegon</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="img-fluid" alt="">
            <h3>Janine da Silva Alves Bello</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="img-fluid" alt="">
            <h3>Jovelino Falqueto</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
            <h3>Roberto Ferreira de Melo</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
            <h3>Valdir Rosa Correia</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
            <h3>Viviane Maria Heberle</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
            <h3>Alison Fiuza da Silva</h3>
            <p>Suplente</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
            <h3>Augusto Humberto Bruciapaglia</h3>
            <p>Suplente</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid" alt="">
            <h3>Irineu Afonso Frey</h3>
            <p>Suplente</p>
        </div>
    </section>
</div>

<!-- conselho fiscal -->
<div class="jumbotron bg-administracao text-center p-4 m-0">
    <h1>Conselho Fiscal</h1>
    <h4>Mandato 4 anos<br>Gestão: 02/08/2021 – 01/8/2025</h4>
    <section class="responsive container tirarpontos">
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" alt="">
            <h3>João Santana</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid" alt="">
            <h3>Silvana de Gaspari</h3>
            <p>Titular</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid" alt="">
            <h3>Celso Spada</h3>
            <p>Suplente</p>
        </div>
        <div class="col-lg-3 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="img-fluid" alt="">
            <h3>Paulo Roberto Medeiros dos Santos</h3>
            <p>Suplente</p>
        </div>
    </section>
</div>

<!-- diretoria executiva -->
<div class="jumbotron bg-light text-center p-4 m-0">
    <h1>Diretoria Executiva</h1>
    <h4>Mandato 4 anos<br>Gestão 25/09/2021 – 24/09/2025</h4>
    <section class="responsive container">
        <div class="col-lg-4 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" alt="">
            <h3>Felício Wessling Margotti</h3>
            <p>Diretor Presidente</p>
        </div>
        <div class="col-lg-4 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid" alt="">
            <h3>Wilson Erbs</h3>
            <p>Diretor de Projetos</p>
        </div>
        <div class="col-lg-4 col-sm-4 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid" alt="">
            <h3>Julio Felipe Szeremeta</h3>
            <p>Diretor Financeiro</p>
        </div>
    </section>
</div>

<!-- superintencendia -->
<div class="jumbotron bg-administracao text-center m-0 p-4">
    <h1>Superintendência</h1>
    <section class="responsive container">
        <div class="col-lg-12 col-sm-12 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" alt="">
            <h3>Fábio Silva de Souza</h3>
            <p>Superintendente</p>
        </div>
    </section>
</div>

@endsection