<?php

$name = "images";

if (!is_dir($name)) {
    
    mkdir($name); //cria um diretório
    echo "Diretório $name criado com sucesso!";
} else {

    rmdir($name);
    echo "Já existe o diretório: $name e foi removido!";

}

?>