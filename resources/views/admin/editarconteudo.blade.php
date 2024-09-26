@extends('layout.header')
@section('title','Editar Conteúdo')

@section('conteudo')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form action="{{ route('conteudo.update') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="titulo_conteudo">Selecionar uma página para Atualizar:</label>
        <select class="form-control" id="titulo_conteudo" name="titulo_conteudo">
            @foreach($conteudos as $conteudo)
                <option value="{{ $conteudo->titulo }}">{{ $conteudo->titulo }}</option>
            @endforeach
        </select>
        @error('titulo_conteudo')
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

    <button class="btn btn-primary mb-5" type="submit">Atualizar</button>
</form>

@endsection
