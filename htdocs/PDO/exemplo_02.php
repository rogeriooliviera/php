<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","");

$stmt = $conn->prepare("select * from tb_usuarios order by deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //Vai fatiar retornando os dados linha por linha

echo json_encode(results);


?>