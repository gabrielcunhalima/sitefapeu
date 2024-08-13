@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')
<div class="containerhome container">
    <div class="jumbotron prediofapeu">
        <div class="container">
            <h2>Fundação de Amparo à Pesquisa e Extensão Universitária</h2>
            <i><h5 style="display:flex; justify-content:flex-end;">Transformando ideias em ações</h5></i>
        </div>
    </div>
    <div class="row m-5">
        <div class="col-4">
            <div class="embed-responsive embed-responsive-1by1 text-center primeiro sombra align-middle principal">
                <div class="embed-responsive-item cinzaclaro text-white"><br><br>PROJETOS<br><br><br><i class="bi bi-kanban" style="font-size:45px;"></i></div>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-4">
            <div class="embed-responsive embed-responsive-1by1 text-center primeiro sombra align-middle principal">
                <div class="embed-responsive-item cinzaclaro text-white"><br><br>TRANSPARÊNCIA<br><br><br><i class="bi bi-file-earmark-check" style="font-size:45px;"></i></div>
                <a href="#" class="stretched-link" ></a>
            </div>
        </div>
        <div class="col-4">
            <div class="embed-responsive embed-responsive-1by1 text-center primeiro sombra align-middle principal">
                <div class="embed-responsive-item cinzaclaro text-white"><br>LICITAÇÕES E PRESTADORES DE SERVIÇOS<br><br><i class="bi bi-award" style="font-size:45px;"></i></div>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
    </div>
        
    <br><br><br><h2>Serviços</h2>
    <div class="row m-5">
        <div class="col-2">
            <div class="d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1 text-center sombra servicos">
            <div class="embed-responsive-item text-white verde1">
                <br>RESERVA DE SALAS<br><br><i class="bi bi-calendar2-check"></i>
            </div>
            </div>
        </div>
        <div class="col-2">
            <div class="d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1 text-center sombra servicos">
                <div class="embed-responsive-item text-white verde2">
                    <br>EVENTOS E CURSOS<br><br><i class="bi bi-cup-hot"></i>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1 text-center sombra servicos">
                <div class="embed-responsive-item text-white verde3">
                    <br>IMPORTAÇÃO DE BENS E INSUMOS<br><i class="bi bi-boxes"></i>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1 text-center sombra servicos">
                <div class="embed-responsive-item text-white verde4">
                    <br><br>NAGEFI<br><br><i class="bi bi-pen"></i>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1 text-center sombra servicos">
                <div class="embed-responsive-item text-white verde5">
                    <br><br>LATIC<br><br><i class="bi bi-search"></i>
                </div>
            </div>
        </div>
        <div class="col-2" style="margin-bottom:80px;">
            <div class="d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1 text-center sombra servicos">
                <div class="embed-responsive-item text-white verde6"><br><br>
                    CONCURSOS<br><br><i class="bi bi-backpack2"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection