<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("select * from tb_usuarios order by deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //Vai fatiar retornando os dados linha por linha


foreach ($results as $row) {  //primeiro array 
	
	foreach ($row as $key => $value) { //sungundo array key(nome da coluna) e value(valor)
		echo "<strong>".$key.":</strong>".$value."<br/>";
	}

echo "========================================<br>";
}

//var_dump($results);

?>