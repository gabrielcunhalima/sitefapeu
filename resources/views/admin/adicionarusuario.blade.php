@extends('layout.headeradmin')
@section('title','Adicionar Notícias')

@section('conteudo')

@if ($dados->perfil == 1)
<div class="col-4 offset-4">
    <form action="{{ route('admin.adicionarusuario') }}" method="POST">
        @csrf
        <div class="form-group" id="inputLogin">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" value="{{ old('login') }}">
            @error('login')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group" id="inputPassword">
            <label for="password">Senha</label>
            <input type="text" class="form-control" id="password" name="password" value="{{ old('password') }}">
            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary mb-5 text-center" type="submit">Salvar</button>
    </form>
</div>
@endif
<div class="row text-center">
    <div class='col-12'>
        <a href='javascript:history.go(-1)' class="btn btn-primary bg-primary">VOLTAR</a>
    </div>
</div>


@endsection