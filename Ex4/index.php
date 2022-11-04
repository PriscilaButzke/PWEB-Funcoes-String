<!-- Exercício 4 – O usuário envia uma data no formato americano e o programa devolve
no formato brasileiro – ex.:
Data Americana: 2022-11-03
Data Brasileira: 03/11/2022-->

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Exercicio 7</title>
</head>

<body>
    <form action="index.php" method="POST">
        <div class="container">
            <div class="d-flex justify-content-center fs-2">Tamanho de uma palavra:</div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Digite a data: </span>
                </div>
                <input type="date" name="palavra" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"  placeholder="Ex: 2022-11-03">
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary m-1" type="submit" name="calcular">A palavra possui: </button>
            </div>
        </div>

        <?php



        if (isset($_POST['calcular'])) {
            $palavra =  $_POST['palavra'];

            $ano = substr($palavra, 0, 4);
            $mes = substr($palavra, 5, 2);
            $dia = substr($palavra, 8, 2);

            echo "<p  class='text-center text-primary fs-3'>  Data recebida: $palavra </p>";
            echo "<p  class='text-center text-primary fs-3'>  Data formatada: $dia/$mes/$ano  </p>";
            
        }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>