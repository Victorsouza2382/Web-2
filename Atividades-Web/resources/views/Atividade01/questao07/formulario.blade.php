<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<h1><small>Digite suas notas </small></h1>

<form class="form-horizontal" method="post" action="/questao07">@csrf
    <style>
        input[type=text] {
            width: 400px;
            padding: 18px;
        }
    </style>

    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label> Nota1 </label>
            <input type="number" class="form-control" id="n1" name="n1" placeholder="Primeira avaliação" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label>Nota2</label>
            <input type="number" class="form-control" id="n2" name="n2" placeholder="Segunda avaliação" required>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success" value="MediaP">Calcular a Média ponderada</button>
</form>

</body>
</html>
