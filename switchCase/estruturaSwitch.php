<?php

$diaDaSeamana = date("w"); //função date. pega a data do sistema
/* 
* w = week : dia da semana 0 a 6
* m = month : mês do ano 01 a 12
* y = year : ano dois últimos dígitos
* Y = igual y minúsculo, porém retorna os 4 digitos do ano
* d = day : dia do mês 01 a 31
*/

echo $diaDaSeamana . " - "; // concatenação com "."

switch ($diaDaSeamana) {

    case 0:
    echo "Domingo";
    break;

    case 1:
    echo "Segunda-feira";
    break;

    case 2:
    echo "Terça-feira";
    break;

    case 3:
    echo "Quarta-feira";
    break;

    case 4:
    echo "Quinta-feira";
    break;

    case 5:
    echo "Sexta-feira";
    break;

    case 6:
    echo "Sábado";
    break;

    default:
    echo "Data inválida";
    break;

}

?>
