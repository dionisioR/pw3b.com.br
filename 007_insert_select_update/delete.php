<?php

// configuração daconexão com BD
$servername = "localhost"; // nome ou ip
$username = "root";
$password = "";
$dbname = "estudophp";

try {
    
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
} catch (PDOException $e) {
    echo "Conexão falhou!!!" . $e->getMessage();
    exit();
}

if(isset($_GET['id'])){


    $id = $_GET['id'];
    $stmt = $pdo->prepare("Delete from pessoa where pes_id = :id");
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo '<p class="text-success"> Registro excluído com sucesso!</p>';
    }else{
        echo '<p class="text-danger"> Opps!!! <br> Não foi possível excluir o registro!</p>';
    }


}else{
    echo "Registro não encontrado.";
}