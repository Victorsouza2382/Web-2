<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Questão 5</title>
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
            <label for="Sal"><h2>Salário</h2></label><br>
            <label for="salmin">Informe o valor do salário mínimo:
                <input type="number" class="form-control" id="salmin" name="salmin" placeholder="salário mínimo." required>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <label for="hotr">Informe o número de horas trabalhadas:
                <input type="number" class="form-control" id="hotr" name="hotr" placeholder="horas trabalhadas." required>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <label for="depenf">Informe a quantidade de dependentes do funcionário:
                <input type="number" class="form-control" id="depenf" name="depenf" placeholder="dependentes." required>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <label for="hrstrab">Informe a quantidade de horas extras trabalhadas:
                <input type="number" class="form-control" id="hrstrab" name="hrstrab" placeholder="horas extras." required>
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-success" value="submit">Calcular salário a receber </button>
</form>
</body>

</html>
