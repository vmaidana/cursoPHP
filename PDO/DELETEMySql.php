<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tbusuarios WHERE idusuario = :ID"); // cria um id para os dados não poderem ser acessados em caso de uma invasão

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DELETADO COM SUCESSO";

?>