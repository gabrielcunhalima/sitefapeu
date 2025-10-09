<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpostoController extends Controller
{
    public function calcularIRRF($valorBruto,$inss) {
          $faixas = [
            [2428.81, 7.5, 182.16],
            [2826.66, 15, 394.16],
            [3751.06, 22.5, 675.49],
            [4664.69, 27.5, 908.73]
        ];
    
        $aliquota = 0;
        $deducao = 0;
        $inss = $inss < 607.20 ? 607.20 : $inss;

        $valorBruto = $valorBruto-$inss;    

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

    function calcularINSS($salarioBruto,$teto) {
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
}
