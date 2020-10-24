
<?php

$a = NULL;
$b = NULL;
$c = 10;

// OPERADOR NOVO DO PHP 7
// Operador de comparação

//Mostra para mim o a, se o a for nulo, mostra o b.
//Se o b também for nulo, então mostra o c.
echo $a ?? $b ?? $c;


?>