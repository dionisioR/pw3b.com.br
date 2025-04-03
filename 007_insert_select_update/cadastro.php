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

    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    // echo "$nome, $peso, $altura";

    try{

        // criar nosso script para o banco
        $sql = "insert into pessoa(pes_nome, pes_peso, pes_altura) values(:pes_nome, :pes_peso, :pes_altura)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":pes_nome", $nome);
        $stmt->bindParam(":pes_peso", $peso);
        $stmt->bindParam(":pes_altura", $altura);

        $stmt->execute();
        echo "Cadastro efetuado com sucesso!";

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