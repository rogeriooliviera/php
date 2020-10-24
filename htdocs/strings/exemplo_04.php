
<?php


$frase   = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q  = strpos($frase, $palavra);

//var_dump($q); //17 posiçao

//Retornar parte de uma texto realizando uma pesqueisa
$texto = substr($frase, 0, $q);  //Onde procuro, posição inicial, posição final

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>