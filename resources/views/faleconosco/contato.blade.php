@extends('layout.header')
@section('title',' Contato')

@section('conteudo')
<style>
  /* Custom Contact Page Styles */
  .contact-section {
    padding: 70px 0;
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

  /* Contact Form Styles */
  .contact-form-container {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
  }

  .personalizado {
    border-radius: 8px;
    padding: 12px 15px;
    margin-bottom: 20px;
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

  .location-card {
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    height: 100%;
  }

  .location-card .card-title {
    padding: 20px 20px 0;
    font-weight: 700;
    color: #333;
    border-bottom: 1px solid #f1f1f1;
    padding-bottom: 15px;
  }

  .location-card .card-body {
    padding: 20px;
  }

  .map-container {
    height: 250px;
    width: 100%;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 20px;
  }

  .map-container iframe {
    width: 100%;
    height: 100%;
    border: none;
  }

  .contact-info {
    margin-bottom: 20px;
  }

  .contact-info-item {
    display: flex;
    margin-bottom: 15px;
    color: #555;
  }

  .contact-info-icon {
    color: #06551a;
    font-size: 1.2rem;
    margin-right: 15px;
    flex-shrink: 0;
    margin-top: 3px;
  }

  .contact-info-text {
    line-height: 1.6;
  }

  .contact-directory {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    margin-top: 50px;
  }

  .directory-header {
    margin-bottom: 30px;
    text-align: center;
  }

  .directory-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
  }

  .directory-item {
    padding: 15px;
    border-radius: 8px;
    border-left: 4px solid #06551a;
    background-color: #f8f9fa;
    transition: all 0.3s ease;
  }

  .directory-item:hover {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  }

  .directory-title {
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;
  }

  .directory-contact {
    color: #555;
    display: flex;
    align-items: center;
    margin-bottom: 5px;
  }

  .directory-icon {
    color: #06551a;
    margin-right: 10px;
    font-size: 0.9rem;
  }

  @media (max-width: 768px) {
    .contact-section {
      padding: 40px 0;
    }

    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }

    .contact-form-container,
    .location-card {
      margin-bottom: 30px;
    }

    .directory-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  function validarpost() {
    if (grecaptcha.getResponse() != "")
      return true;

    alert('Selecione a caixa de "Não sou um Robô" ');
    return false;

  }
</script>

<section class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h2 class="section-header">Entre em Contato</h2>

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
          $sucesso = $responseArray['sucess'] ?? false;

          echo $sucesso ? "Mensagem enviada com Sucesso!" : "reCAPTCHA Inválido";
        }

        ?>

        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        <div class="contact-form-container">
          <form action="{{ route('contato.salvar') }}" method="POST" id="demo-form" onsubmit="return validarpost()">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputNome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="inputNome" name="nome" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail" class="form-label">Seu email</label>
                  <input type="email" class="form-control" id="inputEmail" name="email" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputCity" class="form-label">Assunto</label>
                  <input type="text" class="form-control" id="inputCity" name="assunto" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEstado" class="form-label">Destinatário</label>
                  <select id="inputEstado" name="id_setor" class="form-control" required>
                    <option value="0" disabled selected>Escolha um setor...</option>
                    <option value="1">Almoxarifado</option>
                    <option value="2">Administrativo</option>
                    <option value="3">Captação e Implantação de Projetos</option>
                    <option value="4">Compras Nacionais</option>
                    <option value="5">Contas a Pagar</option>
                    <option value="6">Contas a Receber</option>
                    <option value="7">Departamento de Prestação de Contas</option>
                    <option value="8">Diretoria Executiva</option>
                    <option value="9">Financeiro</option>
                    <option value="10">Gerência Administrativa e Financeira</option>
                    <option value="11">Gerência de Contabilidade</option>
                    <option value="12">Gerência de Informatica</option>
                    <option value="13">Gerência de Projetos</option>
                    <option value="14">Importação</option>
                    <option value="15">Jurídico</option>
                    <option value="16">Licitação</option>
                    <option value="17">Recursos Humanos</option>
                    <option value="18">Secretária Executiva</option>
                    <option value="19">Superintendência</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="5" required></textarea>
            </div>

            <div class="my-3 justify-content-center d-flex">
              <div class="g-recaptcha" data-sitekey="6LdBzI4rAAAAAFJVLLsdpXNpIfUS_MLrw5b30LtJ"></div>
            </div>

            <div class="text-center mt-4">
              <button type="submit" class="fapeu-btn">
                <i class="bi bi-send me-2"></i>Enviar Mensagem
              </button>
            </div>

          </form>

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
      </div>

      <div class="col-lg-5">
        <div class="location-card">
          <h5 class="card-title">Localização e Contato</h5>
          <div class="card-body">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3535.8095331151862!2d-48.51924988280334!3d-27.599434089318017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952739000bfe430f%3A0xd55fe81b4f2a84f9!2sFAPEU!5e0!3m2!1sen!2sbr!4v1727808996288!5m2!1sen!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="contact-info">
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="contact-info-text">
                  Rua Delfino Conti, s/n, Campus Universitário Reitor João David Ferreira Lima, Trindade – Florianópolis – Santa Catarina, CEP 88040-370
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="bi bi-mailbox"></i>
                </div>
                <div class="contact-info-text">
                  Correspondências via correio – CEP 88035-972 – Caixa Postal 5078
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-info-text">
                  Telefone/WhatsApp: (48) 33317400
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="bi bi-clock-fill"></i>
                </div>
                <div class="contact-info-text">
                  <strong>Horário de Funcionamento:</strong><br>
                  Segunda a Sexta-feira das 8h às 12h e das 13h às 17h
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-directory">
      <div class="directory-header">
        <h3>Diretório de Contatos</h3>
        <p class="text-muted">Entre em contato diretamente com o departamento desejado</p>
      </div>

      <div class="directory-grid">
        <div class="directory-item">
          <div class="directory-title">Recepção</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7401
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Captação e Implantação de Projetos</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7411
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Gestão de Projetos</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7467
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Gerência de Recursos Humanos</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7442
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Gerência Administrativa e Financeira</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7417
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Financeiro</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7434
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Administrativo</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7429
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Gerência de Contabilidade e Patrimônio</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7423
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Gerência de Tecnologia da Informação</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7436
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Diretoria Executiva</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7479
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Superintendência</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7479
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Secretaria Executiva</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7479
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">Assessoria Jurídica</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7414&nbsp; (48) 3331-7415
          </div>
        </div>

        <div class="directory-item">
          <div class="directory-title">LGPD</div>
          <div class="directory-contact">
            <span class="directory-icon"><i class="bi bi-telephone"></i>&nbsp; <i class="bi bi-whatsapp"></i></span>
            (48) 3331-7442
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection