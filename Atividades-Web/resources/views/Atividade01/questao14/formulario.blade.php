<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>

<center>
    <h1><small>Digite suas notas </small></h1>
</center>

<form class="form-horizontal" method="post" action="/questao14">@csrf
    <style>
        input[type=text] {
            width: 400px;
            padding: 18px;
        }
    </style>


    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label> P1 </label>
            <input type="text" class="form-control" id="p1" name="p1" placeholder="Primeira avaliação" required>

        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label>P2:</label>
            <input type="text" class="form-control" id="p2" name="p2" placeholder="Segunda avaliação" required>

        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="label"></label>
        <div class="col-sm-10">
            <label>P3:</label> <input type="text" class="form-control" id="p3" name="p3" placeholder="Terceira avaliação" required>

        </div>
    </div>

    <br>

    <button type="submit" class="btn btn-success" value="submit">Calcular a Média ponderada </button>

    <br>

</form>



</body>

</html>
