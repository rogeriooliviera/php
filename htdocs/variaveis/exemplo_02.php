
<?php

/*
$anoNascimento = 1990;
$nomeCompleto = "Rogerio Oliviera";
*/

//Na linha de baixo Nome com número.
$nome1 = "Roger";
$sobrenome = "Oliviera";
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if(isset($nome1)){
 
  echo  $nome1;
}

?>