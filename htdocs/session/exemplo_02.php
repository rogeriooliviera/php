<?php 

//session_start();
require_once("configue.php");

session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

session_destroy();

 ?>