<?php 
    
    require "inc/funcao.php"; /* com require, se arquivo não estiver funcionando, gera erro fatal
    * se não for usar include path, preferir require */
    $resultado = somar(10, 20);

    echo $resultado;

?>