@extends('layout.header')
@section('title','FAPEU - Projetos')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Site')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Outros estilos CSS personalizados -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


@section('conteudo')
<style>
    .blog-post {
        -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
    }

    .blog-post .blog-img .overlay,
    .blog-post .blog-img .post-meta {
        position: absolute;
        opacity: 0;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .blog-post .blog-img .overlay {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .blog-post .blog-img .post-meta {
        bottom: 5%;
        right: 5%;
        z-index: 1;
    }

    .blog-post .blog-img .post-meta .read-more:hover {
        color: #6dc77a !important;
    }

    .blog-post .content h1,
    .blog-post .content h2,
    .blog-post .content h3,
    .blog-post .content h4,
    .blog-post .content h5,
    .blog-post .content h6 {
        line-height: 1.2;
    }

    .blog-post .content .title {
        font-size: 18px;
    }

    .blog-post .content .title:hover {
        color: #6dc77a !important;
    }

    .blog-post .content .author .name:hover {
        color: #6dc77a !important;
    }

    .blog-post:hover {
        -webkit-transform: translateY(-7px);
        transform: translateY(-7px);
        -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    }

    .btn:hover {
        background-color: black;
        color: black;
    }

    .blog-post:hover .blog-img .overlay {
        opacity: 0.65;
    }

    .blog-post:hover .blog-img .post-meta {
        opacity: 1;
    }

    .blog-post .post-meta .like i,
    .profile-post .like i {
        -webkit-text-stroke: 2px #dd2427;
        -webkit-text-fill-color: transparent;
    }

    .blog-post .post-meta .like:active i,
    .blog-post .post-meta .like:focus i,
    .profile-post .like:active i,
    .profile-post .like:focus i {
        -webkit-text-stroke: 0px #dd2427;
        -webkit-text-fill-color: #dd2427;
    }

    .avatar.avatar-ex-sm {
        height: 36px;
    }

    .shadow {
        -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15) !important;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.15) !important;
    }

    .text-muted {
        color: #8492a6 !important;
    }

    .para-desc {
        max-width: 600px;
    }

    .text-muted {
        color: #8492a6 !important;
    }

    .section-title .title {
        letter-spacing: 0.5px;
        font-size: 30px;
    }
    .card-img-container {
    width: 100%;
    aspect-ratio: 16/9; 
    overflow: hidden;
}
.card-img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card {
  height: 250px; 
  overflow: hidden;
}

.card-text { 
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis; 
}

</style>
<div class="container">
    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Nóticias Recentes</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Confira o que aconteceu nesses últimos dias na FAPEU.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->


        <!--Inicio da lógica para post -->

        <body>
            <div class="row">
                @foreach ($news as $item)
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
        <div class="blog-post rounded border">
            <a href="{{ route('projetos.noticiasleitura', ['id' => $item->id]) }}">
                <div class="blog-img d-block overflow-hidden position-relative card-img-container">
                    <img src="{{ asset('storage/' . $item->imagem) }}" class="img-fluid rounded-top" alt="Imagem da notícia">
                    <div class="overlay rounded-top bg-dark"></div>
                    <div class="post-meta">
                        <p class="text-white">Clique para conhecer</p>
                    </div>  
                </div>
            </a>
            <div class="content p-3">
                <h4 class="mt-2"><a href="{{ route('projetos.noticiasleitura', ['id' => $item->id]) }}" class="text-dark title">{{ $item->titulo }}</a></h4>
                <p class="text-muted mt-2 card-text">{!! $item->corpo !!}</p>
                <div class="pt-3 mt-3 border-top d-flex">
                    <div class="author mt-2">
                        <h6 class="mb-0"><a href="{{ route('projetos.noticiasleitura', ['id' => $item->id]) }}" class="text-dark name">Leia mais</a></h6>
                    </div>
                </div>
            </div>
        </div><!--end blog post-->
    </div><!--end coluna-->
    @endforeach
            </div>
    </div>
</div>
@endsection

@if(session('success'))
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Sucesso!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
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
        }, 3000); // Fecha após 5 segundos
    };
</script>

</body>

</html>
@endif