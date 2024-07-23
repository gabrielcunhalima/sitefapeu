@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] - Lista de eventos disponíveis')

@section('conteudo')
<div class="page-container">
    <h3 class='center'>Painel Administrativo - Eventos</h3>
    <div class="row">
        @if(Session::has('error'))
        <div class="row">
            <div class="col s12 m12">
                    <div class="card red darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Falha na Autenticação </span>
                            <p>Os dados preenchidos não constam em nossa base de dados, verifique se digitou corretamente.</p>
                        </div>
                    </div>
            </div>
        </div>
        @endif  
        <div class='col s4 offset-s4'>
            <form action="{{ route('login') }}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF </label>
                    <input type="text" name="cpf" class="form-control kitweb" id='cpf' required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">SENHA</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <div class="d-grid center" id="botaologin" style="margin-bottom:150px">
                        <button class="large btn btn-large btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection