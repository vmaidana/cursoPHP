<?php

$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\VINISQLSERVER;ConnectionPooling=0", "", "");

$stmt = $conn->prepare("SELECT * FROM tbusuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>