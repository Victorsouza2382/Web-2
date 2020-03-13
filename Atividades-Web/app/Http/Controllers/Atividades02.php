<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Atividades02 extends Controller
{
    public function formulario01()
    {
        return view('/Atividade02/questao01/formulario');
    }

    public function questao01 (Request $request)
    {
        $salario = $request['sal'];

        if($salario <= 1000){
            $salario = $salario + ($salario * 0.3);
        }
        else{
            "<h1>Você não tem direito ao reajuste de salário, pois você recebe mais de mil reais</h1>";
        }
        return view('/Atividade02/questao01/questao01', compact('salario'));
    }

    public function formulario02()
    {
        return view('/Atividade02/questao02/formulario');
    }

    public function questao02 (Request $request)
    {
        $salario = $_POST['sal'];

        if ($salario <= 2000){
            $salario = $salario + ($salario * 0.5);
            echo" seu salário será R$ $salario com reajuste de 50%.";
        }
        else{
            $salario = $salario + ($salario * 0.3);
            echo"seu salário será R$ $salario com reajuste de 30%";
        }

        return view('/Atividade02/questao01/questao01', compact('salario'));
    }

    public function formulario03()
    {
        return view('/Atividade02/questao03/formulario');
    }



    public function formulario04()
    {
        return view('/Atividade02/questao04/formulario');
    }

    public function fuc04(Request $request)
    {

        $n1 = $request->n1;
        $n2 = $request->n2;
        $n3 = $request->n3;

        $maior = max($n1,$n2,$n3);

        return view('/Atividade02/questao03/questao03', compact('maior'));

    }


    public function formulario05()
    {
        return view('/Atividade02/questao05/formulario');
    }

    public function questao05(Request $request)
    {

        $salmin = $request['salmin'];
        $hotr = $request['hotr'];
        $depenf = $request['depenf'];
        $hrstrab = $request['hrstrab'];

        $valor_hora = ($salmin / 5);
        $salmes = ($hotr * $valor_hora);
        $valor_dep = ($depenf * 32);
        $valor_horaex = $hrstrab * ($valor_hora * 1.5);
        $salbruto = $salmes + $valor_dep + $valor_horaex;

        if ($salbruto < 2000) {
            $ir = 0;
        } else {
            if ($salbruto >= 2000 && $salbruto <= 5000) {
                $ir = $salbruto * 0.10;
            } else {
                $ir = $salbruto * 0.20;
            }
        }

        $salli = $salbruto - $ir;
        if ($salli <= 3500) {
            $gratifi = 1000;
        } else {
            $gratifi = 500;
        }
        $sal_final = $salli + $gratifi;

        return view('/Atividade02/questao05/resultado05', compact('sal_final'));
    }
}
