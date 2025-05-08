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


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST['id'];
    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    try{

        // criar nosso script para o banco
        // $sql = "insert into pessoa(pes_nome, pes_peso, pes_altura) values(:pes_nome, :pes_peso, :pes_altura)";

        $sql = "update pessoa set 
            pes_nome = :pes_nome, 
            pes_peso = :pes_peso, 
            pes_altura = :pes_altura 
            where 
            pes_id = :pes_id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":pes_nome", $nome);
        $stmt->bindParam(":pes_peso", $peso);
        $stmt->bindParam(":pes_altura", $altura);
        $stmt->bindParam(":pes_id", $id);

        $stmt->execute();
        echo "Cadastro efetuado com sucesso!<br>";
        echo '<a href="select.php">TABELA</a>';

    }catch(PDOException $e){
        echo "Erro ao cadastrar: ". $e->getMessage();
        echo "<br>";
        echo "<a href='index.php'>Voltar</a>";
    }

}else{
    echo "Formulário não enviado!";
    echo "<br>";
    echo "<a href='index.php'>Voltar</a>";
}