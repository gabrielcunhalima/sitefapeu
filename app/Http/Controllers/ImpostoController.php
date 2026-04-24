<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpostoController extends Controller
{
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

        $brutoOriginal = $valorBruto;

        $inss = $inss < 607.20 ? 607.20 : $inss;
        $baseCalculo = $valorBruto - $inss;

        foreach ($faixas as $faixa) {
            if ($baseCalculo >= $faixa[0]) {
                $aliquota = $faixa[1];
                $deducao = $faixa[2];
            } else {
                break;
            }
        }

        $imposto = ($baseCalculo * ($aliquota / 100)) - $deducao;

        if ($baseCalculo <= 5000.00) {
            $redutor = $imposto;
        } elseif ($baseCalculo <= 7350.00) {
            $redutor = 978.62 - (0.133145 * $baseCalculo);
            $redutor = max($redutor, 0);
        } else {
            $redutor = 0;
        }

        $imposto = $imposto - $redutor;
        $imposto = max($imposto, 0);

        return $imposto;
    }

    function calcularINSS($salarioBruto, $tipo = 'rpa')
    {
        if ($tipo === 'rpa') {
            $base = min($salarioBruto, 8475.55);
            return $base * 0.11;
        }

        $faixas = [
            [1621.00, 7.5],
            [2902.84, 9.0],
            [4354.27, 12.0],
            [8475.55, 14.0],
        ];

        $salarioBruto   = min($salarioBruto, 8475.55);
        $inss           = 0;
        $limiteAnterior = 0;

        foreach ($faixas as [$limite, $aliquota]) {
            if ($salarioBruto <= $limiteAnterior) {
                break;
            }
            $baseNaFaixa = min($salarioBruto, $limite) - $limiteAnterior;
            $inss       += $baseNaFaixa * ($aliquota / 100);
            $limiteAnterior = $limite;
        }

        return $inss;
    }
}
