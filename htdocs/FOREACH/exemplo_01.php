
<?php

$meses = array("Janeiro","Fevereiro","Março","Abril",
	           "Maio","Junho","Julho","Agosto","Setembro","Outubro",
	           "Novembro","Dezembro");

echo "Esse é o foreach simples: "."<br>";

foreach ($meses as $mes) {
	echo "O mês é: ".$mes. "<br>";
}


echo "<br>";

echo "Esse é o foreach com Idex: "."<br>";
foreach ($meses as $index => $mes) {

	echo "O indice é: ".$index."<br>";
	echo "O mês é: ".$mes. "<br><br>";
}



?>