@extends('layout.header')
@section('title',' Programa de Inclusão')

@section('conteudo')

<div class="background">

  <div class="container my-2">
    <div class="row justify-content-center">

      <div class="col-md-10 text-center">

        <div class="d-flex justify-content-center align-items-center">
          <img src="images/logo3.png" alt="Logo" style="height: 120px;">
        </div>

        <h1 class="display-5 mt-4 " style="font-weight: bold; color: #146551;">Programa FAPEU de Inclusão</h1>

        <div class="text-justify">
          <p class="lead mt-4" style="font-size: 1.1rem; color: #333;">
            <br>O mercado de trabalho está cada dia mais competitivo, exigindo experiências e qualificação de seus profissionais. A FAPEU, por meio do programa de inclusão, quer proporcionar essas experiências e qualificar essas pessoas para desenvolverem seu trabalho.

            A FAPEU acredita que a inclusão social é um dever de todos, e é por isso que está disponibilizando vagas para Pessoas com Deficiência. O acesso ao trabalho deverá estar acessível a todos.
          </p>
          <p class="lead" style="font-size: 1.1rem; color: #333;">
            Valorizamos as diferenças e acreditamos sempre no desenvolvimento humano. Por meio deste programa, conheceremos e aprenderemos mais, teremos contato com novas experiências de vida.

            <br> <br>Venha juntar-se a família FAPEU e fazer a diferença na vida de nossos parceiros.
          <p class="" style="font-weight: bold ; color: #099072;">Acesse o nosso Portal de Oportunidades:</p>
          </p>

        </div>
        <div class="d-flex justify-content-center">
          <a class="btn-primary btn-outline-primary btn-lg mt-4" href="http://150.162.78.45:8080/Curriculo/" target="_blank" role="button" style="border: 2px solid #099072; color: #099072; border-radius: 50px; padding: 10px 30px ;">ACESSE O CADASTRO AQUI</a>
        </div>
        <br>
        <p class="display-8 mt-4 " style="font-weight: bold; color: #146551;"> Outra forma de obter oportunidades às pessoas com Deficiência</p>
        <a href="http://www.deficienteonline.com.br" target="_blank" style="color: #099072;"> http://www.deficienteonline.com.br <br><br></a>

      </div>
    </div>
  </div>


  <style>
    .btn-primary {
      background-color: #ffff !important;
      border-color: #146551 !important;

    }

    .background {
      background-image: url('/images/bgt3 (1).png');
      padding: 20px 0;
      background-size: cover;
      background-position: 40% 30%;
    }
  </style>
  @endsection