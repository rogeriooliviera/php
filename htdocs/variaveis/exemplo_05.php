<?php


$nome = "Roger";

function Teste(){

    global $nome;
	echo $nome;
}



function Teste2(){

    $nome = "João";
	echo $nome ." ". " #Agora no teste2! ";
}


Teste();
echo "<br/>";
Teste2();

?>