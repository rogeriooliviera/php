<?php 


//passando um parametros
//function  ola($texto = "mundo" ){

//passando dois parametros
//Parametro que não tem valo padrão devem ficar a esquerda
function ola($texto = "mundo", $periodo = "bom dia"){

return "Olá $texto! $periodo! <br>";

}


echo ola(); // Se nao passar nada ele pega o padrao que é mundo
echo ola("", "Boa Noite");// para passar vazio
echo ola("Glaucio", "Boa Tarde");
echo ola("João", "");

?>