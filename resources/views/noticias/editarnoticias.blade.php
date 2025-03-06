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
                <th class="text-center">Título</th>
                <th class="text-center">Imagem</th>
                <th class="text-center">Data</th>
                <th class="text-center">Visível</th>
                <th class="text-center">Conteúdo</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
                <td class="text-center">
                    {{ $item->titulo }}
                </td>

                <td class="text-center">
                    <img src="{{ asset('storage/' . $item->imagem) }}" alt="Imagem" width="100">
                    <form action="{{ route('noticias.updateImagem', $item->id) }}" method="POST" enctype="multipart/form-data" class="d-flex align-items-center mt-2">
                        @csrf
                        <input type="file" name="imagem" class="form-control form-control-sm me-2" required>
                        <button type="submit" class="btn btn-sm btn-primary">Alterar</button>
                    </form>
                </td>

                <td class="text-center">
                    <input type="date" class="form-control" value="{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}" 
                        onchange="updateField({{ $item->id }}, 'created_at', this.value)">
                </td>
                
                <td class="text-center">
                    <button class="btn btn-sm {{ $item->visivel ? 'btn-success' : 'btn-danger' }}" 
                        onclick="toggleVisibility({{ $item->id }}, {{ $item->visivel ? 0 : 1 }})">
                        {{ $item->visivel ? 'Visível' : 'Oculto' }}
                    </button>
                </td>
                <td class="text-center">
                    <a href="{{ route('noticias.noticiaspost', ['id' => $item->id]) }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i> Editar
                    </a>
                </td>
                <td class="text-center">
                    <button class="btn btn-sm btn-danger" onclick="deletePost({{ $item->id }})">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
  function updateField(id, campo, valor) {
    fetch("{{ url('/noticias/editar') }}/" + id, {
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
    fetch("{{ url('/noticias/visibilidade') }}/" + id, {
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
        fetch("{{ url('/noticias/excluir') }}/" + id, {
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
