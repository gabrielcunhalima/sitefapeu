@extends('layout.header')
@section('title', 'Login Administrativo')

@section('conteudo')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center">Login Administrativo</h4>
                </div>
                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.login.post') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nome de usuário</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" 
                                value="{{ old('usuario') }}" required autofocus>
                        </div>
                        
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <a href="{{ route('homepage.home') }}" class="btn btn-outline-secondary">Voltar para o site</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection