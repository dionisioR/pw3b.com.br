<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     print_r($_POST);
//     echo '<br />';

//     $nome = $_POST['nome'];
//     $email = $_POST['email'];
//     $senha = $_POST['senha'];

//     echo "NOME: {$nome} E-mail: {$email} Senha: {$senha}";
// }else{
//     echo "Formulário não enviado!";
// }


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    print_r($_GET);
    echo '<br />';

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    echo "NOME: {$nome} E-mail: {$email} Senha: {$senha}";
}else{
    echo "Formulário não enviado!";
}

echo "<br/><br/>";


// + - / * %

// += -= /= *= %=

$num = 10;
echo $num . "<br/>";

$num += 5;  // num = num + 5
echo $num . "<br/>";

$num *= 2; // num = num * 2
echo $num . "<br/>";

// ++ [soma uma unidade]
// -- [subtrai uma unidade]

echo "--------------------<br/>";
echo $num . "<br/>";
echo $num++ . '<br/>'; // utilizar a variável e depois somar

echo $num . "<br/>";

echo ++$num . '<br/>'; // somar uma unidade e depois utilizar a variável
