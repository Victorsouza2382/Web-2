<h1>Resultado</h1>

<h2>média é {{ $result }}</h2>

<h3>O nome do aluno é:{{ $aluno }}</h3>
@if($result >= 7)
    <h4>O aluno está APROVADO</h4>
@else
    <h4>O aluno está REPROVADO</h4>
@endif
