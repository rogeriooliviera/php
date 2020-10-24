
<?php

//Tipos basicos
$nome = "Hcold";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
//////////////////////////////


//Tipos Composto
$frutas = array("abacaxi","laranja","manga");
echo $frutas[2];

echo "<br/>";
echo "<br/>";

$nascimento = new DateTime();
//var_dump($nascimento);
//////////////////////////////


//Tipos especiais
$arquivo = fopen("exemplo_03.php", "r");
//var_dump($arquivo);

$nulo  = null;


?>