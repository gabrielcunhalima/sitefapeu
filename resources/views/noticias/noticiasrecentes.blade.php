@extends('layout.header')
@section('title',' Notícias')

@section('conteudo')
<style>
    .blog-post {
        -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
        border-radius: 12px; 
        overflow: hidden;
    }

    .blog-post .blog-img {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
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
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .blog-post .blog-img .post-meta {
        bottom: 5%;
        right: 5%;
        z-index: 1;
    }

    .blog-post .blog-img .post-meta .read-more:hover {
        color: #6dc77a !important;
    }

    .blog-post .content {
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
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
    }

    .card {
        height: 250px;
        overflow: hidden;
    }

    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        max-height: 4.5em;
    }

    .carousel-inner {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        overflow: hidden;
    }

    .carousel-inner img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .carousel-item img {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    a {
        text-decoration: none;
    }

    main {
        background-color: #eeeeeeff;
    }

    body {
        background-color: #eeeeeeff !important;
    }

    .content {
        background-color: #ffffffff;
    }

    /* Garantir que a classe rounded-top funcione corretamente */
    .rounded-top {
        border-top-left-radius: 12px !important;
        border-top-right-radius: 12px !important;
    }
</style>
<div class="noticiasrecentes">
    <div class="container">
        <div class="row">
            @foreach ($news as $item)
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="blog-post rounded border">
                    <div class="blog-img d-block overflow-hidden position-relative card-img-container bg-claro shadow-sm" style="position: relative; width: 100%; height: auto;">
                        @if($item->imagem || $item->imagem2 || $item->imagem3 || $item->imagem4 || $item->imagem5)
                        <div id="carousel{{$item->id}}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="000">
                            <div class="carousel-inner">
                                @php
                                $images = ['imagem', 'imagem2', 'imagem3', 'imagem4', 'imagem5'];
                                $firstImage = true;
                                @endphp
                                @foreach($images as $image)
                                @if($item->$image)
                                <div class="carousel-item {{ $firstImage ? 'active' : '' }}">
                                    <img src="{{ asset($item->$image) }}" class="d-block w-100" alt="Imagem da notícia {{ $loop->index + 1 }}">
                                </div>
                                @php $firstImage = false; @endphp
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <a href="{{ route('noticias.noticiasleitura', ['link' => $item->link]) }}" class="text-white">
                            <div class="overlay rounded-top bg-dark"></div>
                            <div class="post-meta">
                                <p class="border rounded-pill px-2">Clique para ler tudo</p>
                            </div>
                        </a>
                    </div>

                    <div class="content p-3">
                        <small class="text-muted">{{ $item->created_at->format('d/m/Y') }}</small>
                        <h4 class="mt-2"><a href="{{ route('noticias.noticiasleitura', ['link' => $item->link]) }}" class="text-dark title">{{ $item->titulo }}</a></h4>
                        <!-- <p class="text-muted mt-2 card-text">{!! Str::limit($item->corpo, 104) !!}</p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container mt-5 mb-5 d-flex justify-content-end">
    {{ $news->links('pagination::bootstrap-4') }}
</div>


@if(session('success'))
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="successModalLabel"><i class="bi bi-check-circle-fill me-2"></i>Sucesso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body text-dark">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">OK</button>
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