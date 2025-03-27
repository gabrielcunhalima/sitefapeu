@extends('layout.header')
@section('title', 'ADMIN | Adicionar Notícia')
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
        editor.on('init', function () {
            const editorContainer = editor.getContainer();
            editorContainer.classList.add('border', 'border-success');
        });

            editor.on('change', function () {
            tinymce.triggerSave(); 
        });
        }
    });
    </script>

  <div class="mb-2">
    <a href="{{ route('admin.menu') }}" class="d-flex align-items-center text-decoration-none mb-3" style="color: #6c7d77; font-size: 18px; margin-left: 20px;">
        <i class="fa-solid fa-arrow-left-long" style="font-size: 20px; margin-right: 15px;"></i>
        <span>Retornar ao Painel</span>
    </a>
</div>

        <div class="container mt-4">
            <h2>{{ $alteratitulo ? 'Editar Notícia' : 'Adicionar Notícia' }}</h2><br>
            <form action="{{ route('noticias.noticiaspost') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label font-weight-bold">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value='{{$dados['titulo']}} 'required>
                <input type="hidden" class="form-control" id="id" name="id" value='{{$dados['id']}} 'required>
                <input type="hidden" class="form-control" id="visivel" name="visivel" value='1' required>
            </div>

            <div class="row mb-3">

                 <!-- Imagem Principal -->
                <div class="col-md-3">
                    <label for="imagem" class="form-label font-weight-bold">Imagem Principal</label>
                    @if(!empty($dados['imagem']))
                        <div class="mb-2">
                            <img src="{{ asset($dados['imagem']) }}" alt="Imagem Atual" width="150" required>
                        </div>
                    @endif
                    <input type="file" class="form-control" id="imagem" name="imagem">
                    <input type="hidden" name="imagem_atual" value="{{ $dados['imagem'] }}">
                </div>
    
                <!-- Imagem 2 -->
                <div class="col-md-3">
                    <label for="imagem2" class="form-label font-weight-bold">Imagem 2</label>
                    @if(!empty($dados['imagem2']))
                        <div class="mb-2">
                            <img src="{{ asset($dados['imagem2']) }}" alt="Imagem 2" width="150">
                        </div>
                    @endif
                    <input type="file" class="form-control" id="imagem2" name="imagem2">
                </div>
    
                <!-- Imagem 3 -->
                <div class="col-md-3">
                    <label for="imagem3" class="form-label font-weight-bold">Imagem 3</label>
                    @if(!empty($dados['imagem3']))
                        <div class="mb-2">
                            <img src="{{ asset($dados['imagem3']) }}" alt="Imagem 3" width="150">
                        </div>
                    @endif
                    <input type="file" class="form-control" id="imagem3" name="imagem3">
                </div>
    
                <!-- Imagem 4 -->
                <div class="col-md-3">
                    <label for="imagem4" class="form-label font-weight-bold">Imagem 4</label>
                    @if(!empty($dados['imagem4']))
                        <div class="mb-2">
                            <img src="{{ asset($dados['imagem4']) }}" alt="Imagem 4" width="150">
                        </div>
                    @endif
                    <input type="file" class="form-control" id="imagem4" name="imagem4">
                </div>
    
                <!-- Imagem 5 -->
                <div class="col-md-3">
                    <label for="imagem5" class="form-label font-weight-bold">Imagem 5</label>
                    @if(!empty($dados['imagem5']))
                        <div class="mb-2">
                            <img src="{{ asset($dados['imagem5']) }}" alt="Imagem 5" width="150">
                        </div>
                    @endif
                    <input type="file" class="form-control" id="imagem5" name="imagem5">
                </div>
            </div>
            
            <div class="mb-3">
                <div class="form-group">
                    <label for="data_publicacao" class="font-weight-bold">Data de Publicação</label>
                    <input type="date" class="form-control w-25" name="data_publicacao" id="data_publicacao"
                        value="{{ isset($dados->created_at) ? \Carbon\Carbon::parse($dados->created_at)->format('Y-m-d') : '' }}">
                </div>
            </div>
                    <br>
                    <div class="mb-3">
                        <label for="corpo" class="form-label font-weight-bold">Conteúdo</label>
                        <textarea class="form-control" id="corpo" name="corpo" rows="4"  required> {{$dados['corpo']}}</textarea>
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