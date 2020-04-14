@extends('templates.app')
@section('conteudo')
    <h1>Formulario</h1>
    <form action="/turma" method="post">@csrf
        <div class="form-group row">
            <label for="disciplinas_id" class="col-sm-2 col-form-label">disciplinas_id:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="disciplinas_id" name="disciplinas_id">
            </div>
        </div>
        <div class="form-group row">
            <label for="professor_id" class="col-sm-2 col-form-label">professor:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="professor_id" name="professor_id">
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
