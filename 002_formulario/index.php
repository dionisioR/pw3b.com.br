<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<main class="container my-5">

    <form action="cadastro.php" method="get">

    <label>Nome</label><br>
    <input type="text" name="nome"><br><br>

    <label>E-mail</label><br>
    <input type="email" name="email"><br><br>

    <label>Senha</label><br>
    <input type="password" name="senha"><br><br>
    
    <input type="submit" value="Enviar">

    </form>

    <?php
    ?>
</main>

    
</body>
</html>