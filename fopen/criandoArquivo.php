<?php
 
//ABRINDO OU CRIANDO ARQUIVOS COM FOPEN
$file = fopen("log.txt", "w+"); // cria/abre um arquivo no modo escrita, zera o arquivo e adiciona o que estiver nos parênteses

// $file = fopen("log.txt", "a+"); // abre o arquivo e adiciona o que estiver nos parênteses

fwrite($file, date("Y-m-d H:i:s")."\r\r"); // escrevendo no arquivo "\r pula linha

fclose($file);

echo "ARQUIVO CRIADO COM SUCESSO";

?>