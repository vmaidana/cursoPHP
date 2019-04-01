<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tbusuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack(); //cancela transação

$conn->commit(); //confirma transação

echo "DELETADO COM SUCESSO";

?>