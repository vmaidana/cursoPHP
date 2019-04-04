<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tbusuarios");

echo json_encode($usuarios);*/

$root = new Usuario();

$root->loadById(1);

echo $root;

?>