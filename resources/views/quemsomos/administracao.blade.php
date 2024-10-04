@extends('layout.header')
@section('title','Administração')
@section('inicio')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class=" font-weight-bold">Administração</h1>
    </div>
</div>

@endsection

@section('conteudo')

<table class="table container">
    <thead class="text-white bg-verdeescuro">
        <tr>
            <th scope="col" class="col-4"><h4>Conselho Curador</h4>Gestão 01/10/2020 - 30/09/2024<br>Mandato 4 anos</th>
            <th scope="col" class="col-4"></th>
            <th scope="col" class="col-4"></th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="col" class="col-4">Presidente</th>
            <th scope="col" class="col-4">Titulares</th>
            <th scope="col" class="col-4">Suplentes</th>
            
        </tr>
        <tr>
            <td>IIdemar Cassana Decker</td>
            <td>Augusto Humberto Bruciaplaglia;<br>
                Cesar Damian;<br>
                Julio César Passos;<br>
                Lúcia Nazareth Amante;<br>
                Lúcio José Botelho;<br>
                Mario Steindel;<br>
                Paulo Roberto de Jesus</td>
            <td>Henrique José Souza Coutinho;<br>
                Marilei Kroetz;<br>
                Sidneya Gaspar de Oliveira</td>
        </tr>
    </tbody>
</table>
<table class="table container">
    <thead class="text-white bg-verdeescuro">
        <tr>
            <th scope="col" class="col-4"><h4>Conselho Fiscal</h4>Gestão: 02/08/2021 – 01/8/2025<br>Mandato 4 anos</th>
            <th scope="col" class="col-4"></th>
            <th scope="col" class="col-4"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="col" class="col-4">Presidente</th>
            <th scope="col" class="col-4">Titulares</th>
            <th scope="col" class="col-4">Suplentes</th>
        </tr>
        <tr>
            <td>Sinesio Stefano Dubiela Ostroski</td>
            <td>João Santana;<br>
                Silvana de Gaspari</td>
            <td>Celso Spada;<br>
                Paulo Roberto Medeiros dos Santos</td>
        </tr>
    </tbody>
</table>
<table class="table container">
    <thead class="text-white bg-verdeescuro">
        <tr>
            <th scope="col" class="col-3"><h4>Diretoria Executiva</h4>Gestão 25/09/2021 – 24/09/2025<br>Mandato 4 anos</th>
            <th scope="col" class="col-3"></th>
            <th scope="col" class="col-3"></th>
            <th scope="col" class="col-3"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="col" class="col-3">Diretor Presidente</th>
            <th scope="col" class="col-3">Diretor de Projetos</th>
            <th scope="col" class="col-3">Diretor Financeiro</th>
            <th scope="col" class="col-3">Superintendência</th>
        </tr>
        <tr>
            <td>Felício Wessling Margotti</td>
            <td>Wilson Erbs</td>
            <td>Julio Felipe Szeremeta</td>
            <td>Fábio Silva de Souza</td>
        </tr>
    </tbody>
</table>


@endsection