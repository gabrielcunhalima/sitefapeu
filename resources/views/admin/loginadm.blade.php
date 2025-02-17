@extends('layout.header')
@section('title', 'Login ADM')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Login de Administrador</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.loginadm') }}">
                        @csrf
                        
                        <div class="form-group mb-3">
                            <label for="usuario">Usuário</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Digite seu usuário">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required placeholder="Digite sua senha">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>© {{ date('Y') }} - Sistema de Administração</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
