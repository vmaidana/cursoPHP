<?php 
    
    require_once "inc/funcao.php"; // traz o arquivo uma vez só para que não seja possível duplicatas de require
    require_once "inc/funcao.php"; // ignora segunda chamada do mesmo arquivo

    // mesma coisa com include_once "inc/funcao.php

    $resultado = somar(10, 20);

    echo $resultado;

    // a partir de PHP7, erros fatais não geram interrupção, e sim excessão

?>