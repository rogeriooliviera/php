
<?php

$nome = (int)$_GET["a"];
$nome2 = (int)$_GET["b"];

//var_dump($nome);
//echo "<br/>";
//var_dump($nome2);


$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br/>";

$ip2 = $_SERVER["SCRIPT_NAME"];
echo $ip2;


?>