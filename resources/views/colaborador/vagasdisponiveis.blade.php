@extends('layout.header')
@section('title','Vagas Disponíveis')

@section('conteudo')
<div class="cta-section" >
    <div class="cta-text" style="flex: 1; color: white; padding-right: 20px;">
        <h2 style="font-size: 40px; font-weight: regular; margin-bottom: 30px;">Vagas Disponíveis</h2>
        <p style="font-size: 18px; margin-bottom: 30px;">Aproveite as oportunidades acessando o link abaixo!</p>
        <a href="http://150.162.78.45:8080/Curriculo/" target="_blank" class="cta-button" >
            Acesse as vagas <i class="fa fa-arrow-right" style="margin-left: 10px;"></i>
        </a>
    </div>
    <div class="cta-image" style="flex: 1; text-align: right;">
        <img src="/images/vagasdisponiveis2.jpg" alt="Homework Services" style="max-width: 100%; border-radius: 10px;">
    </div>
</div>
@endsection
