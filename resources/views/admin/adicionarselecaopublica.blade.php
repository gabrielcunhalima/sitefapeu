@extends('layout.headeradmin')
@section('title',' Adicionar Seleções Públicas')

@section('conteudo')

@if (($dados->perfil == 1) OR ($dados->perfil == 2))
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col-3" id="inputOrdem">
            <label for="id">Ordem:</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ old('id') }}">
            @error('id')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-3" id="inputProcesso">
            <label for="processo">Processo:</label>
            <input type="text" class="form-control" id="processo" name="processo" value="{{ old('processo') }}">
            @error('processo')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-3" id="inputOrgao">
            <label for="orgao">Órgão</label>
            <input type="text" class="form-control" id="orgao" name="orgao" value="{{ old('orgao') }}">
            @error('orgao')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-3" id="inputProjeto">
            <label for="projeto">Projeto:</label>
            <input type="number" class="form-control" id="projeto" name="projeto" value="{{ old('projeto') }}">
            @error('projeto')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-3" id="inputContratoConvenio">
            <label for="contratoconvenio">Contrato/Convênio:</label>
            <input type="text" class="form-control" id="contratoconvenio" name="contratoconvenio" value="{{ old('contratoconvenio') }}">
            @error('contratoconvenio')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-3" id="inputObjeto">
            <label for="objeto">Objeto:</label>
            <input type="text" class="form-control" id="objeto" name="objeto" value="{{ old('objeto') }}">
            @error('objeto')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-3" id="inputselecao">
            <label for="selecao">Seleção Pública</label>
            <input type="text" class="form-control" id="selecao" name="selecao" value="{{ old('selecao') }}">
            @error('selecao')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-3" id="inputataabertura">
            <label for="ataabertura">Ata de Abertura</label>
            <input type="text" class="form-control" id="ataabertura" name="ataabertura" value="{{ old('ataabertura') }}">
            @error('ataabertura')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-3" id="inputresultado">
            <label for="resultado">Resultado</label>
            <input type="text" class="form-control" id="resultado" name="resultado" value="{{ old('resultado') }}">
            @error('resultado')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-6" id="inputdataabertura">
            <label for="dataabertura">Data Abertura*</label>
            <input type="text" class="form-control" id="dataabertura" name="dataabertura" value="{{ old('dataabertura') }}">
            @error('dataabertura')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-6" id="inputdatapublicacao">
            <label for="datapublicacao">Data Publicação</label>
            <input type="text" class="form-control" id="datapublicacao" name="datapublicacao" value="{{ old('datapublicacao') }}">
            @error('datapublicacao')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mx-auto"><button class="btn btn-primary mb-5" type="submit">Salvar</button></div>
    </div>
    
</form>
@endif
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
<div class="row text-center">
    <div class='col s12'>
        <a href='javascript:history.go(-1)' class="btn btn-primary">VOLTAR</a>
    </div>
</div>

@endsection