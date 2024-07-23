@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')
<div class='row'>
  <center>
  <div class='col offset-m4 m4'>
    <form action='{{route('listainsc.cpf')}}' method="POST" enctype="multipart/form-data">
      @csrf
    <span>Informe o cpf a ser consultado</span>
    <input type='text' class="kitweb" id='cpf' name='cpf'>
    <button type="submit" class="btn btn-primary btn-block green">Consultar</button>
    </form>
  </div>
  </center>
</div>

<div class='row center'>
  <div class='col s12 m12'>
      <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
  </div>
</div>

@endsection