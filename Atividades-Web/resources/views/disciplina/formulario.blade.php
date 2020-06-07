@extends('templates.app')
@section('conteudo')
    <h1>Formulario</h1>
    <form action="/disciplina" method="post">@csrf
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Curso_id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="curso_id" name="curso_id">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a class="btn btn-danger" href="/curso">Voltar</a>
            </div>
        </div>
    </form>
@endsection







         @extends('layouts.admin')
         @section('conteudo')
             <div class="container">
                 <div class="row">
                     <div class="col-sm-4">
                     </div>
                 </div>
             </div>

         @endsection
