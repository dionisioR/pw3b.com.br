<?php
/*
 == 
 >
 <
 >= 
 <= 
 */

$n1 = 11;
$parImpar = ($n1 % 2 == 0) ? "PAR" : "ÍMPAR";
echo "O número {$n1} é {$parImpar}";

/*
||
&&
!
*/
$n1 = 11;
$n2 = 11;
echo '<br>';
echo (!($n1 == $n2)) ? "true" : "false";
echo '<hr>';

//=============================

$idade = 18;

if($idade >= 18){
    echo "Você é maior de idade.";
}else{
    echo "Você é menor de idade.";
}

//=============================
echo '<hr>';
$diaSemana = 1;
if($diaSemana == 1){
    echo "Domingo";
}else{

    if($diaSemana == 2){
        echo "Segunda-feira";
    }else{

        if($diaSemana == 3){
            echo "Terça-feira";
        }else{
            if($diaSemana == 4){
                echo "Quarta-feira";
            }else{
                if($diaSemana == 5){
                    echo "Quinta-feira";
                }else{
                    if($diaSemana == 6){
                        echo "Sexta-feira";
                    }else{
                        if($diaSemana == 7){
                            echo "Sábado";
                        }else{
                            echo "Dia inválido.";
                        }
                    }
                }
            }
        }
    }
}

echo '<hr>';

if($diaSemana == 1) {
    echo "Domingo";
} elseif($diaSemana == 2) {
    echo "Segunda-feira";
} elseif($diaSemana == 3) {
    echo "Terça-feira";
} elseif($diaSemana == 4) {
    echo "Quarta-feira";
} elseif($diaSemana == 5) {
    echo "Quinta-feira";
} elseif($diaSemana == 6) {
    echo "Sexta-feira";
} elseif($diaSemana == 7) {
    echo "Sábado";
} else {
    echo "Dia inválido.";
}

//==================================================================

echo "<hr/>";

$mes = 12;

switch($mes){
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Março";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;
    default:
        echo "Mês inválido.";
}