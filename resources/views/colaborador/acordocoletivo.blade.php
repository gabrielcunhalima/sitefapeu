@extends('layout.header')
@section('title',' Acordo Coletivo')
@section('conteudo')

<style>
  .accordion-item {
    border: none;
    margin-bottom: 15px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .accordion-header {
    margin: 0;
  }

  .accordion-button {
    padding: 20px;
    font-weight: 600;
    font-size: 1.1rem;
    color: #333;
    background-color: #fff;
    border-left: 4px solid #06551A;
  }

  .accordion-button:not(.collapsed) {
    color: #06551A;
    background-color: #f8f9fa;
    box-shadow: none;
  }

  .accordion-button:focus {
    box-shadow: none;
    border-color: #06551A;
  }

  .accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2306551A'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  }

  .accordion-body {
    padding: 20px;
    background-color: #fff;
  }

  .doc-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #333;
    padding: 12px 20px;
    border-radius: 8px;
    transition: all 0.3s ease;
    background-color: #f8f9fa;
    margin-bottom: 10px;
  }
  
  .doc-link:hover {
    background-color: #e9ecef;
    color: #06551A;
  }
  
  .doc-icon {
    color: #06551A;
    font-size: 1.5rem;
    margin-right: 15px;
  }
  
  .aditivo-badge {
    font-size: 0.8rem;
    padding: 4px 8px;
    background-color: #06551A;
    color: white;
    border-radius: 4px;
    margin-left: 10px;
  }

  @media (max-width: 768px) {
    .section-header {
      text-align: center;
    }

    .section-header:after {
      left: 50%;
      transform: translateX(-50%);
    }
  }
</style>

<section class="acordos-section">
  <div class="container">    
    <div class="accordion" id="acordosCollective">
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading2023">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023">
            Acordo Coletivo 2023/2025
          </button>
        </h2>
        <div id="collapse2023" class="accordion-collapse collapse" aria-labelledby="heading2023" data-bs-parent="#acordosCollective">
          <div class="accordion-body">
            <a href="pdfs/Colaborador/AcordoColetivo/ACT FAPEU 2023-2025 (1) (2).pdf" target="_blank" class="doc-link">
              <i class="bi bi-file-earmark-pdf doc-icon"></i>
              <span>Acordo Coletivo FAPEU 2023/2025</span>
            </a>
            <a href="pdfs/Colaborador/AcordoColetivo/TERMO ADITIVO A ACORDO COLETIVO DE TRABALHO 2024 2025 (1) (1).pdf" target="_blank" class="doc-link">
              <i class="bi bi-file-earmark-pdf doc-icon"></i>
              <span>Termo Aditivo ao Acordo Coletivo 2024/2025</span>
              <span class="aditivo-badge">ADITIVO</span>
            </a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading2022">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2022" aria-expanded="false" aria-controls="collapse2022">
            Acordo Coletivo 2022/2023
          </button>
        </h2>
        <div id="collapse2022" class="accordion-collapse collapse" aria-labelledby="heading2022" data-bs-parent="#acordosCollective">
          <div class="accordion-body">
            <a href="pdfs/Colaborador/AcordoColetivo/acordo_coletivo_saae-fapeu_2022-2023.pdff" target="_blank" class="doc-link">
              <i class="bi bi-file-earmark-pdf doc-icon"></i>
              <span>Acordo Coletivo SAAE-FAPEU 2022/2023</span>
            </a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading2021">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2021" aria-expanded="false" aria-controls="collapse2021">
            Acordo Coletivo 2021/2022
          </button>
        </h2>
        <div id="collapse2021" class="accordion-collapse collapse" aria-labelledby="heading2021" data-bs-parent="#acordosCollective">
          <div class="accordion-body">
            <a href="pdfs/Colaborador/AcordoColetivo/acordo_coletivo_saae-fapeu_2021-2022.pdf" target="_blank" class="doc-link">
              <i class="bi bi-file-earmark-pdf doc-icon"></i>
              <span>Acordo Coletivo SAAE-FAPEU 2021/2022</span>
            </a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading2020">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2020" aria-expanded="false" aria-controls="collapse2020">
            Acordo Coletivo 2020/2021
          </button>
        </h2>
        <div id="collapse2020" class="accordion-collapse collapse" aria-labelledby="heading2020" data-bs-parent="#acordosCollective">
          <div class="accordion-body">
            <a href="pdfs/Colaborador/AcordoColetivo/acordo_coletivo_saae-fapeu_2020-2021 (1).pdf" target="_blank" class="doc-link">
              <i class="bi bi-file-earmark-pdf doc-icon"></i>
              <span>Acordo Coletivo SAAE-FAPEU 2020/2021</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const docLinks = document.querySelectorAll('.doc-link');
    docLinks.forEach(link => {
      link.addEventListener('click', function() {
        this.classList.add('bg-light');
        setTimeout(() => {
          this.classList.remove('bg-light');
        }, 300);
      });
    });
  });
</script>
@endsection