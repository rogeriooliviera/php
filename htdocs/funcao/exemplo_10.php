
<?php

//FUNCAO ANONIMA
function test($callback){

//processo lento

$callback();

}

test(function(){

	echo "Terminou!!!";

});


?>