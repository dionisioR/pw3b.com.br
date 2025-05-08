<?php

// configuração daconexão com BD
$servername = "localhost"; // nome ou ip
$username = "root";
$password = "";
$dbname = "estudophp";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Conexão falhou!!!" . $e->getMessage();
    exit();
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $stmt = $conn->prepare("select * from pessoa where pes_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$pessoa) {
        die('Registro não encontrado');
    }
} else {
    die('Id inválido');
}

?>


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

        <h1>Delete</h1>     

            <strong>Nº de registro:</strong><br>
            <p><?= $pessoa['pes_id'] ?></p> 

            <strong>Nome:</strong><br>
            <p><?= $pessoa['pes_nome'] ?></p>

            <strong>Peso:</strong><br>
            <p><?= $pessoa['pes_peso'] ?></p>

            <strong>Altura:</strong><br>
            <p><?= $pessoa['pes_altura'] ?></p>

            <a href="select.php" class="btn btn-primary mx-2">Cancelar</a>
            <a href="delete.php?id=<?= $pessoa['pes_id'] ?>" class="btn btn-danger mx-2">Deletar</a>
 


    </main>



</body>

</html>