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

    public function carro1(Request $request)
    {
        $cf = $request->cf;
        $dis = $request->dis;
        $imp = $request->imp;

        $valorfinal = ($cf + $dis / 100 * $cf + $imp / 100 * $cf);

        return view('/Atividade01/questao05/semideia', compact('valorfinal', 'cf', 'dis', 'imp'));
    }

    public function revendedora()
    {

        return view('/Atividade01/questao06/formulario');
    }

    public function salario(Request $request)
    {
        $ccv = 5 / 100;
        $cf = 200;

        $CV = $request->CV;
        $VTV = $request->VTV;
        $SF = $request->SF;

        $CFN = ($cf * $CV);
        $CCVN = ($VTV * $ccv);
        $salariofinal = ($SF + $CFN + $CCVN);

        return view('/Atividade01/questao06/semideia', compact('ccv', 'cf', 'CV', 'VTV', 'SF', 'CFN', 'CCVN', 'salariofinal'));
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

    public function Cilindro()
    {
        return view('/Atividade01/questao08/formulario');
    }

    public function Calculo(Request $request)
    {

        $a = $request['a'];
        $r = $request['r'];
        $pi = 3.14;

        $result = ($r ^ 2 * $a);

        return view('/Atividade01/questao08/volume', compact('a', 'r', 'pi', 'result'));
    }

    public function mult()
    {
        return view('/Atividade01/questao09/formulario');
    }

    public function nove(Request $request)
    {

        $n1 = $request['n1'];
        $n2 = $request['n2'];

        $Total = ($n1 + $n2) * $n1;

        return view('/Atividade01/questao09/resultado', compact('n1', 'n2', 'Total'));
    }

    public function pecas()
    {
        return view('/Atividade01/questao10/formulario');
    }

    public function dez(Request $request)
    {

        $qmi = $request['qmi'];
        $qma = $request['qma'];

        $estoque = ($qmi + $qma) / 2;

        return view('/Atividade01/questao10/resultado', compact('qmi', 'qma', 'estoque'));
    }

    public function script11()
    {
        return view('/Atividade01/questao11/formulario');
    }

    public function resultado(Request $request)
    {
        $filho = 3 / 100;

        $nome = $request['nome'];
        $nht = $request['nht'];
        $vh = $request['vh'];
        $nf = $request['nf'];
        $salario = ($nht * $vh);
        $salariofinal = ($salario + $salario * $filho * $nf);

        return view('/Atividade01/questao11/resultado', compact('nome', 'nht', 'vh', 'nf', 'salario', 'salariofinal'));
    }

    public function doze()
    {
        return view('/Atividade01/questao12/formulario');
    }

    public function resultdoze(Request $request)
    {
        $idade = $request['idade'];
        $mes = $request['mes'];
        $dia = $request['dia'];

        $emdias = ($idade * 365);
        $mesnumero = ($mes * 30);

        $totaldias = ($emdias + $mesnumero + $dia);

        return view('/Atividade01/questao12/resultado', compact('idade', 'mes', 'dia', 'mesnumero', 'emdias', 'totaldias'));
    }

    public function idade()
    {
        return view('/Atividade01/questao13/formulario');
    }

    public function idadedias(Request $request)
    {
        $dia = $request['dias'];

        $emdias = ($dia / 365);

        return view('/Atividade01/questao13/resultado', compact('dia','emdias'));

    }
    public function ponderada()
    {
        return view('/Atividade01/questao14/formulario');
    }

    public function calcula(Request $request)
    {
        $n1 = $request['p1'];
        $n2 = $request['p2'];
        $n3 = $request['p3'];
        $media = (($n1 * 2) + ($n2 * 3) + ($n3 * 5))/10;

        return view('/Atividade01/questao14/calcula', compact('n1', 'n2', 'n3','media'));

    }

}
