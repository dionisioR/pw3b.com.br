<?php
    require_once('Pessoa.php');

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $pessoa = new Pessoa();
        $pessoa->setNome($_POST["nome"]);
        $pessoa->setIdade($_POST["idade"]);
        $pessoa->setPeso($_POST["peso"]);
        $pessoa->setAltura($_POST["altura"]);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<div class="container my-5">
    <h1 class="mb-5">Dados da Pessoa</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>Nome: </strong> <?= $pessoa->getNome() ?> </p>
            <p><strong>Idade: </strong> <?= $pessoa->getIdade() ?> </p>
            <p><strong>Peso: </strong> <?= $pessoa->getPeso() ?> </p>
            <p><strong>Altura: </strong> <?= $pessoa->getAltura() ?> </p>
        </div>
    </div>

    <a href="index.php">Voltar</a>

</div>

</body>
</html>