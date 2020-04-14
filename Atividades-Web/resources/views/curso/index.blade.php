@extends('templates.app')
@section('conteudo')
    <h1>Cursos</h1>

    <a class="btn btn-success" href="/curso/create"> Novo</a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Duração</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>
                    <span class="fa fa-edit fa-2x" href=""></span>
                    <span class="fa fa-trash fa-2x" href=""></span>
                </td>
                <td>{{$curso->id}}</td>
                <td>{{$curso->nome}}</td>
                <td>{{$curso->duracao}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection









