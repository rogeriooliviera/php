<?php

require_once("configue.php");

session_regenerate_id();

echo session_id();

echo "<br>";

var_dump($_SESSION);

  ?>