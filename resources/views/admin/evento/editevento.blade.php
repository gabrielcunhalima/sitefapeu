@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')


@section('conteudo')

@php
    $dataInicio = date('Y-m-d',strtotime($evento->dataInicioEvento));
    $dataFinal = date('Y-m-d',strtotime($evento->dataFinalEvento));
    $categoria = $evento->id_categoriaevento;

    
    $eventoOnline = ($evento->EventoOnline == 1) ? 'checked' : '';
@endphp
<div>
    <h5 class='center'>Cadastrando novo evento - Dados básicos</h5>
    <form class='col s12' action='{{route('eventos.editar')}}' method="POST" enctype="multipart/form-data">
        @csrf
        <input type='hidden' id='id_evento' name='id_evento' value='{{$idevento}}'>
            <div class="row">
                <div class="input-field col s4">
                    <span>Código Projeto</label>
                <input type="number" class="validate kitweb" name='IDProjeto' required value='{{$evento->IDProjeto}}'>
                </div>
                <div class="input-field col s4">
                    <span>Data Inicio</label>
                <input id="dataInicioEvento" type="date" class="validate" name='dataInicioEvento' required  value='{{$dataInicio}}' >
                </div>
                <div class="input-field col s4">
                    <span>Data Final</label>
                <input id="dataFinalEvento" type="date" class="validate" name='dataFinalEvento' required value='{{$dataFinal}}'>
                </div>
            </div>            
            <div class='row'>
                <div class='input-field col s12'>
                    <span>Título</span>
                    <input id="Titulo" type="text" class="validate" name='Titulo' required value='{{$evento->Titulo}}'>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                    <span>Descrição</span>
                    <textarea id="Descricao" class="materialize-textarea" required name='Descricao'>{{$evento->Descricao}}</textarea>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s9'>
                    <span>Endereço Completo</span>
                    <input id="Local" type="text" class="validate" name='Local' value='{{$evento->Local}}'>
                </div>
                <div class='input-field col s3'>
                    <span>Evento Online</span>
                    <label>
                        <input type="checkbox" id='EventoOnline' name='EventoOnline' value='1' {{$eventoOnline}} />
                        <span>Sim</span>
                    </label>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                    <span>Contato para Dúvidas</span>
                    <input id="Contato" type="text" class="validate" name='Contato' required value='{{$evento->Contato}}'>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s6'>
                    <span>Categoria do Evento</span>
                    <select name='id_categoriaevento' id='id_categoriaevento'>
                        <option value='0' selected disabled>Escolha</option>
                        @foreach ($listaCategorias as $tipo)
                            @if($tipo->id == $categoria)
                                <option value={{$tipo->id}} selected>{{$tipo->Descricao}}</option>
                            @else
                                <option value={{$tipo->id}}>{{$tipo->Descricao}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class='input-field col s6'>
                    <span>Selecione a capa do evento</span>
                    <div class='custom-file'>
                        <input type="file" class="custom-file-input" name="imgCapa" id="input_imgCapa">
                        <label class="custom-file-label" for="input_imgCapa"></label>
                    </div>
                </div>
            </div>            
            <div class='row'>
                <div class="input-field col s6">
                    <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Próxima Etapa
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var options = {};
        var instances = M.FormSelect.init(elems, options);
    });
</script>

@endsection