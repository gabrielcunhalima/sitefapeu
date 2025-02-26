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
                    
                    <a href="{{ route('noticias.noticiaspost', ['id' => $item->id]) }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i> Editar
                    </a>
                </td>
                <td>
                    <button class="btn btn-sm btn-danger" onclick="deletePost({{ $item->id }})">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
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

        

</script>

@endsection
