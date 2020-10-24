<?php

namespace Cliente;

//Utilizando o conceito de namespace digo \Cadastro para voltar no raiz e estender daquela classe cadastro.
class Cadastro extends \Cadastro{

	public function registrarVenda(){

	echo "Foi registrado uma venda para o cliente ".$this->getNome();
}

}

?>