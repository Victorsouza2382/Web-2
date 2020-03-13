<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<form class="form-horizontal" method="post" action="/lista2questao05">@csrf
    <style>
        input[type=text] {
            width: 400px;
            padding: 18px;
        }
    </style>

    <div class="form-group">
        <div class="col-sm-10">
            <label for="pes">Informe a quantidade de pessoas:
                <input type="number" class="form-control" id="pes" name="pes" placeholder="Pessoas." required>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <label for="chopp">Informe a quantidade de chopp's:
                <input type="number" class="form-control" id="chopp" name="chopp" placeholder="Chopp's" required>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <label for="pizza">Informe a quantidade de Pizzas:
                <input type="number" class="form-control" id="pizza" name="pizza" placeholder="Pizzas" required>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <label for="cob">Informe a quantidade de coberturas:
                <input type="number" class="form-control" id="cob" name="cob" placeholder="Coberturas" required>
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-success" value="submit">Calcular Conta </button>
</form>
</body>

</html>
