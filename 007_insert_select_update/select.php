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


try {

    // criar nosso script para o banco
    $sql = "select * from pessoa";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro ao cadastrar: " . $e->getMessage();
    echo "<br>";
    echo "<a href='index.php'>Voltar</a>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container my-5">
        <h1>SELECT</h1>
        <hr>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>
                    Editar
                </th>
                <th>
                    Deletar
                </th>
            </tr>

            <!--------------------------------------- -->
            <?php
            if (!empty($pessoas)) {
                foreach ($pessoas as $pessoas) {
                    echo "<tr>
                        <td>" . $pessoas['pes_id'] . "</td>
                        <td>" . $pessoas['pes_nome'] . "</td>
                        <td>" . $pessoas['pes_peso'] . "</td>
                        <td>" . $pessoas['pes_altura'] . "</td>


                        <td>
                            <a href='form_update.php?id=" .  $pessoas['pes_id'] . "' class='btn btn-outline-warning'>
                            <i class='bi bi-pencil-square me-2'></i>
                            Editar
                            </a>
                        </td>



                        <td>
                            <a href='form_delete.php?id=" .  $pessoas['pes_id'] . "' class='btn btn-outline-danger'>
                            <i class='bi bi-trash me-2'></i>
                            Deletar
                            </a>
                        </td>


                       
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum registro encontrado!</td></tr>";
            }
            ?>
            <!--------------------------------------- -->

        </table>

        <br><hr>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>

</body>

</html>