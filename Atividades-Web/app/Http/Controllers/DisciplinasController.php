<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{

    public function index()
    {
    $disciplinas = Disciplina::all();
        return view('disciplina.index', compact('disciplinas'));
    }


    public function create()
    {
        return view('disciplina.formulario');
    }


    public function store(Request $request)
    {
        $disciplina = new disciplina($request->all());
        $disciplina->save();
        return redirect('/disciplina');
    }
%

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
