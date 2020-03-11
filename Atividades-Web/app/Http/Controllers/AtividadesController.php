<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    public function formulario1()
    {
        return view('/Atividade01/questao01/formulario');
    }

    public function calcular(Request $request)
    {
        $nota1 = $request['nota1'];
        $nota2 = $request['nota2'];
        $nota3 = $request['nota3'];
        $nota4 = $request['nota4'];

        $result = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        $aluno = 'Victor de Souza';

        return view('/Atividade01/questao01/resultado01', compact('result', 'aluno'));
    }

    public function formulario02()
    {
        return view('/Atividade01/questao02/formulario');
    }

    public function CalculoVotos(Request $request)
    {
        $Total = $request->Total;
        $VotosB = $request->VotosB;
        $VotosN = $request->VotosN;
        $VotosV = $request->VotosV;

        $percentualVotosB = ($VotosB / $Total) * 100;
        $percentualVotosN = ($VotosN / $Total) * 100;
        $percentualVotosV = ($VotosV / $Total) * 100;

        $Total = $VotosB + $VotosN + $VotosV;

        if ($Total != $Total) {
            return '<h1> O númmero de eleitores é diferente do número de votos</h1>';
        } else {
            return view('/Atividade01/questao02/Calculo02',
                compact(
                    'percentualVotosB', 'percentualVotosN', 'percentualVotosV', 'Total', 'VotosB', 'VotosN', 'VotosV'));

        }

    }

    public function InformeS()
    {
        return view('/Atividade01/questao03/formulario');
    }

    public function Calculars(Request $request)
    {
        $salario = $request['sal'];


        if ($salario <= 2000) {
            $um = $salario + ($salario * 0.5);
        } else {
            $dois = $salario + ($salario * 0.3);
            return "<h1>seu salário será R$ $dois com reajuste de 30%</h1>";
        }

        return view('/Atividade01/questao03/salario', compact('salario', 'um'));
    }

    public function Fab()
    {
        return view('/Atividade01/questao04/formulario');
    }

    public function Custo(Request $request)
    {
        $cf = $request->cf;

        $dis = 28 / 100;
        $imp = 45 / 100;

        $valorfinal = ($cf + $dis * $cf + $imp * $cf);

        return view('/Atividade01/questao04/result', compact('valorfinal'));
    }

    public function carro()
    {
        return view('/Atividade01/questao05/formulario');
    }

    public function carro1 (Request $request)
    {
        $cf = $request->cf;
        $dis = $request->dis;
        $imp = $request->imp;

        $valorfinal = ($cf + $dis / 100 * $cf +  $imp / 100 * $cf);

        return view('/Atividade01/questao05/semideia', compact('valorfinal','cf', 'dis', 'imp'));
    }

    public function Notas()
    {
        return view('/Atividade01/questao07/formulario');
    }

    public function MediaP(Request $request)
    {
        $n1 = $request['n1'];
        $n2 = $request['n2'];
        $mediaPond = (($n1 * 0.4) + ($n2 * 0.6)) / 2;

        return view('/Atividade01/questao07/Nota', compact('mediaPond'));
    }


}
