
<?php

$pessoas = array();

array_push($pessoas, array(
'nome'   => 'João',
'idade'  => 20
));

array_push($pessoas, array(
'nome'   => 'Glaucio',
'idade'  => 25
));

echo "Print do Array completo: ";
echo "<br>";
print_r($pessoas);

echo "<br>";

echo "Print do Array por Indice: ";
echo "<br>";
print_r($pessoas[0])."<br>";

echo "<br>";

echo "Print do Array por Indice + Chave: ";
echo "<br>";
print_r($pessoas[0]['nome']);


?>