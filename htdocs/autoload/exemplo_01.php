<?php

//Função que é utilizada para realizar a importação automatica dos arquivos.php
//no momento em que é realizado o instanciamento da mesma "com o new".
function __autoload($nomeClasse){
	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}

$carro = new DelRey();
$carro->acelerar(80);

?>