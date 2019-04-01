<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tbusuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)"); // cria um id para os dados não poderem ser acessados em caso de uma invasão

$login = "Jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "INSERIDO COM SUCESSO";

?>