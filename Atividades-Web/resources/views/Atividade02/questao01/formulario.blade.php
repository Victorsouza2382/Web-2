<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<form class="form-horizontal" method="post" action="/lista2questao01">@csrf
    <style>
        input[type=text] {
            width: 400px;
            padding: 18px;
        }
    </style>

    <div class="form-group">
        <div class="col-sm-10">
            <label for="sal">Salário:
                <input type="number" class="form-control" id="sal" name="sal" placeholder="Informe seu salário." required>
            </label>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success" value="submit">Calcular salário </button>
    <br>
</form>
</body>

</html>
