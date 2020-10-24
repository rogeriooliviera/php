
<?php

$nome = "joao rangel";
$nome2 = "Joao Rangel";
$nome3 = "joao rangel";


//deixar tudo maiusculo.
echo strtoupper($nome);

echo "<br>";


//deixar tudo minusculo.
echo strtolower($nome2);

echo "<br>";
echo "<br>";

//deixar as primeiras letras maiusculas (usado em nomes).
echo "Utilizando ucwords: ";
echo "<br>";
echo ucwords($nome3);

echo "<br>";
echo "<br>";
//Deixar apenas a primeira palavra da variável com letra maiuscula.
echo "Utilizando ucfirst: ";
echo "<br>";
echo ucfirst($nome3);


?>