
<?php 

$a = 10;
$y = 10;

// o que acontece na funcao vale só na funcao
echo "Passagem de parametro por variavel: ";
function  trocaValor($b){
  
      $b += 50;

      return $b;
}

echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;


echo "<br>";
echo "Passagem de parametro por referencia: ";
function  trocaValor2(&$z){
  
      $z += 50;

      return $z;
}

echo "<br>";
echo trocaValor2($y);
echo "<br>";
echo $y;



?>