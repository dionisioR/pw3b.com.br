<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="container my-5">

        <h1 class="display-3 text-center">Aula - Variáveis</h1>

        <?php

        // echo "<div class='bg-dark text-white py-1 px-3 mb-3 rounded'> variáveis | " . __LINE__ ."</div>";

        $nome = "ETEC Alfredo de Barros Santos";
        $idade = 25;
        $salario = 5000.55;
        $matriculado = true;

        echo "<div class='bg-dark text-white py-1 px-3 mb-3 rounded'> saída de dados | " . __LINE__ ."</div>";

        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        // ponto para concatenar
        echo "Salário: R$ " . $salario . " <br>";
        echo "Matriculado: " . $matriculado . " <br>";


        echo "<div class='bg-dark text-white py-1 px-3 mb-3 rounded'> gettype | " . __LINE__ ."</div>";


        echo gettype($nome);
        echo "<br>";
        // $nome = 12345;
        // echo gettype($nome);
        echo gettype($idade);
        echo "<br>";
        echo gettype($salario);
        echo "<br>";
        echo gettype($matriculado);
        echo "<br>";


        echo "<div class='bg-dark text-white py-1 px-3 mb-3 rounded'> var_dump | " . __LINE__ ."</div>";

        echo "<pre>";
        var_dump($nome, $idade, $salario, $matriculado);
        echo "</pre>";

        ?>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>