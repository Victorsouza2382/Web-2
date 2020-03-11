<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Formulário 2</h1>
<form action="/formulario2" method="POST"> @csrf
    <label for="VotosV">Votos Validos
        <input class="form-control" type="number" name="VotosV" id="VotosV">
    </label><br>
    <label for="VotosN">Votos Nulos
        <input class="form-control" type="number" name="VotosN" id="VotosN">
    </label><br>
    <label for="VotosB">Votos Brancos
        <input class="form-control" type="number" name="VotosB" id="VotosB">
    </label><br>
    <label for="Total">Total
        <input class="form-control" type="number" name="Total" id="Total">
    </label><br>
    <input class="btn btn-success" type="submit" value="Calcular">
</form>
</body>

</html>
