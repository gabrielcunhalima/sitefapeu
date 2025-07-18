@extends('layout.header')
@section('title', 'Cálculo de Encargos - Valor Líquido')

@section('conteudo')
<style>
    .calculator-header {
        background: linear-gradient(135deg,rgb(30, 71, 39), #30755c);
        color: white;
        padding: 3px;
        text-align: center;
        border-radius: 10px 10px 0 0;
    }

    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<div class="container mt-5 pb-5 col-4 mx-auto">
    <div class="calculator-header"></div>
    <form action="{{ route('calculorpaliquido.processar') }}" method="POST" class="bg-green-light p-4 rounded shadow">
        @csrf
        <div class="mb-3">
            <label for="valor_liquido" class="form-label">Valor Líquido:</label>
            <input type="number" step="0.01" name="valor_liquido" id="valor_liquido" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="percentual_iss" class="form-label">% ISS do Serviço Prestado:</label>
            <select name="percentual_iss" id="percentual_iss" class="form-control" required>
                <option value="0">0%</option>
                <option value="2">2%</option>
                <option value="2.5">2,5%</option>
                <option value="3">3%</option>
                <option value="5">5%</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="teto_inss" class="form-label">Teto INSS:</label>
            <input type="text" name="teto_inss" id="teto_inss" class="form-control" value='897,32' readonly required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    @if (session('resultado'))
    <div class="mt-5">
        <ul class="list-group">
            <li class="list-group-item">Valor Bruto: R$ <strong>{{ number_format(session('resultado')['valor_bruto'], 2, ',', '.') }}</strong></li>
            <li class="list-group-item">ISS: R$ <strong>{{ number_format(session('resultado')['iss'], 2, ',', '.') }}</strong></li>
            <li class="list-group-item">INSS: R$ <strong>{{ number_format(session('resultado')['inss'], 2, ',', '.') }}</strong></li>
            <li class="list-group-item">IRPF: R$ <strong>{{ number_format(session('resultado')['irpf'], 2, ',', '.') }}</strong></li>
            <li class="list-group-item">INSS Patronal: R$ <strong>{{ number_format(session('resultado')['inss_patronal'], 2, ',', '.') }}</strong></li>
            <li class="list-group-item">Custo Projeto: R$ <strong>{{ number_format(session('resultado')['custo_projeto'], 2, ',', '.') }}</strong></li>
            <li class="list-group-item">Líquido a Receber: R$ <strong>{{ number_format(session('resultado')['liquido_receber'], 2, ',', '.') }}</strong></li>
        </ul>
    </div>
    @endif
</div>

@endsection