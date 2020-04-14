<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professor.index', compact('professores'));
    }


    public function create()
    {
        return view('professor.formulario');
    }


    public function store(Request $request)
    {
        $professor = new professor($request->all());
        $professor->save();
        return redirect('/professor');
    }
}
