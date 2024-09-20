@extends('layout.header')
@section('title','FAPEU Novo')

@section('conteudo')

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text"class="form-control" rows="4" id="titulo" name="titulo" value="{{ old('titulo') }}">
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
    <button class="btn btn-primary" type="submit">Adicionar notícia</button>
</form>
<script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>
@endsection