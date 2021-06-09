<?php

require("../includes/constants.php");
require("../includes/functions.php");

$y=query("SELECT * FROM joyeria where id=?",$_GET['j'])[0];  //La j se trae de index templeates ya que determinamos ahi la variable y el cero es porque es un array

require("../templates/header.php");
require("../templates/joyeria.php");
?>
