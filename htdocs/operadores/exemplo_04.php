

<?php

$a = 55.0;
$b = 55;

echo "O a(55.0) é Maior do que o b(55)? ";
var_dump($a > $b);

echo "<br>";

echo "O a(55.0) é Menor do que o b(55)? ";
var_dump($a < $b);

echo "<br>";

echo "O a(55.0) é Igual(==) ao b(55)? ";
var_dump($a == $b); // == Operador de Igualdade de Valor

echo "<br>";

echo "O a(55.0) é Igual(===) ao b(55)? ";
var_dump($a === $b); // === Operador de Igualdade de Valor e Tipo

echo "<br>";

echo "O a(55.0) é Diferente(!=) ao b(55)? ";
var_dump($a != $b); // === Estamos validando apenas o valor

echo "<br>";

echo "O a(55.0) é Diferente(!==) ao b(55)? ";
var_dump($a !== $b); // === Estamos validando o valor e o tipo

?>