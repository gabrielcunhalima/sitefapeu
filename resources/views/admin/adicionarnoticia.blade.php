@extends('layout.headeradmin')
@section('title','Adicionar Notícias')

@section('conteudo')
@if (($dados->perfil == 1) OR ($dados->perfil == 2))
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group" id="inputTitulo">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}">
        @error('titulo')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="corpo">Corpo:</label>
        <textarea class="form-control" rows="4" id="corpo" name="corpo">{{ old('corpo') }}</textarea>
        @error('corpo')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-primary mb-5" type="submit">Salvar</button>
</form>
@endif
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
<div class="row text-center">
    <div class='col-12'>
        <a href='javascript:history.go(-1)' class="btn btn-primary">VOLTAR</a>
    </div>
</div>

@endsection