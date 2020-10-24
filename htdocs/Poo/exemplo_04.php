<?php

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	//Metodo Construtor ou método mágico
	public function __construct($a,$b,$c){
       $this->logradouro = $a;
       $this->numero =$b;
       $this->cidade =$c;

	}   

	public function __destruct(){
		var_dump("DESTRUIR");

	}

    public function __toString(){
    	return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }


}

/*

//Inicio 01:
$meuEndereco = new Endereco("Rua Ademar Saraiva", "123", "São Paulo");

var_dump($meuEndereco);

//Destroi o Objeto
unset($meuEndereco);
//Fim 01.


*/
//Inicio:
$meuEndereco = new Endereco("Rua Ademar Saraiva de Barros", "123", "São Paulo");

echo $meuEndereco;
//Fim.



?>