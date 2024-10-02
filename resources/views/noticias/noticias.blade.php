@extends('layout.header')
@section('inicio')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class=" font-weight-bold">Notícias</h1>
    </div>
</div>

@endsection

@section('conteudo')

<section class="sectionnews" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2 class='font-weight-bold'>Notícias FAPEU</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($noticiasCarousel as $noticia)
            <div class="col-lg-4">
                <div class="blog-grid">
                    <div class="blog-img">
                        <div class="date">{{ $noticia->created_at->format('d M') }}</div>
                        <a href="{{ $noticia->link }}">
                            <img src="{{ $noticia->imagem }}" title="{{ $noticia->titulo }}" alt="{{ $noticia->titulo }}">
                        </a>
                    </div>
                    <div class="blog-info">
                        <h5><a href="{{ $noticia->link }}">{{ $noticia->titulo }}</a></h5>
                        <p>{{ Str::limit($noticia->corpo, 100) }}</p>
                        <div class="btn-bar">
                            <a href="{{ $noticia->link }}" class="px-btn-arrow">
                                <span>Leia mais</span>
                                <i class="arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section gray-bg" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="section-title">
                            <h2>Latest News</h2>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">04 FEB</div>
                                <a href="#">
                                    <img src="https://www.bootdey.com/image/350x280/FFB6C1/000000" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">04 FEB</div>
                                <a href="#">
                                    <img src="https://www.bootdey.com/image/350x280/87CEFA/000000" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">04 FEB</div>
                                <a href="#">
                                    <img src="https://www.bootdey.com/image/350x280/FF7F50/000000" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection