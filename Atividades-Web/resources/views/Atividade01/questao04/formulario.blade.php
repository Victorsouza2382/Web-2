<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1><small>Vendas</small></h1>

<form class="form-horizontal" method="post" action="/questao04">@csrf
    <style>
        input[type=text] {
            width: 400px;
            padding: 18px;
        }
    </style>

    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label> Custo de Fabrica </label>
            <input type="number" class="form-control" id="cf" name="cf" placeholder="custo" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success" value="Enviar">Calcular</button>
</form>

</body>
</html>

