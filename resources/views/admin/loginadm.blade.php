@extends('layout.header')
@section('title', 'Admin | Login')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-6 text-center offset-3">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <h5>{{ $error }}</h5>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Login - Área de notícias</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.loginadm') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="usuario">Usuário</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection