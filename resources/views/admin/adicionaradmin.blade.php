@extends('layout.header')
@section('title', 'Adicionar Administrador')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Adicionar Novo Administrador</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('admin.createadmin') }}" method="POST">
                        @csrf
                
                        <div class="form-group mb-3">
                            <label for="usuario" class="form-label">Nome de usuário</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" value="{{ old('usuario') }}" required>
                        </div>
                
                        <div class="form-group mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                
                        <div class="form-group mb-3">
                            <label for="imagem" class="form-label">Imagem (opcional)</label>
                            <input type="text" class="form-control" id="imagem" name="imagem" value="{{ old('imagem') }}">
                        </div>
                
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Salvar</button>
                            <a href="{{ route('admin.menu') }}" class="btn btn-secondary">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection