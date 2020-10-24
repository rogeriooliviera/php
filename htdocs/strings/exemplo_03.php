
<?php

$empresa   = "Hcode";
$empresa2  = " ";

$empresa2  = str_replace("o","0",$empresa);  //Primeiro parametro "O que quer trocar?"
$empresa2  = str_replace("e","3",$empresa);  //Segundo parametro "Pelo que quer trocar?"
                                             //Terceiro parametro "Onde a informação será trocada?"
echo ($empresa2);

?>