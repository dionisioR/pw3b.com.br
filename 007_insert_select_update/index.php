<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<main class="container my-5">

    <h1>Formulário de cadastro</h1>

    <form action="cadastro.php" method="post">

    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Peso:</label><br>
    <input type="number" step="0.01" name="peso"><br><br>

    <label>Altura:</label><br>
    <input type="number" step="0.01" name="altura"><br><br>

    <input type="submit" value="Cadastrar" class="btn btn-primary">
    <br>
    <br>
    <a href="select.php">Todos os registros</a>


    </form>

</main>



</body>
</html>