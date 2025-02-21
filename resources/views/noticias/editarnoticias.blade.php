@extends('layout.header')

@section('title', 'Editar Notícias')

@section('conteudo')

<div class="container mt-5">
    <h2>Gerenciar Notícias</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-4">
        <thead class="table-dark">
            <tr>
          
                <th>Título</th>
                <th>Imagem</th>
                <th>Data</th>
                <th>Visível</th>
                <th>Conteúdo</th> 
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
               
                <td contenteditable="true" 
                    onBlur="updateField({{ $item->id }}, 'titulo', this.innerText)">
                    {{ $item->titulo }}
                </td>
                <td>
                    <img src="{{ asset('storage/' . $item->imagem) }}" alt="Imagem" width="100">
                    <form action="{{ route('noticias.updateImagem', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="imagem" class="form-control mt-2" required>
                        <button type="submit" class="btn btn-sm btn-primary mt-1">Alterar</button>
                    </form>
                </td>
                <td>
                    <input type="date" class="form-control" value="{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}" 
                        onchange="updateField({{ $item->id }}, 'created_at', this.value)">
                </td>
                <td>
                    <button class="btn btn-sm {{ $item->visivel ? 'btn-success' : 'btn-danger' }}" 
                        onclick="toggleVisibility({{ $item->id }}, {{ $item->visivel ? 0 : 1 }})">
                        {{ $item->visivel ? 'Visível' : 'Oculto' }}
                    </button>
                </td>
                <td>
                
                    <button class="btn btn-sm btn-primary" onclick="openModal({{ $item->id }}, '{{ $item->corpo }}')">
                        <i class="fa fa-edit"></i> Editar
                    </button>
                </td>
                <td>
                    <button class="btn btn-sm btn-danger" onclick="deletePost({{ $item->id }})">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</div>

<!-- Modal de Edição -->
<div class="modal fade" id="editContentModal" tabindex="-1" aria-labelledby="editContentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editContentModalLabel">Editar Conteúdo da Notícia</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                <form id="editContentForm" action="" method="POST">
                    @csrf
                    <input type="hidden" id="editPostId" name="postId">
                    <div class="mb-3">
                        <label for="corpo" class="form-label">Conteúdo</label>
                        <textarea class="form-control" id="modalCorpo" name="corpo" rows="8" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function updateField(id, campo, valor) {
        fetch(`/noticias/editar/${id}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ campo, valor })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  alert('Alteração salva com sucesso!');
              } else {
                  alert('Erro ao salvar alterações.');
              }
          });
    }

    function toggleVisibility(id, visivel) {
        fetch(`/noticias/visibilidade/${id}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ visivel })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  location.reload();
              } else {
                  alert('Erro ao alterar visibilidade.');
              }
          });
    }

    function deletePost(id) {
        if (confirm("Tem certeza que deseja excluir esta notícia?")) {
            fetch(`/noticias/excluir/${id}`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                }
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      location.reload();
                  } else {
                      alert('Erro ao excluir a notícia.');
                  }
              });
        }
    }

            function openModal(id, corpo) {
      
            document.getElementById('editPostId').value = id;
            document.getElementById('modalCorpo').value = corpo;
            
   
            var editModal = new bootstrap.Modal(document.getElementById('editContentModal'));
            editModal.show();
        }

       
            document.getElementById('editContentForm').addEventListener('submit', function(e) {
            e.preventDefault();

            var id = document.getElementById('editPostId').value;
            var corpo = document.getElementById('modalCorpo').value;

            // envia a alteração para o servidor
            fetch(`/noticias/editar/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ campo: 'corpo', valor: corpo })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Conteúdo atualizado com sucesso!');
                    location.reload();
                } else {
                    alert('Erro ao atualizar o conteúdo.');
                }
            });
        });

</script>

@endsection
