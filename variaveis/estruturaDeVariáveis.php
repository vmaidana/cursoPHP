<?php

    $anoNascimento = 1990;

    $nomeCompleto = "fulano";

    $nome_1 = "João"; // único caractere especial permitido é underline

    $sobreNome = "Rangel";
    
    $nomeCompleto = $nome_1 . " " . $sobreNome; // concatenção com '.' - espaço entre aspas para produzir espaço no echo

    echo $nomeCompleto;

    exit; // para o código nesse ponto, nada abaixo é executado

    /*
    comentários de bloco
    com barra asterisco
    asterisco barra
    */

    // $this // exemplo de variável pré-definida

    // php possui garbage collector

    echo $nome_1;

    echo "<br/>"; // quebra de linha assim

    unset($nome_1); // limpeza de variável

    if (isset($nome1)) { // 'isset' verifica se variável foi definida ou não
        echo $nome1;
    }

    echo $nome_1;

?>