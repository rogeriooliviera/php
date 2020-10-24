
<?php

class Documento{

private $numero;

public function getNumero(){
   return $this->numero;
}

 public function setNumero($n){
    $this->numero = $n;
 }

}

//herda da classe Documento
 class CPF extends Documento{
 
     //:bool vem do PHP 7
     public function validar():bool{ 

     $numeroCPF = $this->getNumero();
     //validacao do CPF - Nesse caso não está validando vai retornar sempre true
     return true;
    } 
 }


$doc = new CPF();

$doc->setNumero("12345678912"); //Setando valor no objeto

var_dump($doc->validar());//Executando o validar

echo "<br/>";

echo $doc->getNumero(); //Retornando o valor do objeto

?>