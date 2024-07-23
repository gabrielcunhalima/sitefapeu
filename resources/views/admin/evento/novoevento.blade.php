@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')


@section('conteudo')
<div>
    <h5 class='center'>Cadastrando novo evento - Dados básicos</h5>
    <form class='col s12' action='{{route('eventos.cadastrar')}}' method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="input-field col s4">
                    <span>Código Projeto</label>
                <input type="number" class="validate kitweb" name='IDProjeto' required>
                </div>
                <div class="input-field col s4">
                    <span>Data Inicio</label>
                <input id="dataInicioEvento" type="date" class="validate" name='dataInicioEvento' required>
                </div>
                <div class="input-field col s4">
                    <span>Data Final</label>
                <input id="dataFinalEvento" type="date" class="validate" name='dataFinalEvento' required>
                </div>
            </div>    
            <div class='row'>
                <div class='input-field col s12'>
                    <span>Título</span>
                    <input id="Titulo" type="text" class="validate" name='Titulo' required>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                    <span>Descrição</span>
                    <textarea id="Descricao" class="materialize-textarea" name='Descricao' required></textarea>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s9'>
                    <span>Endereço Completo</span>
                    <input id="Local" type="text" class="validate" name='Local'>
                </div>
                <div class='input-field col s3'>
                    <span>Evento Online</span>
                    <label>
                        <input type="checkbox" id='EventoOnline' name='EventoOnline' value='1'/>
                        <span>Sim</span>
                    </label>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                    <span>Contato para Dúvidas</span>
                    <input id="Contato" type="text" class="validate" name='Contato' required>
                </div>
            </div>
            <div class="row">
                Caso o seu evento possua alguma rede social, adicione a URL conforme o exemplo a seguir: https://instagram.com/fapeu_
            </div>
            <div class='row'>
                <div class="input-field col s3">
                    <span>Instagram</span>
                    <input id="instagram" placeholder="URL" type="text" class="validate" name='instagram'>
                </div>
                <div class="input-field col s3">
                    <span>Youtube</span>
                    <input id="youtube" placeholder="URL" type="text" class="validate" name='youtube'>
                </div>
                <div class="input-field col s3">
                    <span>Twitter/X</span>
                    <input id="twitter" placeholder="URL" type="text" class="validate" name='twitter'>
                </div>
                <div class="input-field col s3">
                    <span>Tiktok</span>
                    <input id="tiktok" placeholder="URL" type="text" class="validate" name='tiktok'>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s6'>
                    <span>Categoria do Evento</span>
                    <select name='id_categoriaevento' id='id_categoriaevento' required>
                        <option value='0' selected disabled>Escolha</option>
                        @foreach ($listaCategorias as $tipo)
                            <option value={{$tipo->id}}>{{$tipo->Descricao}}</option>
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
                <div class='col s6'>
                    <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
                </div>
                <div class="input-field col s6" style="display: flex; justify-content: flex-end">
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