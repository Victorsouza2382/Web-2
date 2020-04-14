<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;

class TurmasController extends Controller
{

    public function index()
    {
        $turmas = Turma::all();
            return view('turma.index', compact('turmas'));
    }


    public function create()
    {
        return view('turma.formulario');
    }


    public function store(Request $request)
    {
        $turma = new turma($request->all());
        $turma->save();
        return redirect('/turma');
    }


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


    public function destroy($id)
    {
        //
    }
}
