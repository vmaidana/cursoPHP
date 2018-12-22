<?php 

    $nome = "joão rangel";

    echo $nome;

    echo "<br>";

    $nome = strtoupper($nome); //strtoupper: converte para maiúsculas

    echo $nome;

    echo "<br>";

    $nome = strtolower($nome); //strtolower: converte para minúsculas

    echo $nome;

    echo "<br>";

    echo ucwords($nome); //ucwords: converte para maiúscula a primeira letra de cada palavra

    echo "<br>";

    echo ucfirst($nome); //ucfirst: converte para maiúscula a primeira letra da primeira palavra

    $empresa = "Hcode";

    $empresa = str_replace("e", "3", $empresa); //str_replace: substitui o caractere, por outro caractere, na variável escolhida

    echo "<br>";

    echo $empresa;

?>