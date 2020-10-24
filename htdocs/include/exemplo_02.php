<?php

//Incluir arquivo.
//Ele tentar funcionar mesmo que não exista ou esteja com problema.
//Além disso o include tem mais recuros.
//include "exemplo_01.php";

//Obriga o arquivo existir e estar funcionando.
//Se o arquivo não existir ou estar com problema gera um erro fatal. 
require_once "exemplo_01.php"; 
require_once "exemplo_01.php"; //Só chama umas vez

$resultado = somar(10, 50);

echo $resultado;


?>