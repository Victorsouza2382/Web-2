@extends('templates.app')
@section('conteudo')
    <h1>Turmas</h1>

    <a class="btn btn-success" href="/turma/create"> Novo</a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>disciplinas_id</th>
            <th>professor_id</th>
        </tr>
        </thead>
        <tbody>
        @foreach($turmas as $turma)
            <tr>
                <td>
                    <span class="fa fa-edit fa-2x" href=""></span>
                    <span class="fa fa-trash fa-2x" href=""></span>
                </td>
                <td>{{$turma->id}}</td>
                <td>{{$turma->disciplinas_id}}</td>
                <td>{{$turma->professor_id}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection









