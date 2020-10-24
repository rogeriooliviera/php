
<?php

$a = 50;
$b = 35;

$c = 20;
$d = 60;

$e = 60;
$f = 60;


//Operador de Comparação
//Space Shipp  

echo "Se o a(50) for maior do que o b(35) Então traz 1! ";
var_dump($a <=> $b);

echo "<br>";

echo "Se o d(60) for maior do que o c(20) Então traz -1! ";
var_dump($c <=> $d);

echo "<br>";

echo "Se os valores forem iguais, Então traz 0! ";
var_dump($e <=> $f);



?>