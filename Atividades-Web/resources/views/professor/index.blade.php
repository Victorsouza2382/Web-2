@extends('templates.app')
@section('conteudo')
    <h1>Professores</h1>

    <a class="btn btn-success" href="/professor/create"> Novo</a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Cpf</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Cep</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>UF</th>
            <th>Municipio</th>
        </tr>
        </thead>
        <tbody>
        @foreach(professores as $professor)
            <tr>
                <td>
                    <span class="fa fa-edit " href=""></span>
                    <span class="fa fa-trash " href=""></span>
                </td>
                <td>{{$professor->id}}</td>
                <td>{{$professor->nome}}</td>
                <td>{{$professor->matricula}}</td>
                <td>{{$professor->cpf}}</td>
                <td>{{$professor->telefone}}</td>
                <td>{{$professor->email}}</td>
                <td>{{$professor->cep}}</td>
                <td>{{$professor->complemento}}</td>
                <td>{{$professor->bairro}}</td>
                <td>{{$professor->uf}}</td>
                <td>{{$professor->municipio}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection









