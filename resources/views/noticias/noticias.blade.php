@extends('layout.header')
@section('title','Notícias FAPEU')
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