<?php

namespace App\Http\Controllers;


use App\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{

    public function index()
    {
    $alunos = Aluno::all();
        return view('aluno.index', compact('alunos'));
    }


    public function create()
    {
        return view('aluno.formulario');
    }


    public function store(Request $request)
    {
        $aluno = new aluno($request->all());
        $aluno->save();
        return redirect('/aluno');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
