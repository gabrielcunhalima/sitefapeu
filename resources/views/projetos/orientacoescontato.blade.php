@extends('layout.header')
@section('title','Orientações para Contato')

@section('conteudo')
<style>
  .contact-section {
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
    background-color: #06551A;
  }

  .contact-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  }

  .contact-method {
    background-color: #fff;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .contact-method:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  }

  .contact-method-number {
    position: absolute;
    top: 15px;
    left: 15px;
    width: 36px;
    height: 36px;
    background-color: #06551A;
    color: #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    font-size: 18px;
  }

  .contact-method-content {
    padding-left: 30px;
  }

  .contact-method h3 {
    margin-bottom: 15px;
    color: #06551A;
    font-weight: 600;
  }

  .contact-method p {
    color: #555;
    margin-bottom: 0;
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
    border-color: #06551A;
    box-shadow: 0 0 0 0.2rem rgba(6, 85, 26, 0.25);
  }

  .form-label {
    font-weight: 600;
    color: #444;
    margin-bottom: 8px;
  }

  .form-info {
    color: #666;
    font-size: 14px;
    margin-top: 5px;
  }

  .form-section {
    margin-bottom: 30px;
  }

  .form-section-title {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 20px;
    font-weight: 600;
    border-bottom: 1px solid #e9ecef;
    padding-bottom: 10px;
  }

  .back-link {
    display: inline-flex;
    align-items: center;
    color: #06551A;
    font-weight: 600;
    margin-bottom: 30px;
  }

  .back-link:hover {
    text-decoration: underline;
    color: #054615;
  }

  .back-link i {
    margin-right: 8px;
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
  }
</style>

<section class="contact-section">
  <div class="container">
    <a href="{{ route('projetos.captacao') }}" class="back-link">
      <i class="bi bi-arrow-left"></i> Voltar para a página de Captação
    </a>
    
    <h2 class="section-header">Orientações para Contato e Solicitação de Reunião</h2>
    
    <div class="contact-card">
      <p class="lead mb-4">Para entrar em contato com nossa equipe ou agendar uma reunião, escolha um dos métodos abaixo:</p>
      
      <div class="row">
        <div class="col-lg-4">
          <div class="contact-method">
            <div class="contact-method-number">1</div>
            <div class="contact-method-content">
              <h3>Envie um E-mail</h3>
              <p>Caso prefira, envie um e-mail para <strong>projetos@fapeu.org.br</strong>, detalhando sua solicitação. Responderemos o mais rápido possível.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="contact-method">
            <div class="contact-method-number">2</div>
            <div class="contact-method-content">
              <h3>Ligue para nossa Central</h3>
              <p>Para questões urgentes ou um contato mais imediato, ligue para <strong>(48) 3331-7400</strong>. Estamos disponíveis de segunda a sexta, das 8h às 12h e das 13h às 17h.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="contact-method">
            <div class="contact-method-number">3</div>
            <div class="contact-method-content">
              <h3>Preencha o Formulário</h3>
              <p>Se desejar agendar uma reunião, preencha o formulário abaixo. Nossa equipe entrará em contato para confirmar o agendamento.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="form-container" id="formulario-reuniao">
      <h3 class="form-title">Formulário de Solicitação de Reunião</h3>
      
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      
      <form action="{{ route('contato.agendarReuniao') }}" method="POST">
        @csrf
        <div class="form-section">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="nome" class="form-label">1. Nome Completo</label>
              <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">2. E-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>
        </div>
        
        <div class="form-section">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="telefone" class="form-label">3. Telefone para Contato</label>
              <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="col-md-6 mb-3">
              <label for="cargo_instituicao" class="form-label">4. Cargo/Instituição</label>
              <input type="text" class="form-control" id="cargo_instituicao" name="cargo_instituicao" required>
            </div>
          </div>
        </div>
        
        <div class="form-section">
          <div class="mb-3">
            <label for="assunto" class="form-label">5. Assunto da Reunião</label>
            <input type="text" class="form-control" id="assunto" name="assunto" required>
          </div>
          
          <div class="mb-3">
            <label for="descricao" class="form-label">6. Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
          </div>
        </div>
        
        <div class="form-section">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="data_reuniao" class="form-label">7. Data preferencial</label>
              <input type="date" class="form-control" id="data_reuniao" name="data_reuniao" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="horario_reuniao" class="form-label">Horário preferencial</label>
              <select class="form-control" id="horario_reuniao" name="horario_reuniao" required>
                <option value="">Selecione um horário</option>
                <option value="09:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="09:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
              </select>
              <div class="form-info">Selecione a data e horário mais conveniente para você (se houver flexibilidade, indique sua disponibilidade no campo de descrição).</div>
            </div>
          </div>
        </div>
        
        <div class="form-section">
          <label for="preferencia_contato" class="form-label">8. Como prefere ser contatado?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="preferencia_contato" id="contato_email" value="email" required>
            <label class="form-check-label" for="contato_email">
              Por e-mail
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="preferencia_contato" id="contato_telefone" value="telefone">
            <label class="form-check-label" for="contato_telefone">
              Por telefone
            </label>
          </div>
        </div>
        
        <div class="text-end mt-4">
          <button type="submit" class="btn btn-success">Solicitar reunião</button>
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
</section>
@endsection