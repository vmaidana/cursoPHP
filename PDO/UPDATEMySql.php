<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tbusuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID"); // cria um id para os dados não poderem ser acessados em caso de uma invasão

$login = "João";
$password = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "ALTERADO COM SUCESSO";

?>