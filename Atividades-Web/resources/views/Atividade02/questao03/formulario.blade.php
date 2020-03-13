<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<form class="form-horizontal" method="post" action="lista2questao03">@csrf
    <style>
        input[type=text] {
            width: 400px;
            padding: 18px;
        }
    </style>

    <div class="form-group">
        <div class="col-sm-10">
            <label for="num1">Informe o primeiro número:
                <input type="number" class="form-control" id="num1" name="num1" placeholder="Informe um número." required>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <label for="num2">Informe o segundo número:
                <input type="number" class="form-control" id="num2" name="num2" placeholder="Informe um número." required>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <label for="num3">Informe o terceiro número:
                <input type="number" class="form-control" id="num3" name="num3" placeholder="Informe um número." required>
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-success" value="submit">Calcular maior número </button>
</form>
</body>

</html>
