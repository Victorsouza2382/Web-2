<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão 8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<form class="form-horizontal" method="post" action="/questao08">@csrf
    <style>
        input[type=text] {
            width: 400px;
            padding: 18px;
        }
    </style>

    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label> Altura </label>
            <input type="number" class="form-control" id="a" name="a" placeholder="Altura" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label>Raio</label>
            <input type="number" class="form-control" id="r" name="r" placeholder="Raio" required>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success" value="Calcular">Calcular</button>
</form>

</body>
</html>
