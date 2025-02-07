@extends('layout.header')
@section('title','FAPEU | Área Administrativa')

@section('conteudo')

<div class="container mt-5">
    <h2 class="text-center mb-4">Bem-vindo à Área Administrativa</h2>
    <p class="text-center mb-5">Gerencie todos os processos administrativos com facilidade e eficiência. 
        Clique abaixo para acessar a área administrativa de nossas ferramentas.</p>
    
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card text-center">
                <div class="bg-verdeescuro text-white p-3 rounded-top d-flex justify-content-center">
                    <img src="images/IconsAreaADM/fulfillment_12982135.png" alt="Ícone" style="height: 50px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">ADMFlow</h5>
                    <p class="card-text">Acesse a área administrativa clicando abaixo!</p>
                    <a href="http://150.162.78.45:8080/ADMFlow/" target="_blank" class="btn btn-success btn-lg rounded-pill">Visitar</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card text-center">
                <div class="bg-verdeescuro text-white p-3 rounded-top d-flex justify-content-center">
                    <img src="images/IconsAreaADM/social-engineering_2742103.png" alt="Ícone" style="height: 50px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">DRHFlow</h5>
                    <p class="card-text">Gerencie á área de Recursos Humanos.</p>
                    <a href="http://150.162.78.45:8080/DRHFlow/" target="_blank" class="btn btn-success btn-lg rounded-pill">Visitar</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card text-center">
                <div class="bg-verdeescuro text-white p-3 rounded-top d-flex justify-content-center">
                    <img src="images/IconsAreaADM/calculator_2471180.png" alt="Ícone" style="height: 50px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Informe de Rendimentos</h5>
                    <p class="card-text">Acesse a área de Informe de Rendimentos</p>
                    <a href="https://fap6.fapeu.org.br/scripts/fapeufap.pl/dirf" target="_blank" class="btn btn-success btn-lg rounded-pill">Visitar</a>
                </div>
            </div>
        </div>



        <!-- Card 4 -->
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card text-center">
                <div class="bg-verdeescuro text-white p-3 rounded-top d-flex justify-content-center">
                    <img src="images/IconsAreaADM/vote_4474105.png" alt="Ícone" style="height: 50px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">WebMail</h5>
                    <p class="card-text">Gerencie seus Emails. Clique abaixo para acessar o sistema!</p>
                    <a href="https://webmail.fapeu.org.br/#1" target="_blank" class="btn btn-success btn-lg rounded-pill">Visitar</a>
                </div>
            </div>
        </div>

    </div>
</div>

<style>

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: scale(1.1);
    }
</style>

@endsection
