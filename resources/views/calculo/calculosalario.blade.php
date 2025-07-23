@extends('layout.header')
@section('title', 'Simulador para Custos Salariais')

@section('conteudo')
<style>
    .salary-calculator {
        min-height: 100vh;
        padding: 30px 0;
    }

    .calculator-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .calculator-header {
        background: linear-gradient(135deg, #06551a, #30755c);
        color: white;
        padding: 25px;
        text-align: center;
    }

    .calculator-title {
        font-size: 1.8rem;
        font-weight: 700;
        margin: 0;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    .calculator-subtitle {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-top: 5px;
    }

    .form-container {
        padding: 30px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        font-size: 0.95rem;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e1e5e9;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background-color: #fff;
    }

    .form-control:focus {
        outline: none;
        border-color: #06551a;
        box-shadow: 0 0 0 3px rgba(6, 85, 26, 0.1);
    }

    .form-control[readonly] {
        background-color: #f8f9fa;
        color: #6c757d;
    }

    .btn-calculate {
        background: linear-gradient(135deg, #06551a, #30755c);
        color: white;
        border: none;
        padding: 15px 40px;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(6, 85, 26, 0.3);
        display: block;
        margin: 0 auto;
    }

    .btn-calculate:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(6, 85, 26, 0.4);
    }

    .results-container {
        margin-top: 30px;
        background: #f8f9fa;
        border-radius: 10px;
        padding: 25px;
    }

    .results-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .result-section {
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .result-section-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #06551a;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e1e5e9;
    }

    .result-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
        border-bottom: 1px solid #f1f3f4;
    }

    .result-item:last-child {
        border-bottom: none;
    }

    .result-label {
        color: #555;
        font-weight: 500;
    }

    .result-value {
        font-weight: 600;
        color: #333;
    }

    .highlight-total {
        background: linear-gradient(135deg, #06551a, #30755c);
        color: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        margin-top: 20px;
    }

    .highlight-total .total-label {
        font-size: 1rem;
        opacity: 0.9;
    }

    .highlight-total .total-value {
        font-size: 1.5rem;
        font-weight: 700;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        
        .results-grid {
            grid-template-columns: 1fr;
        }
        
        .form-container {
            padding: 20px;
        }
    }
</style>

<div class="salary-calculator">
    <div class="container">
        <div class="calculator-container">
            <div class="calculator-header">
                <h1 class="calculator-title">Simulação para Custos Salariais</h1>
                <small>Atualizado em 29/05/2025</small>
            </div>

            <div class="form-container">
                <form action="{{ route('calculosalario.processar') }}" method="POST">
                    @csrf
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="salario_base" class="form-label">Salário Base</label>
                            <input type="number" step="0.01" name="salario_base" id="salario_base" 
                                   class="form-control" value="{{ old('salario_base', 5000) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="adicional_noturno" class="form-label">Adicional Noturno</label>
                            <input type="number" step="0.01" name="adicional_noturno" id="adicional_noturno" 
                                   class="form-control" value="{{ old('adicional_noturno', 0) }}">
                        </div>

                        <div class="form-group">
                            <label for="adicional_insalubridade" class="form-label">Ad. Insalubridade</label>
                            <input type="number" step="0.01" name="adicional_insalubridade" id="adicional_insalubridade" 
                                   class="form-control" value="{{ old('adicional_insalubridade', 0) }}">
                        </div>

                        <div class="form-group">
                            <label for="vale_transporte" class="form-label">Vl Vale Transporte</label>
                            <input type="number" step="0.01" name="vale_transporte" id="vale_transporte" 
                                   class="form-control" value="{{ old('vale_transporte', 0) }}">
                        </div>

                        <div class="form-group">
                            <label for="vale_alimentacao" class="form-label">Vl Vale Alimentação</label>
                            <input type="number" step="0.01" name="vale_alimentacao" id="vale_alimentacao" 
                                   class="form-control" value="{{ old('vale_alimentacao', 800) }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="seguro" class="form-label">Seguro</label>
                            <input type="number" step="0.01" name="seguro" id="seguro" 
                                   class="form-control" value="{{ old('seguro', 0) }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="pcmso" class="form-label">PCMSO</label>
                            <input type="number" step="0.01" name="pcmso" id="pcmso" 
                                   class="form-control" value="{{ old('pcmso', 10) }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="trienio" class="form-label">Triênio (Nº)</label>
                            <input type="number" name="trienio" id="trienio" 
                                   class="form-control" value="{{ old('trienio', 0) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tipo_contrato" class="form-label">Tipo Contrato</label>
                        <select name="tipo_contrato" id="tipo_contrato" class="form-control" required>
                            <option value="tempo_determinado" {{ old('tipo_contrato') == 'tempo_determinado' ? 'selected' : '' }}>
                                Tempo Determinado
                            </option>
                            <option value="tempo_indeterminado" {{ old('tipo_contrato') == 'tempo_indeterminado' ? 'selected' : '' }}>
                                Tempo Indeterminado
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn-calculate">Calcular</button>
                </form>

                @if (session('resultado'))
                <div class="results-container">
                    <div class="results-grid">
                        <div class="result-section">
                            <h3 class="result-section-title">Composição Salarial</h3>
                            <div class="result-item">
                                <span class="result-label">Salário Base:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['salario_base'], 2, ',', '.') }}</span>
                            </div>
                            @if(session('resultado')['adicional_noturno'] > 0)
                            <div class="result-item">
                                <span class="result-label">Adicional Noturno:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['adicional_noturno'], 2, ',', '.') }}</span>
                            </div>
                            @endif
                            @if(session('resultado')['adicional_insalubridade'] > 0)
                            <div class="result-item">
                                <span class="result-label">Ad. Insalubridade:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['adicional_insalubridade'], 2, ',', '.') }}</span>
                            </div>
                            @endif
                            @if(session('resultado')['valor_trienio'] > 0)
                            <div class="result-item">
                                <span class="result-label">Triênio ({{ session('resultado')['numero_trienios'] }}x):</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['valor_trienio'], 2, ',', '.') }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="result-section">
                            <h3 class="result-section-title">Descontos do Colaborador</h3>
                            <div class="result-item">
                                <span class="result-label">INSS:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['inss_colaborador'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">IRRF:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['irrf'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label"><strong>Salário Líquido:</strong></span>
                                <span class="result-value"><strong>R$ {{ number_format(session('resultado')['salario_liquido'], 2, ',', '.') }}</strong></span>
                            </div>
                        </div>

                        <div class="result-section">
                            <h3 class="result-section-title">Encargos Patronais</h3>
                            <div class="result-item">
                                <span class="result-label">INSS Patronal:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['inss_patronal'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">FGTS:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['fgts'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">13º Salário:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['decimo_terceiro'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">Férias:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['ferias'], 2, ',', '.') }}</span>
                            </div>
                        </div>

                        <div class="result-section">
                            <h3 class="result-section-title">Benefícios</h3>
                            <div class="result-item">
                                <span class="result-label">Vale Transporte:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['vale_transporte'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">Vale Alimentação:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['vale_alimentacao'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">Seguro:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['seguro'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label">PCMSO:</span>
                                <span class="result-value">R$ {{ number_format(session('resultado')['pcmso'], 2, ',', '.') }}</span>
                            </div>
                            <div class="result-item">
                                <span class="result-label"><strong>Total Benefícios:</strong></span>
                                <span class="result-value"><strong>R$ {{ number_format(session('resultado')['total_beneficios'], 2, ',', '.') }}</strong></span>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-total">
                        <div class="total-label">Custo Total do Colaborador</div>
                        <div class="total-value">R$ {{ number_format(session('resultado')['custo_total'], 2, ',', '.') }}</div>
                        <small>Contrato: {{ session('resultado')['tipo_contrato'] == 'tempo_determinado' ? 'Tempo Determinado' : 'Tempo Indeterminado' }}</small>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection