@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')


@section('conteudo')


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

<body>
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 150px;" src="https://media.licdn.com/dms/image/C4E0BAQGT7eBvXrCxOg/company-logo_200_200/0/1630598447819/fapeu_logo?e=1723075200&v=beta&t=LU5BcErf05GPROVvgvSjEExRLBzjpMnDsdKz_zDwjRg"/>
      <div class="section"></div>

      <h5 class="green-text">Login FAPEU aaaaa</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <span for='cpflogin'>CPF</span>
                <input class='validate kitweb' id="cpf" type='number' name='cpflogin' />
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <span for='password'>Senha</span>
                <input class='validate' type='password' name='password' id='password' />
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Esqueceu a senha?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect green'>Entrar</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="#!">Criar conta</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

@endsection