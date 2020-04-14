<html>
<head>
    <title>Cursos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('/js/bootstrap-4.4.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/js/bootstrap-4.4.1-dist/js/bootstrap.js')}}">
    <link rel="stylesheet" href="{{asset('/js/fontawesome-free-5.13.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/js/jquery-3.4.1.js')}}">
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Escola</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/curso">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/disciplina">Disciplinas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aluno">Alunos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/professor">Professores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/turma">Turmas</a>
            </li>
        </ul>
    </div>
</nav>
<main class="container" style=" margin-top: 60px;">
    @yield('conteudo')
</main>
</body>
</html>

