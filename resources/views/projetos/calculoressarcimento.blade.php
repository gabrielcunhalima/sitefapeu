@extends('layout.header')
@section('title',' Cálculo de Ressarcimento')

@section('conteudo')
<style>
  .resource-section {
    padding: 50px 0;
    background-color: #f8f9fa;
  }

  .section-header {
    position: relative;
    margin-bottom: 40px;
    font-weight: 700;
    color: #333;
  }

  .section-header:after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 0;
    width: 60px;
    height: 4px;
    background-color: #06551a;
  }

  .form-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
  }

  .form-title {
    font-size: 1.6rem;
    color: #333;
    margin-bottom: 30px;
    text-align: center;
    font-weight: 600;
  }

  .personalizado {
    border-radius: 8px;
    padding: 12px 15px;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
  }

  .personalizado:focus {
    border-color: #06551a;
    box-shadow: 0 0 0 0.2rem rgba(6, 85, 26, 0.25);
  }

  .form-label {
    font-weight: 600;
    color: #444;
    margin-bottom: 8px;
  }

  .form-section {
    margin-bottom: 30px;
  }

  .back-link {
    display: inline-flex;
    align-items: center;
    color: #06551a;
    font-weight: 600;
    margin-bottom: 30px;
  }

  .back-link:hover {
    text-decoration: underline;
    color: #06551a;
  }

  .back-link i {
    margin-right: 8px;
  }

  .info-card {
    background-color: #e8f5e9;
    border-left: 4px solid #06551a;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 30px;
  }

  .info-card p {
    margin-bottom: 0;
    color: #555;
  }

  @media (max-width: 768px) {
    .resource-section {
      padding: 40px 0;
    }

    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }
  }

  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type="number"] {
    -moz-appearance: textfield;
  }
</style>

<section class="resource-section">
  <div class="container">
    <a href="{{ route('projetos.captacao') }}" class="back-link">
      <i class="bi bi-arrow-left"></i> Voltar para a página de Captação
    </a>

    <h2 class="section-header">Cálculo de Ressarcimento</h2>

    <div class="info-card">
      <p>Caso deseje contratar a FAPEU para a gestão administrativa e financeira do seu projeto, podemos calcular o ressarcimento pelos nossos serviços de gerenciamento. Para isso, basta preencher os campos abaixo com as informações solicitadas. Nossa equipe realizará o cálculo de acordo com as diretrizes estabelecidas.</p>
    </div>

    <div class="form-container">
      <h3 class="form-title">Formulário indisponível no momento.</h3>

      <?php

      if ($_POST) {
        $curl = curl_init();

        //DEFINIÇÕES DE REQUISIÇÃO
        curl_setopt_array($curl, [
          CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => [
            'secret' => '6LdBzI4rAAAAAGVQyqlgZxZhBxiZFKXjAU4qQP-r',
            'response' => $_POST['g-recaptcha-response'] ?? ''
          ]

        ]);

        // EXECUTA REQUISIÇÃO
        $response = curl_exec($curl);

        //FECHA CONEXÃO CURL
        curl_close($curl);

        // RESPONSE EM ARRAY
        $responseArray = json_decode($response, true);

        // SUCESSO DO RECAPTCHA
        $sucesso = $responseArray['success'] ?? false;

        echo $sucesso ? "Mensagem enviada com Sucesso!" : "reCAPTCHA Inválido";
      }

      ?>

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif


      @if($errors->any())
      <div class="alert alert-danger mt-4">
        <ul class="mb-0">
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    </div>

    <div class="text-center mt-4">
      <p class="text-muted">Após o preenchimento, nossa equipe entrará em contato com você para finalizar o cálculo e esclarecer quaisquer dúvidas.</p>
      <p class="text-muted">Para outras informações sobre nossos serviços, entre em contato pelo e-mail <strong>projetos@fapeu.org.br</strong> ou telefone <strong>(48) 3331-7400</strong>.</p>
    </div>
  </div>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  function validarpost() {
    if (grecaptcha.getResponse() != "")
      return true;

    alert('Selecione a caixa de "Não sou um Robô" ');
    return false;

  }
</script>
@endsection