<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("insert into tb_usuarios(deslogin,dessenha) values(:LOGIN,:PASSWORD)");

$login = "Jose";
$password = "123456";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password); //Bind quer dizer ligar.

$stmt->execute();

echo "inserido ok!";


?>