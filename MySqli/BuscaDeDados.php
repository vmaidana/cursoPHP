<?php

$conn = new mysqli("localhost", "root", "", "dbphp7"); // "servidor", "usuário", "senha", "banco de dados"

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tbusuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_assoc()) { // traz os dados da tabela em array. fetch_array para trazer tbm os índices
    
    array_push($data, $row); // vai inserindo os arrays dentro de outro array
}

echo json_encode($data);

?>