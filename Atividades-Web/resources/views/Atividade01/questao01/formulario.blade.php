<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Formulário</h1>
<form action="/questao1" method="POST"> @csrf
    <label for="nota1">nota 1
        <input type="text" name="nota1" id="nota1">
    </label><br>
    <label for="nota2">nota 2
        <input type="text" name="nota2" id="nota2">
    </label><br>
    <label for="nota3">nota 3
        <input type="text" name="nota3" id="nota3">
    </label><br>
    <label for="nota4">nota 4
        <input type="text" name="nota4" id="nota4">
    </label><br><br>
    <input type="submit" value="Calcular">
</form>
</body>

</html>

