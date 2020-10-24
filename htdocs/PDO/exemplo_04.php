<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Joao";
$password = "qw123";
$id =2;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password); //Bind quer dizer ligar.
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "atualizado ok!";


?>