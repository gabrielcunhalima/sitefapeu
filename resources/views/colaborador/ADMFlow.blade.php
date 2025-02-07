<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KTNDQSLG1B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KTNDQSLG1B');
</script>


@extends('layout.header')
@section('title','FAPEU | ADMFlow')

@section('conteudo')

<div class="container mt-5 ">
    
    <h2 class="text-center mb-4 ">Bem-vindo ao ADMFlow</h2>

    

    <p class="text-center mb-5">Gerencie todos os processos administrativos com facilidade e eficiência. Clique abaixo para acessar a área administrativa.</p>
    
    <div class="row justify-content-center ">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="card text-center shadow-lg border-0">
                <div class="bg-verdeescuro text-white p-3 rounded-top d-flex justify-content-center" style="margin-top: -20px;">
                    <img src="images/IconsAreaADM/fulfillment_12982135.png" alt="Ícone" style=" height: 50px;">
                </div>
                <div class="card-body ">
                    <h5 class="card-title">ADMFlow</h5>
                    <p class="card-text">Acesse a área administrativa clicando abaixo!</p>
                    <a href="http://150.162.78.45:8080/ADMFlow/" target="_blank" class="btn btn-success btn-lg rounded-pill">Visitar</a>
                </div>
            </div>
        </div>
    </div>

    

<style>
  body {
            background-image: url('/images/bg (5).png');
        
            background-position: center;
            background-attachment: fixed; /* The background stays fixed while scrolling */
        }
    .card:hover {
        transform: scale(1.05); 
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); 
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: scale(1.1);
    }

    .btn-light:hover {
        background-color: #f8f9fa;
    }

    .bg-secondary {
        background-color: #6c757d;
    }
</style>

@endsection
