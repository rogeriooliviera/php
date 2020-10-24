<?php

  require_once("config.php");

  use Cliente\Cadastro; //Desta forma estou mudando e dizendo que nesse momento vou usar o Cadastro de Cliente la do namespace

  $cad = new Cadastro();

  $cad->setNome("Rogerio");
  $cad->setEmail("rogefilial27@ig.com");
  $cad->setSenha("123456");

  $cad->registrarVenda();


?>