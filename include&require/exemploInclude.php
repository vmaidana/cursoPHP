<?php 
    
    include "inc/funcao.php"; /* com include se arquivo não estiver funcionando, tenta rodar mesmo assim
    * include tem o recurso include path. diretório padrão para o include buscar arquivos
    * include tem o recurso include remoto. permite buscar arquivos externos - PERIGO - gera brechas de segurança */
    $resultado = somar(10, 20);

    echo $resultado;

?>