@extends('templates.app')
@section('conteudo')
    <h1>Formulario</h1>
    <form action="/curso" method="post">@csrf
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="duracao" class="col-sm-2 col-form-label">Duração:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="duracao" name="duracao">
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
