@extends('layout.header')
@section('title','FAPEU | Login FAPEU')

@section('conteudo')

<div class="container">
  <div class="col-4 offset-4">
    <form action="{{route('login.login')}}" method="POST">
    @csrf
      <!-- Email input -->
      <div  class="form-outline mb-1">
        <label class="form-label" for="name">Login</label>
        <input type="name" name='name' class="form-control" required>
      </div>
    
      <!-- Password input -->
      <div  class="form-outline mb-4">
        <label class="form-label" for="password">Senha</label>  
        <input type="password" name="password" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>
    
      <!-- Register buttons -->
      
    </form>
  </div>
</div>

@endsection