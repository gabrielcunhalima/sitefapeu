@extends('layout.header')
@section('title',' Revista FAPEU')

@section('conteudo')
<style>
    a {
        text-decoration: none;
        color: inherit;
    }

    .alturaimagem {
        min-height: 300px;
    }

    .revista-section {
        padding: 30px 0;
    }

    .intro-container {
        position: relative;
        background-color: #fff;
        border-radius: 8px;
        padding: 25px 30px;
        margin-bottom: 40px;
        box-shadow: -5px 10px 30px rgba(105, 105, 105, 0.19), 0 6px 6px rgba(100, 100, 100, 0.23);
        border-left: 3px solid #06551A;
        border-bottom: 3px solid #06551A;
    }

    .revista-card {
        background-color: #fff;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 20px rgba(131, 131, 131, 0.19), 0 6px 6px rgba(153, 153, 153, 0.23);
        position: relative;
        overflow: hidden;
    }

    .revista-img {
        display: block;
        width: 100%;
        height: auto;
        transition: transform 0.5s ease;
        padding: 15px;
        max-width: 230px;
        margin: 0 auto;
    }

    .revista-img:hover {
        transform: scale(1.032);
    }

    .revista-content {
        padding: 15px 20px;
        text-align: center;
        flex-grow: 1;
        background-color: #f8f9fa;
        border-top: 1px solid #eee;
    }

    .revista-title {
        font-weight: 700;
        font-size: 0.95rem;
        margin-bottom: 10px;
        color: #333;
    }

    .revista-meta {
        font-size: 0.85rem;
        color: #555;
        margin-bottom: 15px;
    }

    .view-btn {
        display: inline-block;
        color: white;
        border-radius: 50px;
        padding: 8px 20px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-top: 10px;
        border: none;
        cursor: pointer;
    }

    .section-title {
        position: relative;
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 40px;
        text-align: center;
        color: #333;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background-color: #06551A;
    }

    .revista-filter {
        margin-bottom: 30px;
        text-align: center;
    }

    .filter-btn {
        background-color: #f1f1f1;
        border: none;
        padding: 8px 16px;
        margin: 0 5px 10px;
        border-radius: 50px;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background-color: #06551A;
        color: white;
    }

    @media (max-width: 767px) {
        .revista-card {
            margin-bottom: 30px;
        }

        .revista-filter .filter-btn {
            display: inline-block;
            margin-bottom: 10px;
        }
    }
</style>

<section class="revista-section">
    <div class="container">

        <div class="intro-container">
            <p class="mb-0">
                A <strong>Revista da Fapeu</strong> é uma publicação que tem o objetivo de trazer à luz uma amostra dos trabalhos de <strong>pesquisa</strong>, <strong>ensino</strong> e <strong>extensão</strong> desenvolvidos em instituições públicas de ensino superior em parceria com a Fapeu.
                Com a revista, a Fapeu busca ir além dos círculos acadêmicos e reforça à sociedade o quanto é realizado em quantidade e qualidade nos laboratórios universitários.
            </p>
        </div>

        <div class="revista-filter">
            <button class="filter-btn active" data-filter="all">Todas</button>
            <button class="filter-btn" data-filter="2020">2020+</button>
            <button class="filter-btn" data-filter="2015">2015-2019</button>
            <button class="filter-btn" data-filter="2010">2010-2014</button>
            <button class="filter-btn" data-filter="2000">Antes de 2010</button>
        </div>

        <div class="row revista-container">
            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2020">
                <div class="revista-card" style="border-left: 4px solid #627F91;">
                    <div class="alturaimagem" style="background-color: #ECF0F3;">
                        <a href="https://heyzine.com/flip-book/4ab4922edb.html">
                            <img src="{{asset('images/Revistas/revista-15.png')}}" alt="Revista FAPEU Volume 15" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 15</h3>
                            <p class="revista-meta">N° 15. Ano XV. Volume 15. 2024.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/4ab4922edb.html"><span class="view-btn" style="background-color: #627F91;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2020">
                <div class="revista-card" style="border-left: 4px solid #202C3C;">
                    <div class="alturaimagem" style="background-color: #E7E9EC;">
                        <a href="https://heyzine.com/flip-book/58bb689faa.html">
                            <img src="{{asset('images/Revistas/revista-14.png')}}" alt="Revista FAPEU Volume 14" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 14</h3>
                            <p class="revista-meta">N° 14. Ano XIV. Volume 14. 2023.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/58bb689faa.html"><span class="view-btn" style="background-color: #202C3C;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2020">
                <div class="revista-card" style="border-left: 4px solid #5384CA;">
                    <div class="alturaimagem" style="background-color: #ECF3FA;">
                        <a href="https://heyzine.com/flip-book/9264a3d9c3.html">
                            <img src="{{asset('images/Revistas/revista-13.png')}}" alt="Revista FAPEU Volume 13" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 13</h3>
                            <p class="revista-meta">N° 13. Ano XIII. Volume 13. 2022.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/9264a3d9c3.html"><span class="view-btn" style="background-color: #5384CA;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2020">
                <div class="revista-card" style="border-left: 4px solid #691E0A;">
                    <div class="alturaimagem" style="background-color: #F1E7E4;">
                        <a href="https://heyzine.com/flip-book/a49d45b959.html">
                            <img src="{{asset('images/Revistas/revista-12.jpg')}}" alt="Revista FAPEU Volume 12" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 12</h3>
                            <p class="revista-meta">N° 12. Ano XII. Volume 12. 2020.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/a49d45b959.html"><span class="view-btn" style="background-color: #691E0A;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2015">
                <div class="revista-card" style="border-left: 4px solid #776873">
                    <div class="alturaimagem" style="background-color: #F1EEF0;">
                        <a href="https://heyzine.com/flip-book/b56bc101ba.html">
                            <img src="{{asset('images/Revistas/revista-11.jpg')}}" alt="Revista FAPEU Volume 11" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 11</h3>
                            <p class="revista-meta">N° 11. Ano XI. Volume 11. 2019.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/b56bc101ba.html"><span class="view-btn" style="background-color: #776873;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2015">
                <div class="revista-card" style="border-left: 4px solid #8B3B0C;">
                    <div class="alturaimagem" style="background-color: #F5EAE4;">
                        <a href="https://heyzine.com/flip-book/9415656b1a.html">
                            <img src="{{asset('images/Revistas/revista-10.jpg')}}" alt="Revista FAPEU Volume 10" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 10</h3>
                            <p class="revista-meta">N° 10. Ano X. Volume 10. 2017.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/9415656b1a.html"><span class="view-btn" style="background-color: #8B3B0C;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2015">
                <div class="revista-card" style="border-left: 4px solid #284703;">
                    <div class="alturaimagem" style="background-color: #E8EEE3;">
                        <a href="https://heyzine.com/flip-book/0574a87c09.html">
                            <img src="{{asset('images/Revistas/revista-9.jpeg')}}" alt="Revista FAPEU Volume 9" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 9</h3>
                            <p class="revista-meta">N° 9. Ano IX. Volume 9. 2016.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/0574a87c09.html"><span class="view-btn" style="background-color: #284703;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2015">
                <div class="revista-card" style="border-left: 4px solid #6A8420;">
                    <div class="alturaimagem" style="background-color: #EEF3E5;">
                        <a href="https://heyzine.com/flip-book/4758bd61b4.html">
                            <img src="{{asset('images/Revistas/revista-8.jpg')}}" alt="Revista FAPEU Volume 8" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 8</h3>
                            <p class="revista-meta">N° 8. Ano VIII. Volume 8. 2015.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/4758bd61b4.html"><span class="view-btn" style="background-color: #6A8420;">Ler revista</span></a>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2010">
                <div class="revista-card" style="border-left: 4px solid #160D06;">
                    <div class="alturaimagem" style="background-color: #E6E4E3; ">
                        <a href="https://heyzine.com/flip-book/65cb8a15a5.html">
                            <img src="{{asset('images/Revistas/revista-7.jpg')}}" alt="Revista FAPEU Volume 7" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 7</h3>
                            <p class="revista-meta">N° 7. Ano VII. Volume 7. 2014.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/65cb8a15a5.html"><span class="view-btn" style="background-color: #160D06;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2010">
                <div class="revista-card" style="border-left: 4px solid #6784AB;">
                    <div class="alturaimagem" style="background-color: #EAEFF5;">
                        <a href="https://heyzine.com/flip-book/94915e4e65.html">
                            <img src="{{asset('images/Revistas/revista-6.jpg')}}" alt="Revista FAPEU Volume 6" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 6</h3>
                            <p class="revista-meta">N° 6. Ano VI. Volume 6. 2013.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/94915e4e65.html"><span class="view-btn" style="background-color: #6784AB;">Ler revista</span></a>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2010">
                <div class="revista-card" style="border-left: 4px solid #E5D4C4;">
                    <div class="alturaimagem" style="background-color:rgb(255, 246, 236);">
                        <a href="https://heyzine.com/flip-book/f19992c6c2.html">
                            <img src="{{asset('images/Revistas/revista-5.jpg')}}" alt="Revista FAPEU Volume 5" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 5</h3>
                            <p class="revista-meta">N° 5. Ano V. Volume 5. 2012.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/f19992c6c2.html"><span class="view-btn text-dark" style="background-color: #E5D4C4;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2010">
                <div class="revista-card" style="border-left: 4px solid #E8510D;">
                    <div class="alturaimagem" style="background-color:rgb(255, 230, 219);">
                        <a href="https://heyzine.com/flip-book/d6acb68ceb.html">
                            <img src="{{asset('images/Revistas/revista-4.jpg')}}" alt="Revista FAPEU Volume 4" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 4</h3>
                            <p class="revista-meta">N° 4. Ano IV. Volume 4. 2011.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/d6acb68ceb.html"><span class="view-btn" style="background-color: #E8510D;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2010">
                <div class="revista-card" style="border-left: 4px solid #023C69;">
                    <div class="alturaimagem" style="background-color: #E6F1F7;">
                        <a href="https://heyzine.com/flip-book/31b58ea1d5.html">
                            <img src="{{asset('images/Revistas/revista-3.jpg')}}" alt="Revista FAPEU Volume 3" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 3</h3>
                            <p class="revista-meta">N° 3. Ano III. Volume 3. 2010.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/31b58ea1d5.html"><span class="view-btn" style="background-color: #023C69;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2000">
                <div class="revista-card" style="border-left: 4px solid #771A32">
                    <div class="alturaimagem" style="background-color: #F7E8EC;">
                        <a href="https://heyzine.com/flip-book/6158d1de99.html">
                            <img src="{{asset('images/Revistas/revista-2.jpg')}}" alt="Revista FAPEU Volume 2" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 2</h3>
                            <p class="revista-meta">N° 2. Ano II. Volume 2. 2005.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/6158d1de99.html"><span class="view-btn" style="background-color: #771A32;">Ler revista</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4 revista-item" data-category="2000">
                <div class="revista-card" style="border-left: 4px solid #28542E;">
                    <div class="alturaimagem" style="background-color: #E0F0E2;">
                        <a href="https://heyzine.com/flip-book/607bb67147.html">
                            <img src="{{asset('images/Revistas/revista-1.jpg')}}" alt="Revista FAPEU Volume 1" class="revista-img">
                        </a>
                    </div>
                    <div class="revista-content">
                        <div>
                            <h3 class="revista-title">Revista FAPEU - Volume 1</h3>
                            <p class="revista-meta">N° 1. Ano I. Volume 1. 2003.<br>ISSN 1806-0110</p>
                        </div>
                        <a href="https://heyzine.com/flip-book/607bb67147.html"><span class="view-btn" style="background-color: #28542E;">Ler revista</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.filter-btn').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');

            if (filterValue == 'all') {
                $('.revista-item').show();
            } else {
                $('.revista-item').hide();
                $('.revista-item[data-category="' + filterValue + '"]').show();
            }
        });

        $('.revista-card').each(function(index) {
            $(this).css({
                'animation-delay': (index * 0.1) + 's'
            });
        });
    });
</script>
@endsection