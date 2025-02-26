@extends('layout.header')
@section('title','FAPEU | Administração')

@section('conteudo')

<style>
    .conselhos {
        border: 1px solid rgb(236, 236, 236);
        margin-left: 10px;
    }

    .cargo {
        font-size: 16px;
        margin-top: -15px;
    }
</style>

<div class="container">
    <div class="shadow rounded-2 p-5 border">
        <h3 class="font-weight-bold">CONSELHO CURADOR</h3>
        <h5 class="mb-5">Mandato 4 anos<br>Gestão 01/10/2024 - 30/09/2028</h5>
        <table class="table table-striped table-borderless conselho-curador">
            <thead>
                <tr>
                    <th style="width:50%;" scope="col">Nome</th>
                    <th style="width:50%;" scope="col">Cargo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mario Steindel</td>
                    <td>Presidente</td>
                </tr>
                <tr>
                    <td>Alexandre Verzani Nogueira</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Fabrício Augusto Menegon</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Janine da Silva Alves Bello</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Jovelino Falqueto</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Roberto Ferreira de Melo</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Valdir Rosa Correia</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Viviane Maria Heberle</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Alison Fiuza da Silva</td>
                    <td>Suplente</td>
                </tr>
                <tr>
                    <td>Augusto Humberto Bruciapaglia</td>
                    <td>Suplente</td>
                </tr>
                <tr>
                    <td>Irineu Afonso Frey</td>
                    <td>Suplente</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="shadow rounded-2 p-5 border mt-5">
        <h3 class="font-weight-bold">CONSELHO FISCAL</h3>
        <h5 class="mb-5">Mandato 4 anos<br>Gestão 02/08/2021 – 01/8/2025</h5>
        <table class="table table-striped table-borderless conselho-curador">
            <thead>
                <tr>
                    <th style="width:50%;" scope="col">Nome</th>
                    <th style="width:50%;" scope="col">Cargo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sinesio Stefano Dubiela Ostroski</td>
                    <td>Presidente</td>
                </tr>
                <tr>
                    <td>João Santana</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Silvana de Gaspari</td>
                    <td>Titular</td>
                </tr>
                <tr>
                    <td>Celso Spada</td>
                    <td>Suplente</td>
                </tr>
                <tr>
                    <td>Paulo Roberto Medeiros dos Santos</td>
                    <td>Suplente</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="shadow rounded-2 p-5 border mt-5">
        <h3 class="font-weight-bold">DIRETORIA EXECUTIVA</h3>
        <h5 class="mb-5">Mandato 4 anos<br>Gestão 25/09/2021 – 24/09/2025</h5>
        <table class="table table-striped table-borderless conselho-curador">
            <thead>
                <tr>
                    <th style="width:50%;" scope="col">Nome</th>
                    <th style="width:50%;" scope="col">Cargo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Felício Wessling Margotti</td>
                    <td>Diretor Presidente</td>
                </tr>
                <tr>
                    <td>Wilson Erbs</td>
                    <td>Diretor de Projetos</td>
                </tr>
                <tr>
                    <td>Julio Felipe Szeremeta</td>
                    <td>Diretor Financeiro</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="shadow rounded-2 p-5 border mt-5">
        <h3 class="font-weight-bold">SUPERINTENDÊNCIA</h3>
        <h5 class="mb-5">Mandato Indeterminado</h5>
        <table class="table table-striped table-borderless conselho-curador">
            <thead>
                <tr>
                    <th style="width:50%;" scope="col">Nome</th>
                    <th style="width:50%;" scope="col">Cargo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fábio Silva de Souza</td>
                    <td>Superintendente</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="shadow rounded-2 p-5 border">
        <h3 class="font-weight-bold">ANTIGOS DIRETORES EXECUTIVOS</h3>
        <div class="row">
            <div class="col-2"><img src="images/AntigosConselheiros/Cópia de Antônio Diomário de Queiroz_gestão 05121983 a 17031986.jpg" class="img-fluid" alt=""></div>
            <div class="col-2"><img src="images/AntigosConselheiros/Cópia de Antônio Diomário de Queiroz_gestão 05121983 a 17031986.jpg" class="img-fluid" alt=""></div>
            <div class="col-2"><img src="images/AntigosConselheiros/Cópia de Antônio Diomário de Queiroz_gestão 05121983 a 17031986.jpg" class="img-fluid" alt=""></div>
            <div class="col-2"><img src="images/AntigosConselheiros/Cópia de Antônio Diomário de Queiroz_gestão 05121983 a 17031986.jpg" class="img-fluid" alt=""></div>
            <div class="col-2"><img src="images/AntigosConselheiros/Cópia de Antônio Diomário de Queiroz_gestão 05121983 a 17031986.jpg" class="img-fluid" alt=""></div>
        </div>
    </div>
</div>

<!-- <div class="container-fluid row">

    <div class="conselho-curador shadow-lg rounded-5 pl-5 py-3 container conselhos col-6">
        <h2 class="font-weight-bold">CONSELHO CURADOR</h2>
        <h5 class="text-muted">Mandato 4 anos<br>Gestão 01/10/2024 - 30/09/2028</h5>
        <div class="row mt-5">
            <p class="col">Mario Steindel</p>
            <p class="text-muted cargo">Presidente</p>
            <p class="col">Alexandre Verzani Nogueira</p>
            <p class="text-muted cargo">Titular</p>
            <p class="col">Fabrício Augusto Menegon</p>
            <p class="text-muted cargo">Titular</p>
            <p class="col">Janine da Silva Alves Bello</p>
            <p class="text-muted cargo">Titular</p>
            <p class="col">Jovelino Falqueto</p>
            <p class="text-muted cargo">Titular</p>
            <p class="col">Roberto Ferreira de Melo</p>
            <p class="text-muted cargo">Titular</p>
            <p class="col">Valdir Rosa Correia</p>
            <p class="text-muted cargo">Titular</p>
            <p class="col">Viviane Maria Heberle</p>
            <p class="text-muted cargo">Titular</p>
            <p class="col">Alison Fiuza da Silva</p>
            <p class="text-muted cargo">Suplentes</p>
            <p class="col">Augusto Humberto Bruciapaglia</p>
            <p class="text-muted cargo">Suplentes</p>
            <p class="col">Irineu Afonso Frey</p>
            <p class="text-muted cargo">Suplentes</p>
        </div>
    </div>

    <div class="conselho-fiscal shadow-lg rounded-5 pl-5 py-3 container conselhos col-6">
        <h2 class="font-weight-bold">CONSELHO FISCAL</h2>
        <h5 class="text-muted">Mandato 4 anos<br>Gestão: 02/08/2021 – 01/8/2025</h5>
        <div class="row mt-5">

            <p>Sinesio Stefano Dubiela Ostroski</p>
            <p class="text-muted cargo">Presidente</p>
            <p>João Santana</p>
            <p class="text-muted cargo">Titular</p>
            <p>Silvana de Gaspari</p>
            <p class="text-muted cargo">Titular</p>
            <p>Celso Spada</p>
            <p class="text-muted cargo">Suplentes</p>
            <p>Paulo Roberto Medeiros dos Santos</p>
            <p class="text-muted cargo">Suplentes</p>
        </div>
    </div>

    <div class="diretoria-executiva shadow-lg rounded-5 pl-5 py-3 container conselhos col-6">
        <h2 class="font-weight-bold">DIRETORIA EXECUTIVA</h2>
        <h5 class="text-muted">Mandato 4 anos<br>Gestão 25/09/2021 – 24/09/2025</h5>
        <div class="row mt-5">
            <p>Felício Wessling Margotti</p>
            <p class="text-muted cargo">Diretor Presidente</p>
            <p>Wilson Erbs</p>
            <p class="text-muted cargo">Diretor de Projetos</p>
            <p>Julio Felipe Szeremeta</p>
            <p class="text-muted cargo">Diretor Financeiro</p>
        </div>
    </div>

    <div class="superintendencia shadow-lg rounded-5 pl-5 py-3 container conselhos col-6">
        <h2 class="font-weight-bold">SUPERINTENDÊNCIA</h2>
        <h5 class="text-muted">Mandato Indeterminado<br>&nbsp;</h5>
        <div class="row mt-5">
            <p>Fábio Silva de Souza</p>
            <p class="text-muted cargo">Superintendente</p>
        </div>
    </div>
</div> -->
<!-- conselho curador -->

<!-- <div class="conselho-fiscal shadow-lg rounded-5 pl-5 py-3 container conselhos mt-5">
    <div class="text-center">
        <h2 class="font-weight-bold">CONSELHO FISCAL</h2>
        <h5 class="text-muted">Mandato 4 anos<br>Gestão: 02/08/2021 – 01/8/2025</h5>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <h3>Presidente</h3>
            <p>Sinesio Stefano Dubiela Ostroski</p>
        </div>
        <div class="col-4">
            <h3>Titulares</h3>
            <p>João Santana</p>
            <p>Silvana de Gaspari</p>
        </div>
        <div class="col-4">
            <h3>Suplentes</h3>
            <p>Celso Spada</p>
            <p>Paulo Roberto Medeiros dos Santos</p>
        </div>
    </div>
</div>
<div class="diretoria-executiva shadow-lg rounded-5 pl-5 py-3 container conselhos mt-5">
    <div class="text-center">
        <h2 class="font-weight-bold">DIRETORIA EXECUTIVA</h2>
        <h5 class="text-muted">Mandato 4 anos<br>Gestão 25/09/2021 – 24/09/2025</h5>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <h3>Diretor Presidente</h3>
            <p>Felício Wessling Margotti</p>
        </div>
        <div class="col-4 text-center">
            <h3>Diretor de Projetos</h3>
            <p>Wilson Erbs</p>
        </div>
        <div class="col-4">
            <h3>Diretor Financeiro</h3>
            <p>Julio Felipe Szeremeta</p>
        </div>
    </div>

</div> -->

<!-- diretoria executiva -->

<!-- superintencendia -->
<!-- <div class="jumbotron bg-administracao text-center m-0 p-4">
    <h1>Superintendência</h1>
    <section class="responsive container">
        <div class="col-lg-12 col-sm-12 wow fadeInUp px-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" alt="">
            <h3>Fábio Silva de Souza</h3>
            <p>Superintendente</p>
        </div>
    </section>
</div> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

@endsection