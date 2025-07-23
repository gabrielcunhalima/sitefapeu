<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    // Método para exibir o formulário
    public function formbruto()
    {

        $titulo = 'Cálculo pelo Salário Bruto';
        return view('calculo.calculobruto', compact('titulo'));
    }

    // Método para processar o cálculo
    public function calcularBruto(Request $request)
    {
        $imp = new ImpostoController();

        $valorBruto = $request->input('valor_bruto');
        $percentualISS = $request->input('percentual_iss');
        $tetoINSS = 897.32;

        $iss = $valorBruto * ($percentualISS / 100);

        $inss = 0;

        $inss = ($valorBruto * 0.11);

        if ($inss > $tetoINSS) {
            $inss = 897.32;
        }
        $irpf = $imp->calcularIRRF($valorBruto, $inss);

        $insspatronal = $valorBruto * 0.20;
        $custoprojeto = $valorBruto + $insspatronal;

        $liquidoReceber = round($valorBruto, 2) - round($iss, 2) - round($inss, 2) - round($irpf, 2);


        return back()->with('resultado', [
            'valor_bruto' => $valorBruto,
            'iss' => $iss,
            'inss' => $inss,
            'irpf' => $irpf,
            'liquido_receber' => $liquidoReceber,
            'custo_projeto' => $custoprojeto,
            'inss_patronal' => $insspatronal,
        ]);
    }

    public function formliquido()
    {
        $titulo = 'Cálculo pelo Salário Líquido';
        return view('calculo.calculoliquido', compact('titulo'));
    }


    public function calcularLiquido(Request $request)
    {
        $imp = new ImpostoController();

        $valorLiquido = $request->input('valor_liquido'); // Recebe o valor líquido informado
        $percentualISS = $request->input('percentual_iss');
        $tetoINSS = 897.32;

        // Estimativa inicial do valor bruto (pode ser ajustado após o cálculo)
        $valorBruto = $valorLiquido;

        // Definindo uma margem de erro para o cálculo
        $margemErro = 0.0001;
        $erro = 1;

        while ($erro > $margemErro) {

            // Cálculo do ISS
            $iss = $valorBruto * ($percentualISS / 100);

            // Cálculo do INSS
            $inss = $valorBruto * 0.11;
            if ($inss > $tetoINSS) {
                $inss = $tetoINSS;
            }

            // Cálculo do IRPF (a função já foi fornecida no seu código)
            $irpf = $imp->calcularIRRF($valorBruto, $inss);

            // Cálculo do valor líquido
            $valorCalculadoLiquido = $valorBruto - $iss - $inss - $irpf;

            // Verifica o erro
            $erro = abs($valorLiquido - $valorCalculadoLiquido);

            // Ajuste do valor bruto baseado na diferença
            $valorBruto = $valorBruto + (($valorLiquido - $valorCalculadoLiquido) / 2); // Ajuste para convergir mais rápido
        }

        $valorBruto = round($valorBruto, 2);
        // Após o cálculo do valor bruto
        $insspatronal = $valorBruto * 0.20;
        $custoprojeto = $valorBruto + $insspatronal;

        // Retorno com os resultados
        return back()->with('resultado', [
            'valor_bruto' => $valorBruto,
            'iss' => $iss,
            'inss' => $inss,
            'irpf' => $irpf,
            'liquido_receber' => $valorLiquido,
            'custo_projeto' => $custoprojeto,
            'inss_patronal' => $insspatronal,
        ]);
    }

    public function formSalario()
    {
        $titulo = 'Simulador de Custos Salariais CLT';
        return view('calculo.calculosalario', compact('titulo'));
    }

    public function calcularSalario(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'salario_base' => 'required|numeric|min:0',
            'adicional_noturno' => 'nullable|numeric|min:0',
            'adicional_insalubridade' => 'nullable|numeric|min:0',
            'vale_transporte' => 'nullable|numeric|min:0',
            'vale_alimentacao' => 'nullable|numeric|min:0',
            'seguro' => 'nullable|numeric|min:0',
            'pcmso' => 'nullable|numeric|min:0',
            'trienio' => 'nullable|numeric|min:0',
            'tipo_contrato' => 'required|in:tempo_determinado,tempo_indeterminado'
        ]);

        // Captura dos dados do formulário
        $salarioBase = $request->input('salario_base', 0);
        $adicionalNoturno = $request->input('adicional_noturno', 0);
        $adicionalInsalubridade = $request->input('adicional_insalubridade', 0);
        $valeTransporte = $request->input('vale_transporte', 0);
        $valeAlimentacao = $request->input('vale_alimentacao', 800);
        $seguro = $request->input('seguro', 0);
        $pcmso = $request->input('pcmso', 10);
        $numeroTrienios = $request->input('trienio', 0);
        $tipoContrato = $request->input('tipo_contrato');

        // Cálculo do valor do triênio (assumindo 5% por triênio sobre salário base)
        $valorTrienio = ($salarioBase * 0.05) * $numeroTrienios;

        // Cálculo do salário bruto
        $salarioBruto = $salarioBase + $adicionalNoturno + $adicionalInsalubridade + $valorTrienio;

        $decimoTerceiro = $salarioBruto / 12;
        $umTercoFerias = $salarioBruto / 36;
        $ferias = $umTercoFerias + $salarioBruto / 12;

        // Encargos patronais básicos
        $inssPatronal = $salarioBruto * 0.20; // 20% INSS Patronal
        $fgts = ($salarioBruto + $decimoTerceiro + $ferias);

        $inss = ($salarioBruto + $decimoTerceiro + $ferias) * 0.25;
        $irrf = $this->calcularIRRF($salarioBruto, $inss);

        $salarioLiquido = $salarioBruto - $inss - $irrf;

        $totalBeneficios = $valeTransporte + $valeAlimentacao + $seguro + $pcmso;

        // Custo total básico
        $custoTotal = $salarioBruto + $inssPatronal + $fgts + $decimoTerceiro + $ferias + $totalBeneficios;

        return back()->with('resultado', [
            'salario_base' => $salarioBase,
            'adicional_noturno' => $adicionalNoturno,
            'adicional_insalubridade' => $adicionalInsalubridade,
            'numero_trienios' => $numeroTrienios,
            'valor_trienio' => $valorTrienio,
            'salario_bruto' => $salarioBruto,
            'inss_colaborador' => $inss,
            'irrf' => $irrf,
            'salario_liquido' => $salarioLiquido,
            'inss_patronal' => $inssPatronal,
            'fgts' => $fgts,
            'decimo_terceiro' => $decimoTerceiro,
            'ferias' => $ferias,
            'vale_transporte' => $valeTransporte,
            'vale_alimentacao' => $valeAlimentacao,
            'seguro' => $seguro,
            'pcmso' => $pcmso,
            'total_beneficios' => $totalBeneficios,
            'custo_total' => $custoTotal,
            'tipo_contrato' => $tipoContrato
        ]);
    }

    private function calcularINSS($salarioBruto)
    {
        // inss 2023/2024
        $faixas = [
            [1320.00, 7.5],
            [2571.29, 9.0],
            [3856.94, 12.0],
            [7507.49, 14.0]
        ];

        $inss = 0;
        $salarioRestante = $salarioBruto;

        foreach ($faixas as $i => $faixa) {
            $limite = $faixa[0];
            $aliquota = $faixa[1];

            if ($salarioRestante <= 0) break;

            if ($i == 0) {
                $baseCalculo = min($limite, $salarioRestante);
            } else {
                $faixaAnterior = $faixas[$i - 1][0];
                $baseCalculo = min($limite - $faixaAnterior, $salarioRestante);
            }

            $inss += $baseCalculo * ($aliquota / 100);
            $salarioRestante -= $baseCalculo;
        }

        $tetoINSS = 828.39;
        return min($inss, $tetoINSS);
    }

    private function calcularIRRF($salarioBruto, $inss)
    {
        $baseCalculo = $salarioBruto - $inss;

        if ($baseCalculo <= 2112.00) {
            return 0;
        } elseif ($baseCalculo <= 2826.65) {
            return ($baseCalculo * 0.075) - 158.40;
        } elseif ($baseCalculo <= 3751.05) {
            return ($baseCalculo * 0.15) - 370.40;
        } elseif ($baseCalculo <= 4664.68) {
            return ($baseCalculo * 0.225) - 651.73;
        } else {
            return ($baseCalculo * 0.275) - 884.96;
        }
    }

    public function formClt()
    {
        $titulo = 'Simulador de Custos Salariais CLT';
        return view('calculo.calculoclt', compact('titulo'));
    }

    public function calcularClt(Request $request)
    {
        $request->validate([
            'salario_base' => 'required|numeric|min:0',
            'adicional_noturno' => 'nullable|numeric|min:0',
            'adicional_insalubridade' => 'nullable|numeric|min:0',
            'trienio' => 'nullable|numeric|min:0',
            'vale_transporte' => 'nullable|numeric|min:0',
            'vale_alimentacao' => 'nullable|numeric|min:0',
            'seguro' => 'nullable|numeric|min:0',
            'pcmso' => 'nullable|numeric|min:0',
        ]);

        $salarioBase = $request->input('salario_base');
        $adicionalNoturno = $request->input('adicional_noturno', 0);
        $adicionalInsalubridade = $request->input('adicional_insalubridade', 0);
        $trienio = $request->input('trienio', 0);
        $valeTransporte = $request->input('vale_transporte', 0);
        $valeAlimentacao = $request->input('vale_alimentacao', 0);
        $seguro = $request->input('seguro', 0);
        $pcmso = $request->input('pcmso', 0);

        // Cálculos baseados na fórmula fornecida
        $totalProventos = $salarioBase + $adicionalNoturno + $adicionalInsalubridade + $trienio;
        
        // Férias - (Total Proventos/12)*1.3333
        $ferias = ($totalProventos / 12) * (1 + 1/3);
        
        // 13º Salário - Total Proventos/12
        $decimoTerceiro = $totalProventos / 12;
        
        // Aviso Prévio - igual ao 13º salário
        $avisoPrevio = $decimoTerceiro;
        
        // Base para cálculo dos encargos
        $baseEncargos = $totalProventos + $decimoTerceiro + $ferias + $avisoPrevio;
        
        // FGTS - 8% multiplicado por 1.5
        $fgts = ($baseEncargos * 0.08) * 1.5;
        
        // INSS - 25%
        $inss = $baseEncargos * 0.25;
        
        // PIS - 1%
        $pis = $baseEncargos * 0.01;
        
        // Total de encargos
        $totalEncargos = $fgts + $inss + $pis + $ferias + $decimoTerceiro + $avisoPrevio;
        
        // Custo total mensal
        $custoTotalMensal = $totalProventos + $totalEncargos + $valeTransporte + $valeAlimentacao + $seguro + $pcmso;

        return back()->with('resultado', [
            'salario' => $salarioBase,
            'adicional_noturno' => $adicionalNoturno,
            'adicional_insalubridade' => $adicionalInsalubridade,
            'trienio' => $trienio,
            'total_proventos' => $totalProventos,
            'ferias' => $ferias,
            'decimo_terceiro' => $decimoTerceiro,
            'aviso_previo' => $avisoPrevio,
            'fgts' => $fgts,
            'inss' => $inss,
            'pis' => $pis,
            'total_encargos' => $totalEncargos,
            'vale_transporte' => $valeTransporte,
            'vale_alimentacao' => $valeAlimentacao,
            'seguro' => $seguro,
            'pcmso' => $pcmso,
            'custo_total_mensal' => $custoTotalMensal,
        ]);
    }
}
