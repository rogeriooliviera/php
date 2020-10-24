<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){

	echo "Error:  " . $conn->connect_error;

}

$result = $conn->query("select * from tb_usuarios order by deslogin");

/*
OBSERVAÇÕES:
$result->fetch_array() verificar se existem dados a serem exibidos
Se existir informação naquela linha add então na variavel $row
Quando acabar o fetch_array vai retornar um array vazio e array vazio no PHP e igual a falso.
*/

/*
//Desta naneira ele vai retornar tanto os nomes das colunas quanto os indices númericos.
while($row = $result->fetch_array()){

	var_dump($row);

}
*/


/*
//Para tetornar apenas as colunas basta utilizar a constante predefinida MYSQLI_ASSOC (classe MysqlI )
while($row = $result->fetch_array(MYSQLI_ASSOC)){

	var_dump($row);

}
*/


//E se precisarmos gerar um Jason devemos fazer desta forma:
$data = array(); //Crio uma variavel 

while($row = $result->fetch_array(MYSQLI_ASSOC)){

    array_push($data, $row);//adicine um novo item no array $data
	
}
//Quando terminar o While temos um array de array ai basta utilizar o comando para gerar o Jason.
   echo json_encode($data);

?>