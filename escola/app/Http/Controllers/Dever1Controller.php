
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dever1Controller extends Controller
{
    public function ex1()
    {
        return view('formulario');
    }

    public function calcular()
    {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        $result = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        $aluno = 'Victor de Souza';

        return view('resultado1', compact('result', 'aluno'));
    }

    public function formulario2()
    {
        return view('formulario2');
    }

    public function resultado2(Request $request)
    {
        $Total = $request->Total;
        $VotosB = $request->VotosB;
        $VotosN = $request->VotosN;
        $VotosV = $request->VotosV;

        $percentualVotosB = ($VotosB / $Total) * 100;
        $percentualVotosN = ($VotosN / $Total) * 100;
        $percentualVotosV = ($VotosV / $Total) * 100;

        $soma = $VotosB + $VotosN + $VotosV;

        if($soma != $Total){
            return '<h1> O total de eleitores é diferentes da soma de eleitores</h1>';
        }else{
            return view('resultado2',
                compact('percentualVotosB','percentualVotosN','percentualVotosVValidos','Total','VotosB','VotosN','VotosV'));

        }

    }

}


