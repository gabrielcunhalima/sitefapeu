<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    // -------------------------------------------------------------------------
    // OBSERVAÇÃO: todos os cálculos de INSS e IRRF foram centralizados em
    // ImpostoController para evitar duplicação e divergência de tabelas.
    // -------------------------------------------------------------------------

    // =========================================================================
    // CÁLCULO PELO SALÁRIO BRUTO
    // =========================================================================

    public function formbruto()
    {
        $titulo = 'Cálculo pelo Salário Bruto';
        return view('calculo.calculobruto', compact('titulo'));
    }

    public function calcularBruto(Request $request)
    {
        $imp = new ImpostoController();

        $valorBruto    = (float) $request->input('valor_bruto');
        $percentualISS = (float) $request->input('percentual_iss');
        $tetoInss      = (float) str_replace(',', '.', $request->input('teto_inss', '908.86'));

        $iss  = $valorBruto * ($percentualISS / 100);
        $inss = $imp->calcularINSS($valorBruto, $tetoInss);
        $irpf = $imp->calcularIRRF($valorBruto, $inss);

        $inssPatronal   = $valorBruto * 0.20;
        $custoProjet    = $valorBruto + $inssPatronal;
        $liquidoReceber = round($valorBruto - $iss - $inss - $irpf, 2);

        return back()->with('resultado', [
            'valor_bruto'   => $valorBruto,
            'iss'           => round($iss,  2),
            'inss'          => round($inss, 2),
            'irpf'          => round($irpf, 2),
            'liquido_receber' => $liquidoReceber,
            'custo_projeto' => round($custoProjet, 2),
            'inss_patronal' => round($inssPatronal, 2),
        ]);
    }

    // =========================================================================
    // CÁLCULO PELO SALÁRIO LÍQUIDO
    // =========================================================================

    public function formliquido()
    {
        $titulo = 'Cálculo pelo Salário Líquido';
        return view('calculo.calculoliquido', compact('titulo'));
    }

    public function calcularLiquido(Request $request)
    {
        $imp = new ImpostoController();

        $valorLiquido  = (float) $request->input('valor_liquido');
        $percentualISS = (float) $request->input('percentual_iss');
        $tetoInss      = (float) str_replace(',', '.', $request->input('teto_inss', '908.86'));

        // Busca o bruto por aproximações sucessivas (bissecção simples)
        $margemErro = 0.01;
        $valorBruto = $valorLiquido; // estimativa inicial

        for ($i = 0; $i < 100; $i++) {
            $iss  = $valorBruto * ($percentualISS / 100);
            $inss = $imp->calcularINSS($valorBruto, $tetoInss);
            $irpf = $imp->calcularIRRF($valorBruto, $inss);

            $liquidoCalculado = $valorBruto - $iss - $inss - $irpf;
            $diferenca        = $valorLiquido - $liquidoCalculado;

            if (abs($diferenca) <= $margemErro) {
                break;
            }

            // Ajuste proporcional para convergência mais rápida
            $valorBruto += $diferenca / 2;
        }

        $valorBruto   = round($valorBruto, 2);
        $inssPatronal = $valorBruto * 0.20;
        $custoProjet  = $valorBruto + $inssPatronal;

        return back()->with('resultado', [
            'valor_bruto'     => $valorBruto,
            'iss'             => round($iss,  2),
            'inss'            => round($inss, 2),
            'irpf'            => round($irpf, 2),
            'liquido_receber' => $valorLiquido,
            'custo_projeto'   => round($custoProjet,  2),
            'inss_patronal'   => round($inssPatronal, 2),
        ]);
    }

    public function formSalario()
    {
        $titulo = 'Simulador de Custos Salariais CLT';
        return view('calculo.calculosalario', compact('titulo'));
    }

    public function calcularSalario(Request $request)
    {
        $request->validate([
            'salario_base'             => 'required|numeric|min:0',
            'adicional_noturno'        => 'nullable|numeric|min:0',
            'adicional_insalubridade'  => 'nullable|numeric|min:0',
            'vale_transporte'          => 'nullable|numeric|min:0',
            'vale_alimentacao'         => 'nullable|numeric|min:0',
            'seguro'                   => 'nullable|numeric|min:0',
            'pcmso'                    => 'nullable|numeric|min:0',
            'trienio'                  => 'nullable|numeric|min:0',
            'tipo_contrato'            => 'required|in:tempo_determinado,tempo_indeterminado',
        ]);

        $imp = new ImpostoController();

        $salarioBase             = (float) $request->input('salario_base', 0);
        $adicionalNoturno        = (float) $request->input('adicional_noturno', 0);
        $adicionalInsalubridade  = (float) $request->input('adicional_insalubridade', 0);
        $valeTransporte          = (float) $request->input('vale_transporte', 0);
        $valeAlimentacao         = (float) $request->input('vale_alimentacao', 800);
        $seguro                  = (float) $request->input('seguro', 0);
        $pcmso                   = (float) $request->input('pcmso', 10);
        $numeroTrienios          = (float) $request->input('trienio', 0);
        $tipoContrato            = $request->input('tipo_contrato');

        $valorTrienio  = ($salarioBase * 0.05) * $numeroTrienios;
        $salarioBruto  = $salarioBase + $adicionalNoturno + $adicionalInsalubridade + $valorTrienio;

        $decimoTerceiro = $salarioBruto / 12;
        $umTercoFerias  = $salarioBruto / 36;
        $ferias         = $salarioBruto / 12 + $umTercoFerias;

        $inssPatronal = $salarioBruto * 0.20;

        // INSS e IRRF calculados sobre o salário mensal (competência mensal)
        $inss = $imp->calcularINSS($salarioBruto);
        $irrf = $imp->calcularIRRF($salarioBruto, $inss);

        $salarioLiquido  = $salarioBruto - $inss - $irrf;
        $totalBeneficios = $valeTransporte + $valeAlimentacao + $seguro + $pcmso;

        // FGTS: 8% sobre salário + 13º + férias
        $fgts = ($salarioBruto + $decimoTerceiro + $ferias) * 0.08;

        $custoTotal = $salarioBruto + $inssPatronal + $fgts + $decimoTerceiro + $ferias + $totalBeneficios;

        return back()->with('resultado', [
            'salario_base'            => $salarioBase,
            'adicional_noturno'       => $adicionalNoturno,
            'adicional_insalubridade' => $adicionalInsalubridade,
            'numero_trienios'         => $numeroTrienios,
            'valor_trienio'           => round($valorTrienio,  2),
            'salario_bruto'           => round($salarioBruto,  2),
            'inss_colaborador'        => round($inss,          2),
            'irrf'                    => round($irrf,          2),
            'salario_liquido'         => round($salarioLiquido, 2),
            'inss_patronal'           => round($inssPatronal,  2),
            'fgts'                    => round($fgts,          2),
            'decimo_terceiro'         => round($decimoTerceiro, 2),
            'ferias'                  => round($ferias,        2),
            'vale_transporte'         => $valeTransporte,
            'vale_alimentacao'        => $valeAlimentacao,
            'seguro'                  => $seguro,
            'pcmso'                   => $pcmso,
            'total_beneficios'        => round($totalBeneficios, 2),
            'custo_total'             => round($custoTotal,      2),
            'tipo_contrato'           => $tipoContrato,
        ]);
    }

    // =========================================================================
    // SIMULADOR CLT — CUSTO TOTAL (formulário novo)
    // =========================================================================

    public function formClt()
    {
        $titulo = 'Simulador de Custos Salariais CLT';
        return view('calculo.calculoclt', compact('titulo'));
    }

    public function calcularClt(Request $request)
    {
        $request->validate([
            'salario_base'            => 'required|numeric|min:0',
            'adicional_noturno'       => 'nullable|numeric|min:0',
            'adicional_insalubridade' => 'nullable|numeric|min:0',
            'trienio'                 => 'nullable|numeric|min:0',
            'vale_transporte'         => 'nullable|numeric|min:0',
            'vale_alimentacao'        => 'nullable|numeric|min:0',
            'seguro'                  => 'nullable|numeric|min:0',
            'pcmso'                   => 'nullable|numeric|min:0',
        ]);

        $salarioBase            = (float) $request->input('salario_base');
        $adicionalNoturno       = (float) $request->input('adicional_noturno', 0);
        $adicionalInsalubridade = (float) $request->input('adicional_insalubridade', 0);
        $trienio                = (float) $request->input('trienio', 0);
        $valeTransporte         = (float) $request->input('vale_transporte', 0);
        $valeAlimentacao        = (float) $request->input('vale_alimentacao', 0);
        $seguro                 = (float) $request->input('seguro', 0);
        $pcmso                  = (float) $request->input('pcmso', 0);

        $totalProventos = $salarioBase + $adicionalNoturno + $adicionalInsalubridade + $trienio;

        // Férias = (proventos/12) * (4/3)  →  salário + 1/3 constitucional
        $ferias         = ($totalProventos / 12) * (1 + 1 / 3);
        $decimoTerceiro = $totalProventos / 12;
        $avisoPrevio    = $decimoTerceiro;

        $baseEncargos = $totalProventos + $decimoTerceiro + $ferias + $avisoPrevio;

        // FGTS: 8% * 1,5 (multa rescisória média já embutida)
        $fgts = ($baseEncargos * 0.08) * 1.5;

        // INSS patronal: 25% sobre base de encargos (simplificação para custo empresa)
        $inss = $baseEncargos * 0.25;

        // PIS: 1%
        $pis = $baseEncargos * 0.01;

        $totalEncargos   = $fgts + $inss + $pis + $ferias + $decimoTerceiro + $avisoPrevio;
        $custoTotalMensal = $totalProventos + $totalEncargos + $valeTransporte + $valeAlimentacao + $seguro + $pcmso;

        return back()->with('resultado', [
            'salario'                 => $salarioBase,
            'adicional_noturno'       => $adicionalNoturno,
            'adicional_insalubridade' => $adicionalInsalubridade,
            'trienio'                 => $trienio,
            'total_proventos'         => round($totalProventos,    2),
            'ferias'                  => round($ferias,            2),
            'decimo_terceiro'         => round($decimoTerceiro,    2),
            'aviso_previo'            => round($avisoPrevio,       2),
            'fgts'                    => round($fgts,              2),
            'inss'                    => round($inss,              2),
            'pis'                     => round($pis,               2),
            'total_encargos'          => round($totalEncargos,     2),
            'vale_transporte'         => $valeTransporte,
            'vale_alimentacao'        => $valeAlimentacao,
            'seguro'                  => $seguro,
            'pcmso'                   => $pcmso,
            'custo_total_mensal'      => round($custoTotalMensal,  2),
        ]);
    }

    public function calcularIRRF($valorBruto, $inss)
    {
        $faixas = [
            [2428.81, 7.5, 182.16],
            [2826.66, 15, 394.16],
            [3751.06, 22.5, 675.49],
            [4664.69, 27.5, 908.73]
        ];

        $aliquota = 0;
        $deducao = 0;
        $inss = $inss < 607.20 ? 607.20 : $inss;

        $valorBruto = $valorBruto - $inss;

        foreach ($faixas as $faixa) {
            if ($valorBruto >= $faixa[0]) {
                $aliquota = $faixa[1];
                $deducao = $faixa[2];
            } else {
                break;
            }
        }

        $imposto = (($valorBruto) * ($aliquota / 100)) - $deducao;
        return $imposto;
    }

    function calcularINSS($salarioBruto, $teto)
    {
        $faixas = [
            [1212.00, 7.5],
            [2427.35, 9.0],
            [3641.03, 12.0],
            [7087.22, 14.0]
        ];

        $inss = 0;
        $salarioRestante = $salarioBruto;

        foreach ($faixas as $faixa) {
            if ($salarioRestante > $faixa[0]) {
                $baseCalculo = min($faixa[0], $salarioRestante);
                $inss += $baseCalculo * ($faixa[1] / 100);
                $salarioRestante -= $baseCalculo;
            } else {
                $inss += $salarioRestante * ($faixa[1] / 100);
                break;
            }
        }

        $inss = $inss > $teto ? $teto : $inss;

        return $inss;
    }

    // -------------------------------------------------------------------------
    // calcularINSS e calcularIRRF privados REMOVIDOS intencionalmente.
    // Use sempre ImpostoController para garantir tabelas únicas e atualizadas.
    // -------------------------------------------------------------------------
}
