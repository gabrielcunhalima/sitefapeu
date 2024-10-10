@extends('layout.headeradmin')
@section('title','Adicionar Notícias')

@section('conteudo')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>

<form action="{{ route('admin.adicionarusuario') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="password">Senha:</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Criar Usuário</button>
</form>

@endif

@endsection