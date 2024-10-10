@extends('layout.headeradmin')
@section('title','Adicionar Seleções Públicas')

@section('conteudo')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>

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
    <div class="form-group" id="inputLink">
        <label for="link">Link</label>
        <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
        @error('link')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-primary mb-5" type="submit">Salvar</button>
</form>
@else
<h1 class="font-weight-bold text-center pt-5">ACESSO NEGADO</h1>

@endif

@endsection