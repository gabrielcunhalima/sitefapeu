@extends('layout.header')
@section('title', 'Editar Notícias')

@section('conteudo')

<div class="container-fluid mt-3">

   <!-- Botão de retorno -->
   <div class="mb-2">
    <a href="{{ route('admin.menu') }}" class="d-flex align-items-center text-decoration-none mb-3" style="color: #6c7d77; font-size: 18px; margin-left: 20px;">
        <i class="fa-solid fa-arrow-left-long" style="font-size: 20px; margin-right: 15px;"></i>
        <span>Retornar ao Painel</span>
    </a>
</div>
    <h2 class="text-center">Gerenciar Notícias</h2><br>
   
    @if(session('success'))
    <div id="alertMessage" class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow" role="alert" style="z-index: 1050; width: 50%;">
        <strong>Sucesso!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

  
    <div class="table-responsive d-flex justify-content-center" style="margin-top: -28px;">
        <table class="table mt-6 text-center" style="width: 70%; transform: scale(0.95);">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Data</th>
                    <th scope="col">Visível</th>
                    <th scope="col">Conteúdo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $item)
                <tr>
                    <th scope="row">{{ $item->titulo }}</th>

                    <td>
                        <div class="d-flex justify-content-center flex-nowrap gap-3">
                            @for ($i = 1; $i <= 5; $i++)
                            @php
                                $imgField = 'imagem' . ($i == 1 ? '' : $i);
                            @endphp
                
                            <div class="border rounded p-2 text-center d-flex flex-column align-items-center justify-content-between"
                                style="width: 210px; height: 250px;">
                
                                <!-- Área da imagem -->
                                <div style="height: 100px; display: flex; align-items: center; justify-content: center; width: 100%;">
                                    @if(!empty($item->$imgField))
                                        <img src="{{ asset($item->$imgField) }}" alt="Imagem {{ $i }}" class="img-fluid" style="max-height: 100px;">
                                    @else
                                        <span class="text-muted">Sem imagem</span>
                                    @endif
                                </div>
                
                                <!-- Botões -->
                                <div class="w-100 mt-auto">
                                    <form action="{{ route('noticias.updateImagem', ['id' => $item->id, 'numero' => $i]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="{{ $imgField }}" class="form-control form-control-sm">
                                        <button type="submit" class="btn btn-sm btn-primary w-100 mt-1">
                                            <i class="fa fa-upload"></i> Alterar
                                        </button>
                                    </form>
                
                                    @if(!empty($item->$imgField))
                                        <form action="{{ route('noticias.deleteImagem', [$item->id, $imgField]) }}" method="POST" onsubmit="return confirm('Você deseja excluir esta imagem?')">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-secondary w-100 mt-1">
                                                <i class="fa fa-trash"></i> Excluir
                                            </button>
                                        </form>                                        
                                    @endif
                                    </div>
                    
                                </div>
                            @endfor
                        </div>
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
                        <button class="btn btn-sm btn-danger" onclick="deletePost({{ $item->id }})">Excluir Post</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>

setTimeout(() => {
            let alertBox = document.getElementById('alertMessage');
            if (alertBox) {
                alertBox.style.transition = "opacity 0.5s";
                alertBox.style.opacity = "0";
                setTimeout(() => alertBox.remove(), 500);
            }
        }, 3000);

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
