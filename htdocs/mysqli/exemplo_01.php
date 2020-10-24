
<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){

	echo "Error:  " . $conn->connect_error;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha)VALUES(?,?)");

//O metodo bind ele espera como primeiro parametro os tipos de dados das interrogações.
//Como colocamos dois ss, ou seja, duas Strings então vamos passar na sequencia os dois parametros "usuario" e "senha".
$stmt->bind_param("ss",$login,$pass);

$login = "user";
$pass = "1234";

$stmt->execute();

//CASO precise inserir mais de um usuário o prepara statement já está preparado, bastar fazer o seguinte:

$login = "root";
$pass = "!2#$";

$stmt->execute();


?>