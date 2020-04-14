@extends('templates.app')
@section('conteudo')
    <h1>Alunos</h1>

    <a class="btn btn-success" href="/aluno/create"> Novo</a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Cep</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>UF</th>
            <th>Municipio</th>
            <th>Data de Nascimento</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alunos as $aluno)
            <tr>
                <td>
                    <span class="fa fa-edit " href=""></span>
                    <span class="fa fa-trash " href=""></span>
                </td>
                <td>{{$aluno->id}}</td>
                <td>{{$aluno->nome}}</td>
                <td>{{$aluno->telefone}}</td>
                <td>{{$aluno->email}}</td>
                <td>{{$aluno->cep}}</td>
                <td>{{$aluno->complemento}}</td>
                <td>{{$aluno->bairro}}</td>
                <td>{{$aluno->uf}}</td>
                <td>{{$aluno->municipio}}</td>
                <td>{{$aluno->data_nascimento}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection









