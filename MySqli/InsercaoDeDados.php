<?php

$conn = new mysqli("localhost", "root", "", "dbphp7"); // "servidor", "usuário", "senha", "banco de dados"

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tbusuarios (deslogin, dessenha) VALUES(?, ?)"); // prepara o comando sql para ser enviado ao BD

$stmt->bind_param("ss", $login, $pass); // tipo de dados para as interrogações acima. s de string e s de string. 
// dados por esse método só podem ser passados por referência, necessário criar variáveis para armazenar os valores
$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

?>