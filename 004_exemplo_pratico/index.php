<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <main class="container my-5">

        <h1>Mês do ano</h1>

        <form action="controle.php" method="post">
            <label>MÊS</label>
            <br>
            <input type="number" step="1" name="mes" min="1" max="12">
            <br><br>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </main>

</body>

</html>