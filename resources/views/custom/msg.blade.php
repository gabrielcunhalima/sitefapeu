@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')
<div class="card center {{$cor}} darken-1">
  <div class="card-content white-text">
    <span class="card-title">{{$titulo}}</span>
    <p>{{$msg}}</p>
  </div>
</div>
<center>
  <a href="javascript:history.back()" class="btn waves-effect waves-light btnlarge">Voltar</a>
</center>


@endsection