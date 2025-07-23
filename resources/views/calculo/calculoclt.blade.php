@extends('layout.header')
@section('title', 'Simulador de Custos Salariais CLT')

@section('conteudo')
<style>
    .salary-calculator {
        min-height: 100vh;
        padding: 30px 0;
    }

    .calculator-container {
        max-width: 900px;
        margin: 0 auto;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
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
        display: flex;
        align-items: center;
        gap: 0.5rem;
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
        box-shadow: 0 0 0 3px rgba(6, 85, 26, 0.1);
    }

    .input-group {
        display: flex;
    }

    .input-group-text {
        background: rgb(224, 224, 224);
        color: #06551a;
        border-radius: 8px 0 0 8px;
        padding: 12px 15px;
        font-weight: 600;
    }

    .input-group .form-control {
        border-left: 0;
        border-radius: 0 8px 8px 0;
    }

    .btn-calculate {
        border-radius: 50px;
        font-size: 1.1rem;
        box-shadow: 0 4px 15px rgba(6, 85, 26, 0.3);
        display: block;
        margin: 0 auto;
        padding: 10px 60px;
    }

    .btn-calculate:hover {
        box-shadow: 0 6px 20px rgba(6, 85, 26, 0.4);
    }

    .results-container {
        margin-top: 30px;
        background: #f8f9fa;
        border-radius: 10px;
        padding: 25px;
    }

    .result-table {
        margin: 0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .result-table th {
        background: linear-gradient(135deg, #06551a, #30755c);
        color: white;
        font-weight: 600;
        padding: 1rem;
        border: none;
        text-align: left;
    }

    .result-table th:last-child {
        text-align: right;
    }

    .result-table td {
        padding: 0.75rem 1rem;
        border: none;
        border-bottom: 1px solid #f1f3f4;
        vertical-align: middle;
    }

    .result-table td:last-child {
        text-align: right;
        font-weight: 600;
        font-family: 'Courier New', monospace;
    }

    .total-row {
        border-bottom: solid #06551a 2px;
        background: linear-gradient(135deg, #6C757D, #495057) !important;
        color: white !important;
        font-weight: 700 !important;
    }

    .total-row td {
        border-bottom: none !important;
        padding: 1rem !important;
    }

    .final-total {
        background: linear-gradient(135deg, #06551a, #30755c) !important;
        color: white !important;
        font-size: 1.1rem !important;
        font-weight: 800 !important;
    }

    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* remove do firefox, é diferente por algum motivo */
    input[type=number] {
        -moz-appearance: textfield;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-container {
            padding: 20px;
        }

        .result-table {
            font-size: 0.9rem;
        }
    }
</style>

<div class="salary-calculator">
    <div class="container">
        <div class="calculator-container">
            <div class="form-container">
                <form action="{{ route('calculoclt.processar') }}" method="POST" id="salaryForm">
                    @csrf

                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">
                                Salário Base
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="salario_base" id="salarioBase" min="0" value="{{ old('salario_base') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Adicional Noturno
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="adicional_noturno" id="adicionalNoturno" min="0" value="{{ old('adicional_noturno', 0) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Adicional Insalubridade
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="adicional_insalubridade" id="adicionalInsalubridade" min="0" value="{{ old('adicional_insalubridade', 0) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Triênio
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="trienio" id="trienio" min="0" value="{{ old('trienio', 0) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Vale Transporte
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="vale_transporte" id="valeTransporte" min="0" value="{{ old('vale_transporte', 0) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Vale Alimentação
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="vale_alimentacao" id="valeAlimentacao" min="0" value="{{ old('vale_alimentacao', 1100) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Seguro
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="seguro" id="seguro" min="0" value="{{ old('seguro', 0) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                PCMSO
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="pcmso" id="pcmso" min="0" value="{{ old('pcmso', 10) }}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="fapeu-btn btn-calculate">
                        Calcular Custos
                    </button>
                </form>

                @if (session('resultado'))
                <div class="results-container">
                    <div class="table-responsive">
                        <table class="table result-table table-hover">
                            <thead>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Valores (R$)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Salário</strong></td>
                                    <td>{{ number_format(session('resultado')['salario'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Adicional Noturno</strong></td>
                                    <td>{{ number_format(session('resultado')['adicional_noturno'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Adicional Insalubridade</strong></td>
                                    <td>{{ number_format(session('resultado')['adicional_insalubridade'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>(*)Triênio</strong></td>
                                    <td>{{ number_format(session('resultado')['trienio'], 2, ',', '.') }}</td>
                                </tr>
                                <tr class="total-row">
                                    <td><strong>Total Proventos</strong></td>
                                    <td>{{ number_format(session('resultado')['total_proventos'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>(*)Férias - ((Total Proventos/12)*1.3333)</strong></td>
                                    <td>{{ number_format(session('resultado')['ferias'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>(*)13º Salário - (Total Proventos/12)</strong></td>
                                    <td>{{ number_format(session('resultado')['decimo_terceiro'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>(*)Aviso Prévio</strong></td>
                                    <td>{{ number_format(session('resultado')['aviso_previo'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>FGTS - ((Proventos + 13º + Férias + Av Prévio)*0.08) * 1.5</strong></td>
                                    <td>{{ number_format(session('resultado')['fgts'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>INSS - ((Proventos + 13º + Férias + Av Prévio)*0.25)</strong></td>
                                    <td>{{ number_format(session('resultado')['inss'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>PIS - ((Proventos + 13º + Férias + Av Prévio)*0.01)</strong></td>
                                    <td>{{ number_format(session('resultado')['pis'], 2, ',', '.') }}</td>
                                </tr>
                                <tr class="total-row">
                                    <td><strong>Total Encargos</strong></td>
                                    <td>{{ number_format(session('resultado')['total_encargos'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Vale Transporte</strong></td>
                                    <td>{{ number_format(session('resultado')['vale_transporte'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Vale Alimentação (Cfe acordo Sindical)</strong></td>
                                    <td>{{ number_format(session('resultado')['vale_alimentacao'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Seguro</strong></td>
                                    <td>{{ number_format(session('resultado')['seguro'], 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>PCMSO</strong></td>
                                    <td>{{ number_format(session('resultado')['pcmso'], 2, ',', '.') }}</td>
                                </tr>
                                <tr class="final-total">
                                    <td><strong>Custo Previsto Mensal do Projeto</strong></td>
                                    <td>{{ number_format(session('resultado')['custo_total_mensal'], 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection