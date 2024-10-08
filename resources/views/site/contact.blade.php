@extends ('site.master.layout')

@section('content')

    
    <div class="jumbotron ">
    <div class="container text-center">
    <h1 class=" "> Fale Conosco </h1>
    <hr class="my-4">
    <p class="lead text-center">Precisa de ajuda? Nos envie um email</p>
    
    </div>
</div>

    <div class="container py-3"></div>
    <div class="row justify-content-center">
    <div class="col-md-6">
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nome</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite nome e sobrenome">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Assunto</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sobre o assunto">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ex: 48 99999-9999">
  </div>
    

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@endsection