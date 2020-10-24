<?php

require_once("config.php");


/* Teste Realizado no metodo select
$sql = new FonteSql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios); */


/* Carrega um único usuário pelo seu Id
$root = new Usuario();
$root->loadById(3);
echo $root;
*/


/* Carrega uma lista de usuários, como o médoto getList é estatico não preciso criar objeto
$lista = Usuario::getList();
echo json_encode($lista);
*/

/* Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("ro");
echo json_encode($search);
*/

/*Carrega um usuário validando os dados de lgin
$usuario = new Usuario();
$usuario->login("jose","123456");
echo $usuario; */


/*Insert de usuario no banco SEM construtor 
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@12fg5");
$aluno->insert();
echo $aluno; */


/*Insert de usuario no banco COM construtor
$aluno = new Usuario("maria", "@mar01");
$aluno->insert();
echo $aluno; */


//UPDATE
/* Ok
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("ana carolina ","!@#123");
echo $usuario; */

//DELETE
$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario; 

?>