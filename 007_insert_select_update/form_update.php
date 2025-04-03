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

        <h1>Formulário de cadastro</h1>

        <form action="" method="post">

            <label>Nº de registro:</label><br>
            <input type="text" value="<?= $pessoa['pes_id'] ?>" name="id" readonly ><br><br>

            <label>Nome:</label><br>
            <input type="text" value="<?= $pessoa['pes_nome'] ?>" name="nome" required><br><br>

            <label>Peso:</label><br>
            <input type="number" value="<?= $pessoa['pes_peso'] ?>" step="0.01" name="peso"><br><br>

            <label>Altura:</label><br>
            <input type="number" value="<?= $pessoa['pes_altura'] ?>" step="0.01" name="altura"><br><br>

            <input type="submit" value="Cadastrar" class="btn btn-primary">


        </form>

    </main>



</body>

</html>