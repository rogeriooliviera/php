

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

//ele espera receber um array
echo json_encode($pessoas);


?>