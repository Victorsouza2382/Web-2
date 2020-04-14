@extends('templates.app')
@section('conteudo')
    <h1>Disciplinas</h1>

    <a class="btn btn-success" href="/disciplina/create"> Novo</a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Curso_id</th>
        </tr>
        </thead>
        <tbody>
        @foreach($disciplinas as $disciplina)
            <tr>
                <td>
                    <span class="fa fa-edit fa-2x" href=""></span>
                    <span class="fa fa-trash fa-2x" href=""></span>
                </td>
                <td>{{$disciplina->id}}</td>
                <td>{{$disciplina->nome}}</td>
                <td>{{$disciplina->curso_id}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection









