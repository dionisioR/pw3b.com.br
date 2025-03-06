
<?php
// print_r($_GET);
// echo '<hr>';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $numero = $_GET['numero'];
    echo $numero;

    echo '<hr>';

    // while
    // while($numero <= 100){
    //     echo $numero . '<br>';
    //     $numero++;
    // }


    // do - while
    // do{
    //     echo $numero . '<br>';
    //     $numero++;
    // }while($numero <= 100);

    // for
    // for($i = $numero; $i <= 100; $i++){
    //     echo $i. '<br>';
    // }

    // foreach
    // Array
    $arrNome = ["Ana", "Maria", "Lucas", "Guilherme","Bia"];
    foreach($arrNome as $nome){
        echo $nome. '<br>';
    }


}else{
    echo "Formulário não enviado!";
}

