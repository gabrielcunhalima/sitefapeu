@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] DASHBOARD ADMINISTRADOR')


@section('conteudo')

@if ($errors->any())
<div class="row">
    <div class="col s12 m12">
            <div class="card red darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Dados incorretos</span>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endif
<div>
    <h5 class='center'>Cadastrando novo Usuário</h5>
    <form class='col s12' action='{{route('usuario.cadastrar')}}' method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="input-field col s8">
                    <span>Nome Completo</label>
                <input id="nome" type="text" class="validate" name='nome' >
                </div>
                <div class="input-field col s4">
                    <span for="cpf">CPF</span>
                    <input type="number" name='cpf' id='cpf' class="validate kitweb" oninput="maxLengthCheck(this)" maxlength="11" required>
                </div>    
            </div>
            <div class='row'>
                <div class="input-field col s6">
                    <span>E-mail</label>
                <input id="email" type="email" class="validate" name='email'>
                </div>
                <div class='input-field col s6'>
                    <span>Senha</span>
                    <input id="password" type="password" class="validate" name='password'>
                </div>
            </div>
            <div class='row'>
                <div class='col s6'>
                    <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
                </div>
                <div class="input-field col s6" style="display: flex; justify-content: flex-end">
                    <button class="btn waves-effect waves-light btnlarge" type="submit" name="action">Cadastrar</button>
                </div>
            </div>
    </form>
</div>
<script>
    function maxLengthCheck(object)
            {
                if (object.value.length > object.maxLength)
                object.value = object.value.slice(0, object.maxLength)
            }
</script>
@endsection