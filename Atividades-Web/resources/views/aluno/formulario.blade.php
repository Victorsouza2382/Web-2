@extends('templates.app')
@section('conteudo')
    <h1>Formulario</h1>
    <form action="/aluno" method="post">@csrf
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="telefone" class="col-sm-2 col-form-label">Telefone:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="telefone" name="telefone">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="cep" class="col-sm-2 col-form-label">Cep:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="cep" name="cep">
            </div>
        </div>
        <div class="form-group row">
            <label for="complemento" class="col-sm-2 col-form-label">Complemento:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="complemento" name="complemento">
            </div>
        </div>
        <div class="form-group row">
            <label for="bairro" class="col-sm-2 col-form-label">Bairro:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="bairro" name="bairro">
            </div>
        </div>
        <div class=form-control">
            <Label for="uf">UF</Label> <select name="uf" id="uf">
                <option value="">Selecione</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF" selected>DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
            </select>
        </div>
        <div class="form-control">
            <label for="municipio">municipio</label> <select name="municipio" id="municipio">
                <option value="">Selecione</option>
                <option value="QNL">QNL</option>
                <option value="Aguas lindas">Aguas lindas</option>
                <option value="Candangolandia">Candangolandia</option>
                <option value="Brasilandia">Brasilandia</option>
                <option value="Ceilandia" selected>Ceilandia</option>
                <option value="Taguatinga">Taguatinga</option>
                <option value="Plano piloto">Plano piloto</option>
                <option value="Samambaia">Samambaia</option>
            </select>
        </div>
        <div class="form-group row">
            <label for="data_nascimento" class="col-sm-2 col-form-label">Data de nascimento:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
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

