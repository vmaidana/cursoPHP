<?php

// puxando dados do banco e gerando um arquivo
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tbusuarios ORDER BY deslogin");

$headers = array();

// inserindo cabeçalho no array
foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers)."\r\n"); // insere separador entre aspas no texto

// inserindo dados no array
foreach ($usuarios as $row) {

    $data = array();

    foreach ($row as $key => $value) {

        array_push($data, $value);

    } // fim do foreach de coluna

    fwrite($file, implode(",", $data) . "\r\n");
} // fim do foreach de linha

fclose($file);



?>