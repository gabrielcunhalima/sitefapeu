@extends('layout.header')
@section('title', 'Editar Notícias')

@section('conteudo')

@if(session('success'))
<div id="alertMessage"
    class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow-lg rounded-pill px-4 py-2 d-flex align-items-center"
    role="alert"
    style="z-index: 2000; max-width: 600px; width: auto;">

    <i class="bi bi-check-circle-fill fs-5 me-2 text-success"></i>

    <div class="flex-grow-1 text-dark fw-semibold">
        Sucesso! {{ session('success') }}
    </div>

    <button type="button" class="btn-close btn-close" data-bs-dismiss="alert" aria-label="Fechar"
        style="margin-left: 1rem; flex-shrink: 0;"></button>
</div>
@endif
<div class="container-fluid mt-4">
    <div class="mb-2" style="margin-left:7%">
        <a href="{{ route('admin.menu') }}" class="d-flex align-items-center text-decoration-none mb-3" style="color: #6c7d77; font-size: 18px;">
            <span><i class="bi bi-arrow-left"></i> Retornar ao Painel</span>
        </a>
    </div>
    <div class="card border-0 shadow-sm mx-auto" style="max-width: 85%;">
        <div class="card-header bg-white border-bottom py-3">
            <h4 class="mb-0" style="color: #2e7d32;"><i class="bi bi-newspaper me-2"></i> Gerenciador de Notícias</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 border-0">
                    <thead style="background-color: #f8f9fa;">
                        <tr>
                            <th scope="col" class="px-3 py-3 border-0" style="width: 20%;">Título</th>
                            <th scope="col" class="px-3 py-3 border-0" style="width: 45%;">Imagens</th>
                            <th scope="col" class="px-3 py-3 border-0" style="width: 15%;">Data</th>
                            <th scope="col" class="px-3 py-3 border-0" style="width: 3%;">Status</th>
                            <th scope="col" class="px-3 py-3 border-0 text-center" style="width: 3%;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $item)
                        <tr style="border-bottom:#f0f0f0 1px solid;">
                            <td class="px-3 py-3" style="white-space: normal; word-wrap: break-word" title="{{ $item->titulo }}">
                                {{ $item->titulo }}
                            </td>
                            <td class="px-3 py-3">
                                <ul class="nav nav-tabs nav-fill" id="imageTabs{{ $item->id }}" role="tablist">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @php
                                        $imgField='imagem' . ($i==1 ? '' : $i);
                                        $hasImage=!empty($item->$imgField);
                                        @endphp
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link py-1 px-2 {{ $i == 1 ? 'active' : '' }} {{ $hasImage ? 'text-success' : 'text-muted' }}"
                                                id="img{{ $i }}-tab-{{ $item->id }}" data-bs-toggle="tab"
                                                data-bs-target="#img{{ $i }}-content-{{ $item->id }}" type="button"
                                                role="tab" aria-controls="img{{ $i }}" aria-selected="{{ $i == 1 ? 'true' : 'false' }}">
                                                <small>Imagem {{ $i }}</small>
                                                @if($hasImage)
                                                <i class="bi bi-check-circle-fill text-success ms-1"></i>
                                                @else
                                                <i class="bi bi-dash-circle text-muted ms-1"></i>
                                                @endif
                                            </button>
                                        </li>
                                        @endfor
                                </ul>
                                <div class="tab-content p-2 border border-top-0 rounded-bottom">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @php
                                        $imgField='imagem' . ($i==1 ? '' : $i);
                                        @endphp
                                        <div class="tab-pane fade {{ $i == 1 ? 'show active' : '' }}"
                                        id="img{{ $i }}-content-{{ $item->id }}" role="tabpanel"
                                        aria-labelledby="img{{ $i }}-tab-{{ $item->id }}">
                                        <div class="d-flex">
                                            <div class="me-3 d-flex align-items-center justify-content-center bg-light rounded"
                                                style="width: 110px; height: 110px;">
                                                @if(!empty($item->$imgField))
                                                <img src="{{ asset($item->$imgField) }}" alt="Imagem {{ $i }}"
                                                    class="img-fluid" style="max-height: 100px; max-width: 100px;">
                                                @else
                                                <div class="text-center text-muted">
                                                    <i class="bi bi-image fs-3 mb-1"></i>
                                                    <div><small>Sem imagem</small></div>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="flex-grow-1">
                                                <form action="{{ route('noticias.updateImagem', ['id' => $item->id, 'numero' => $i]) }}"
                                                    method="POST" enctype="multipart/form-data" class="mb-2">
                                                    @csrf
                                                    <div class="input-group">
                                                        <input type="file" name="{{ $imgField }}" class="form-control form-control-sm">
                                                        <button type="submit" class="btn btn-sm btn-primary">
                                                            <i class="bi bi-upload me-2"></i> Alterar
                                                        </button>
                                                    </div>
                                                </form>
                                                @if(!empty($item->$imgField))
                                                <form action="{{ route('noticias.deleteImagem', [$item->id, $imgField]) }}"
                                                    method="POST" onsubmit="return confirm('Você deseja excluir esta imagem?')">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="bi bi-trash"></i> Excluir
                                                    </button>
                                                </form>
                                                @endif
                                            </div>
                                        </div>
                                </div>
                                @endfor
            </div>
            </td>
            <td class="px-3 py-3">
                <input type="date" class="form-control form-control-sm" value="{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}"
                    onchange="updateField({{ $item->id }}, 'created_at', this.value)">
            </td>
            <td class="px-3 py-3 text-center">
                <button class="btn btn-sm {{ $item->visivel ? 'btn-outline-success' : 'btn-outline-danger' }}"
                    title="{{ $item->visivel ? 'Visível - Clique para ocultar' : 'Oculto - Clique para tornar visível' }}"
                    onclick="toggleVisibility({{ $item->id }}, {{ $item->visivel ? 0 : 1 }})">
                    <i class="bi {{ $item->visivel ? 'bi-eye-fill' : 'bi-eye-slash-fill' }}"></i>
                </button>
            </td>
            <td class="px-3 py-3 text-center">
                <div class="btn-group" role="group">
                    <a href="{{ route('noticias.noticiaspost', ['id' => $item->id]) }}"
                        class="btn btn-sm btn-outline-primary" title="Editar conteúdo">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <button class="btn btn-sm btn-outline-danger"
                        title="Excluir notícia"
                        onclick="deletePost({{ $item->id }})">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer bg-white border-top py-3 d-flex justify-content-between align-items-center">
        <span class="text-muted small">
            Exibindo {{ $news->count() }} notícia(s) de {{ $news->total() }} — Página {{ $news->currentPage() }} de {{ $news->lastPage() }}
        </span>
        <div class="btn-group">
            <a href="{{ $news->previousPageUrl() }}"
                class="btn btn-sm btn-outline-secondary me-2 {{ $news->onFirstPage() ? 'disabled' : '' }}">
                <i class="bi bi-chevron-left"></i> Anterior
            </a>
            <a href="{{ $news->nextPageUrl() }}"
                class="btn btn-sm btn-outline-primary {{ $news->hasMorePages() ? '' : 'disabled' }}">
                Próximo <i class="bi bi-chevron-right"></i>
            </a>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
                body: JSON.stringify({
                    campo,
                    valor
                })
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
                body: JSON.stringify({
                    visivel
                })
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