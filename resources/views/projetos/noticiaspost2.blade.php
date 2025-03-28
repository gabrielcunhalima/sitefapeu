@extends('layout.header')
@section('conteudo')

@if(session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");
        };
    </script>
@endif

<script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: '#corpo',
    menubar: false,
    plugins: 'advlist autolink lists link charmap print preview anchor', 
    toolbar: 'undo redo | formatselect | bold italic backcolor | ' +
             'alignleft aligncenter alignright alignjustify | ' +
             'bullist numlist outdent indent | removeformat | link',
    setup: function(editor) {
        editor.on('change', function () {
            tinymce.triggerSave(); 
        });
    }
});
</script>

<div class="container mt-5">
    <h2>Adicionar Novo Post</h2>
    <form action="{{ route('projetos.noticiaspost') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagem" name="imagem" required>
        </div>
        <div class="mb-3">
            <label for="corpo" class="form-label">Conteúdo</label>
            <textarea class="form-control" id="corpo" name="corpo" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publicar</button>
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