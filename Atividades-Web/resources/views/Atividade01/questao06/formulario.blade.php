<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<form class="form-horizontal" method="post" action="/questao06">@csrf
    <style>
        input[type=text] {
            width: 400px;
            padding: 18px;
        }
    </style>

    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label> Carros vendidos </label>
            <input type="number" class="form-control" id="CV" name="CV" placeholder="Carros" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label>Valor total das vendas</label>
            <input type="number" class="form-control" id="VTV" name="VTV" placeholder="Total" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label>salario fixo</label>
            <input type="number" class="form-control" id="SF" name="SF" placeholder="Salario" required>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success" value="Calcular">Calcular</button>
</form>

</body>
</html>
