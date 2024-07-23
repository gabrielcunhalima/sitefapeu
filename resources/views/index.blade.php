@extends('layout.header')
@section('css','./css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')
<div>
    <div class='row'>
        <div class='col s6 m6'>
            <a href='{{route('eventos.lista')}}' class="waves-effect green-darken-3 waves-light btn">Eventos Disponíveis</a>
        </div>
        <div class='col s6 m6'>
            {{-- <a href='{{route('financeiro.index')}}' class="waves-effect green waves-light btn">Quero abrir evento</a> --}}
        </div>
    </div>
    <br><br><br><br><br>

    <div class="row">
        <center>
            <a href='{{route('login')}}'><i class="material-icons small center-">build</i>
        </center>
    </div>
</div>
@endsection