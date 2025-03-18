@extends('layout.header')
@section('title', 'Nova Licitação')
@section('conteudo')

@if(session('success'))
<script>
    window.onload = function() {
        alert("{{ session('success') }}");
    };
</script>
@endif

<div class="container mt-5">
    <h2 class="mb-4">Nova Licitação</h2>
    <form action="{{ route('fornecedor.adicionarlicitacao') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-3">
                <label for="tipo" class="form-label font-weight-bold">Tipo de Licitação</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="1" {{ isset($dados['tipo']) && $dados['tipo'] == 1 ? 'selected' : '' }}>Seleção Pública</option>
                    <option value="2" {{ isset($dados['tipo']) && $dados['tipo'] == 2 ? 'selected' : '' }}>Dispensa de Licitação</option>
                    <option value="3" {{ isset($dados['tipo']) && $dados['tipo'] == 3 ? 'selected' : '' }}>Inexigibilidade</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-3">
                <label for="processo" class="form-label font-weight-bold">Processo</label>
                <input type="text" class="form-control" id="processo" name="processo" value="{{$dados['processo']}} " required>
                <input type="hidden" class="form-control" id="id" name="id" value='{{$dados['id']}} ' required>
            </div>
            <div class="mb-3 col-3">
                <label for="ordem" class="form-label font-weight-bold">Ordem</label>
                <input type="text" class="form-control" id="ordem" name="ordem" value='{{$dados['ordem']}} ' required>
            </div>
            <div class="mb-3 col-3">
                <label for="projeto" class="form-label font-weight-bold">Projeto</label>
                <input type="text" class="form-control" id="projeto" name="projeto" value='{{$dados['projeto']}} ' required>
            </div>
            <div class="mb-3 col-3">
                <label for="orgao" class="form-label font-weight-bold">Orgão</label>
                <input type="text" class="form-control" id="orgao" name="orgao" value='{{$dados['orgao']}} ' required>
            </div>
        </div>
        <div class="mb-3">
            <label for="objeto" class="form-label font-weight-bold">Objeto</label>
            <input type="text" class="form-control" id="objeto" name="objeto" value='{{$dados['objeto']}} ' required>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="datapublicacao" class="form-label font-weight-bold">Data de Publicação</label>
                <input type="date" class="form-control" id="datapublicacao" name="datapublicacao" value='{{$dados['datapublicacao']}}' required>
            </div>
            <div class="mb-3 col-6">
                <label for="dataabertura" class="form-label font-weight-bold">Data de Abertura</label>
                <input type="date" class="form-control" id="dataabertura" name="dataabertura" value='{{$dados['dataabertura']}}' required>
            </div>
        </div>
        
        <div class="row">
            <h4 class="my-3">Upload dos arquivos (Apenas <b>.pdf .doc </b>ou <b>.docx</b>)</h4>
            <div class="mb-3 col-6">
                <label for="licitacao" class="form-label"><b>Licitação</b></label>
                <input type="file" class="form-control" id="licitacao" name="licitacao" required>
            </div>
            <div class="mb-3 col-6">
                <label for="resultado" class="form-label font-weight-bold">Resultado</label>
                <input type="file" class="form-control" id="resultado" name="resultado">
            </div>
            <div class="mb-3 col-6">
                <label for="contratoconvenio" class="form-label font-weight-bold">Contrato/Convênio</label>
                <input type="file" class="form-control" id="contratoconvenio" name="contratoconvenio">
            </div>
            
            <div class="mb-3 col-6">
                <label for="ataabertura" class="form-label font-weight-bold">Ata Abertura</label>
                <input type="file" class="form-control" id="ataabertura" name="ataabertura">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Publicar</button>
    </form>
</div>


@if(session('success'))
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Sucesso!</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
        setTimeout(() => {
            successModal.hide();
        }, 3000);
    };
</script>
@endif
@endsection