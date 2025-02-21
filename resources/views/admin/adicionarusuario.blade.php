@extends('layout.header')
@section('title', 'FAPEU | Adicionar Notícias')

@section('conteudo')

<div class="col-4 offset-4">
 <br>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.storeusuario') }}" method="POST">
        @csrf

   
        <div class="form-group" id="inputName">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group" id="inputEmail">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group" id="inputPassword">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group" id="inputPasswordConfirmation">
            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary mb-5 text-center" type="submit">Salvar</button>
    </form>
</div>

<div class="row text-center">
    <div class='col-12'>
        <a href='javascript:history.go(-1)' class="btn btn-primary bg-primary">VOLTAR</a>
    </div>
</div>

@endsection
